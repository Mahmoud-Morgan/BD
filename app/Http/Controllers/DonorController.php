<?php

namespace App\Http\Controllers;

use App\bloodType;
use App\citie;
use App\Donor;
use App\governorate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('donor');

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
        $Donor = new Donor();
        $Donor->d_name = $request->d_name;
        $Donor->d_mobile = $request->d_mobile;
        $Donor->email = $request->email;
        $Donor->d_b_id = $request->d_b_id;
        $Donor->d_governorate = $request->d_governorate;
        $Donor->d_city = $request->d_city;
        $Donor->save();

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requests
     * @return \Illuminate\Http\Response
     */

    public function filter(Request $requests)
    {
        //
//        $requests->d_governorate;
//        $requests->d_b_id;
//        $requests->d_city;

             $donors = DB::table('donors')
         ->join('bloodTypes', 'd_b_id', '=', 'b_id')
         ->leftJoin ('governorates', 'd_governorate', '=', 'id')
         ->leftJoin ('cities', 'd_city', '=', 'c_id')
         ->select('donors.*', 'bloodTypes.blood_type', 'governorates.governorate_name','cities.city_name')
          ->orderBy('d_governorate','asc')
          ->orderBy('d_city','asc')
         ->get();


             if(!empty($requests->d_b_id)){
                 $donors = $donors->where ('d_b_id','=',$requests->d_b_id);
             }

             if(!empty($requests->d_governorate)) {
                 $donors = $donors->where('d_governorate', '=', $requests->d_governorate);
             }

             if(!empty($requests->d_city)) {
                 $donors = $donors->where('d_city', '=', $requests->d_city);
             }

        return view('search')->with('donors',$donors);







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
