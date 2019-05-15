<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ { Category, Region };

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  String  $regionSlug
     * @param  Integer  $departementCode
     * @param  Integer  $communeCode
     * @return \Illuminate\Http\Response
     */
    public function index(
    
        Request $request,
        $regionSlug = null,
        $departementCode = null,
        $communeCode = null)
    {
        $categories = Category::select('name', 'id')->oldest('name')->get();
        $regions = Region::select('id','code','name','slug')->oldest('name')->get();
        $region = $regionSlug ? Region::whereSlug($regionSlug)->firstOrFail() : null;
        $page = $request->query('page', 0);
        return view('adsvue', compact('categories', 'regions', 'region', 'departementCode', 'communeCode', 'page'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
