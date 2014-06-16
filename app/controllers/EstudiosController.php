<?php

use Carbon\Carbon;

class EstudiosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /estudios
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$estudios = Post::where('tipo',1)->get();
		return View::make('control.estudios',array('estudios'=>$estudios));
	}

	public function index_home() {
		$estudios = Post::where('tipo',1)->get();
		return View::make('estudios', array('estudios'=>$estudios));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /estudios/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('control.estudios_nuevo');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /estudios
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
		if( Input::file('Filedata')->move( public_path().'/media', $file)) {

			$nueva = new Post;
			$nueva->titulo = Input::get('titulo');
			$nueva->tipo = 1;
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
	 * GET /estudios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$estudio = Post::find($id);
		return View::make('estudio',array('estudio'=>$estudio));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /estudios/{id}/edit
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
	 * PUT /estudios/{id}
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
	 * DELETE /estudios/{id}
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
		$cual->delete();
		return '1';
	}

}