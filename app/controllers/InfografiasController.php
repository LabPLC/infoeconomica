<?php

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
		//
		$nueva = new Post;
		$nueva->titulo = Input::get('titulo');
		$nueva->tipo = 2;
		$nueva->fecha_publicacion = '2014-11-11';
		$nueva->attachment = '';
		$nueva->imagen = '';
		$nueva->subtitulo = '';
		$nueva->descripcion = Input::get('descripcion');
		$nueva->save();

		return '1';
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
		//
		$cual = Post::find($id);
		$cual->delete();
		return '1';
	}

}