<?php

namespace App\Http\Controllers;

use App\bloodType;
use App\citie;
use App\Doner;
use App\governorate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('doner');

    }


    public function info()
    {
        //
        return ('info token');
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
        $Doner = new Doner();
        $Doner->d_name = $request->d_name;
        $Doner->d_mobile = $request->d_mobile;
        $Doner->email = $request->email;
        $Doner->d_b_id = $request->d_b_id;
        $Doner->d_governorate = $request->d_governorate;
        $Doner->d_city = $request->d_city;
        $Doner->save();

        return back();
    }
    public function filter(Request $request)
    {
        //
        $request->d_governorate = 9 ;
        $request->d_b_id;
        $request->d_city=139;

             $doners = DB::table('doners')
         ->join('bloodTypes', 'd_b_id', '=', 'b_id')
         ->leftJoin ('governorates', 'd_governorate', '=', 'id')
         ->leftJoin ('cities', 'd_city', '=', 'c_id')
         ->select('doners.*', 'bloodTypes.blood_type', 'governorates.governorate_name','cities.city_name')
         ->get();


             if(!empty($request->d_b_id)){
                 $doners = $doners->where ('d_b_id','=',$request->d_b_id);
             }

             if(!empty($request->d_governorate)) {
                 $doners = $doners->where('d_governorate', '=', $request->d_governorate);
             }

             if(!empty($request->d_city)) {
                 $doners = $doners->where('d_city', '=', $request->d_city);
             }

        return view('donersTables')->with('doners',$doners);







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