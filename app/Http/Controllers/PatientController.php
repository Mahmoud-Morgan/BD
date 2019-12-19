<?php

namespace App\Http\Controllers;

use App\Mail\PatientRequest;
use App\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('patientform');
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
        $patient= new patient();
        $patient->p_name = $request->p_name;
        $patient->p_case = $request->p_case;
        $patient->p_b_id = $request->p_b_id;
        $patient->hospital = $request->hospital;
        $patient->p_mobile = $request->p_mobile;
        $patient->p_governorate = $request->p_governorate;
        $patient->p_city = $request->p_city;
        $patient->save();

        //
        //query


        $donors = DB::table('donors')
            ->join('bloodTypes', 'd_b_id', '=', 'b_id')
            ->leftJoin ('governorates', 'd_governorate', '=', 'id')
            ->leftJoin ('cities', 'd_city', '=', 'c_id')
            ->select('donors.*', 'bloodTypes.blood_type', 'governorates.governorate_name','cities.city_name')
            ->orderBy('d_governorate','asc')
            ->orderBy('d_city','asc')
            ->get();



            $donors = $donors->where ('d_b_id','=',$request->p_b_id);



            $donors = $donors->where('d_governorate', '=', $request->p_governorate);



            $donors = $donors->where('d_city', '=', $request->p_city);

            //





            //



        foreach ($donors as $donor) {

            Mail::to($donor->email)->send(new PatientRequest($patient,$donor));
        }

        //

        return view('sentRequest');

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
