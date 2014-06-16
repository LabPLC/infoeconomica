<?php

use Carbon\Carbon;

class InfografiasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /infografias
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$infografias = Post::where('tipo',2)->get();
		return View::make('control.infografias',array('infografias'=>$infografias));
	}

	public function index_home() {
		$infografias = Post::where('tipo',2)->get();
		return View::make('infografias', array('infografias'=>$infografias));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /infografias/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('control.infografias_nuevo');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /infografias
	 *
	 * @return Response
	 */
	public function store()
	{
		//check for a file
		if(!Input::hasFile('Filedata')) {
			return 'No file.';
		}

		//nuevo archivo
		$now = Carbon::now();
		$code = $now->timestamp;
		$file = $code . '.' . Input::file('Filedata')->getClientOriginalExtension();
		$fulsize = 'full_'.$code . '.' . Input::file('Filedata')->getClientOriginalExtension();
		if( Input::file('Filedata')->move( public_path().'/media', $fulsize)) {

			//resize the fucking image
			$img = Image::make(public_path().'/media/'.$fulsize);

			//checar si el tamaño original es muy grande
			if($img->width() > 1000) {
				// resize the image to a width of 300 and constrain aspect ratio (auto height)
				$img->resize(1000, null, function ($constraint) {
				    $constraint->aspectRatio();
				});
				$img->save(public_path().'/media/'.$file,100);
			}

			$nueva = new Post;
			$nueva->titulo = Input::get('titulo');
			$nueva->tipo = 2;
			$nueva->categoria = 1;
			$nueva->fecha_publicacion = Carbon::now();
			$nueva->attachment = $file;
			$nueva->imagen = '';
			$nueva->subtitulo = '';
			$nueva->descripcion = Input::get('descripcion');
			$nueva->save();

			return '1';

		} else {
			return 'Invalid file type.';
		}
	}

	/**
	 * Display the specified resource.
	 * GET /infografias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$infografia = Post::find($id);
		return View::make('infografia',array('infografia'=>$infografia));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /infografias/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /infografias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /infografias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//ubicar el post
		$cual = Post::find($id);
		//eliminar el archivo
		File::delete(public_path().'/media/'.$cual->attachment);
		File::delete(public_path().'/media/full_'.$cual->attachment);
		$cual->delete();
		return '1';
	}

}