<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Demand::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Request
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required'
        ]);
        return Demand::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Demand::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
    }

    public function showAll()
    {
//        return Demand::orderBy('id', 'desc')->take(6)->get();
//        $result = DB::table('demands')
//            ->join('users', 'demands.user_id', '=', 'users.id')
//            ->select('demands.*', 'users.nom','users.prenom')
//            ->orderBy('id', 'desc')->take(6)->get();
        return Demand::with('userDemand')->orderBy('id', 'desc')->take(6)->get();
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
        $offer = Demand::find($id);
        $offer->update($request->all());
        return $offer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        return Demand::destroy($id);
    }

    /**
     *  Search by post title
     *
     * @param  string  $title
     * @return \Illuminate\Http\Response
     */
    public function search($title)
    {
        return Demand::where('title','like', '%'.$title.'%')->get();
    }
}
