<?php

namespace App\Http\Controllers;

use App\InModel;
use Illuminate\Http\Request;

class InModelController extends Controller
{


    public  function php(){
	return view('pgesIn.php');
    }

    public  function python(){
	return view('pgesIn.python');
    }

   public  function cisco(){
	return view('pgesIn.cisco');
    }

   public  function ingles(){
	return view('pgesIn.ingles');
   }

    public  function linux(){
	return view('pgesIn.linux');
    }

    public  function jscript(){
	return view('pgesIn.jscript');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InModel  $inModel
     * @return \Illuminate\Http\Response
     */
    public function show(InModel $inModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InModel  $inModel
     * @return \Illuminate\Http\Response
     */
    public function edit(InModel $inModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InModel  $inModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InModel $inModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InModel  $inModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(InModel $inModel)
    {
        //
    }
}
