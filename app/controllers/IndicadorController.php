<?php

/*
 Controller para adminsitrar las operaciones 
 sobre indicadores
*/

class IndicadorController extends BaseController {

	/*
		inserta un nuevo indicador a la lista
	*/
    public function insert() {
    
	    //checar auth, si no, 0
	    //if(!Auth::check())
	    	//die('0');
	    
	    $input = Input::all();
	    
	    //die(Input::get('dato'));
    	
    	//iserta y recupera el ID del indicador
    	$id = DB::table('indicadores')->insertGetId(
			array(
			'clave' => $input['clave'],
			'nombre' => $input['nombre'],
			'descripcion'=>$input['descripcion'],
			'frecuencia_muestreo'=> $input['fm'])
		);
		
		return $id;
    
    }
    public function insert_muestra() {

        //validar inputs
        $muestra = new Muestra;
        $muestra->id_indicador = Input::get('cve');
        $muestra->valor = Input::get('muestra');
        //timeline valores
        $muestra->anio = Input::get('anio');
        $muestra->mes = 0;
        $muestra->dia = 0;

        //si tiene freq, es men,tri,sem,dia
        if(Input::has('freq')) {

            $muestra->mes = Input::get('freq');

            //diario
            if(Input::has('freq2')) {
                $muestra->dia = Input::get('freq');
            }

        }

        $muestra->save();

        return '0';

    }
    
    /*
    	Muestra la lista de indicadores
    */
    
    public function lista() {
    
    	$muestreo_enum = array("Anual","Mensual","Trimestral", "Semestral", "Diaria");
        $freq_enum[1]="Ene";
        $freq_enum[2]="Feb";
        $freq_enum[3]="Mar";
        $freq_enum[4]="Abr";
        $freq_enum[5]="May";
        $freq_enum[6]="Jun";
        $freq_enum[7]="Jul";
        $freq_enum[8]="Ago";
        $freq_enum[9]="Sep";
        $freq_enum[10]="Oct";
        $freq_enum[11]="Nov";
        $freq_enum[12]="Dic";
        $freq_enum[301]="Primer trimestre";
        $freq_enum[302]="Segundo trimestre";
        $freq_enum[303]="Tercer trimestre";
        $freq_enum[304]="Cuarto trimestre";
        $freq_enum[601]="Primer semestre";
        $freq_enum[602]="Segundo semestre";

    	//seleccionar todos y pasarselos al view
    	$indicadores = DB::select("select * from indicadores");
    	return View::make('lista', array('indicadores'=>$indicadores,'enums'=>$muestreo_enum,"freq_enums"=>$freq_enum));
	    
    }
    
    /*
    	Ver un indicador
    */
    public function detalle($clave) {
    	$indicadores = DB::table('indicadores')->where('clave','=',$clave)->get();
        $muestreo_enum = array("Anual","Mensual","Trimestral", "Semestral", "Diaria");

        $freq_enum[0]="";
        $freq_enum[1]="Ene";
        $freq_enum[2]="Feb";
        $freq_enum[3]="Mar";
        $freq_enum[4]="Abr";
        $freq_enum[5]="May";
        $freq_enum[6]="Jun";
        $freq_enum[7]="Jul";
        $freq_enum[8]="Ago";
        $freq_enum[9]="Sep";
        $freq_enum[10]="Oct";
        $freq_enum[11]="Nov";
        $freq_enum[12]="Dic";
        $freq_enum[301]="Primer trimestre";
        $freq_enum[302]="Segundo trimestre";
        $freq_enum[303]="Tercer trimestre";
        $freq_enum[304]="Cuarto trimestre";
        $freq_enum[601]="Primer semestre";
        $freq_enum[602]="Segundo semestre";
		
		//dd($indicadores);
		//solo queremos el primero
		$indicador = $indicadores[0];

        //muestras de este indicador
        $muestras = DB::table('muestras')->where('id_indicador','=',$indicador->id)->orderBy('anio','desc')->orderBy('mes','desc')->get();
		
	    return View::make('indicador',array('indicador'=>$indicador,'muestras'=>$muestras,"freq_enums"=>$freq_enum));
    }

    // eliminar un indicador, incluyendo todas sus muestras
    public function eliminar() {

        //eliminar el indicador
        $indicador = Indicador::find(Input::get('indicador'));
        $indicador->delete();

        //eliminar las muestras
        Muestra::where('id_indicador','=',Input::get('indicador'))->delete();

        //ajax output
        return '1';

    }

     // eliminar una muestra
    public function eliminar_muestra() {

        //eliminar la muestra
        $muestra = Muestra::find(Input::get('muestra'));
        $muestra->delete();

        //ajax output
        return '1';

    }

    //encabezado
    private function encabezado_csv($frecuencia) {

        switch($frecuencia) {
            case 0:
                return array('anio','muestra');
                break;
            case 1:
                return array('anio','mes','muestra');
                break;
            case 2:
                return array('anio','trimestre','muestra');
                break;
            case 3:
                return array('anio','semestre','muestra');
                break;
            case 4:
                return array('anio','mes','dia','muestra');
                break;
        }

    }

    //descarga
    public function descarga($clave) {

        $config = new ExporterConfig();
        $exporter = new Exporter($config);

        //indicador
        $indicador = Indicador::where('clave','=',$clave)->first();
        $muestras = Muestra::where('id_indicador','=',$indicador->id)->orderBy('anio','DESC')->orderBy('mes','ASC')->get();

        $salida = array();
        $salida[] = $this->encabezado_csv($indicador->frecuencia_muestreo);

        //recorrer las muestras
        foreach ($muestras as $muestra) {
            //decide que hacer 
            switch($indicador->frecuencia_muestreo) {

                case 0:
                    $salida[] = array($muestra->anio,$muestra->valor);
                    break;
                case 1:
                    $salida[] = array($muestra->anio,$muestra->mes,$muestra->valor);
                    break;
                case 2:
                    $val = $muestra->mes;
                    $val = $val - 300;
                    $salida[] = array($muestra->anio,$val,$muestra->valor);
                    break;
                case 3:
                    $salida[] = array($muestra->anio,($muestra->mes - 600),$muestra->valor);
                    break;
                case 4:
                    $salida[] = array($muestra->anio,$muestra->mes,$muestra->dia,$muestra->valor);
                    break;
            }
        }

        //el header
        header('Content-type: text/csv');
        header('Content-disposition: attachment;filename='.$clave.'.csv');

        //exportar
        $exporter->export('php://output', $salida);

    }
}

?>
