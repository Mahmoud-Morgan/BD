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


        $doners = DB::table('doners')->get();
//        $bloodtypes = DB::table('bloodtypes')->get();


        $doners=$doners->where('d_governorate','=','9');



//        $bloodtype_id= $request->bloodtype;
//        $governorate_id= $request->governorate;
//        $city_id= $request->city;
//
//
//
//        if (!empty($bloodtype_id)) {
//            //We should filter gender
//            $query->where('d_b_id', $bloodtype_id);
//        }
//
//        if (!empty($governorate_id)) {
//            //We should filter status too
//            $query->where('d_governorate', $governorate_id);
//        }
//
//        if (!empty($city_id)) {
//            //Filter by age
//            $query->where('d_city', $city_id);
//        }

//        $collections = $query->get();

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
