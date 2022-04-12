<?php

namespace App\Http\Controllers;

use App\Http\Resources\PettionResource;
use App\Http\Resources\PettionCollection;
use App\Models\Pettion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class pettitioncontroller extends Controller
{

	public function index()
	{
		$petitions = Pettion::all();
		return new PettionCollection($petitions);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return PettionResource
	 */
	public function store(Request $request)
	{
		$petition = Pettion::create($request->only([
			'title', 'description', 'category', 'author', 'signees'
		]));
		return new PettionResource($petition);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Models\Pettion $pettion
	 * @return PettionResource
	 */
	public function show(Pettion $pettion)
	{
		return new PettionResource($pettion);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Models\pettion $pettion
	 * @return Response
	 */
	public function update(Request $request, pettion $pettion)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Models\pettion $pettion
	 * @return Response
	 */
	public function destroy(pettion $pettion)
	{
		//
	}
}
