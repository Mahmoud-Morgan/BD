<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
use App\Mail\ThanksDonor;
=======
use App\Mail\OrderdStarted;
>>>>>>> 0c72456896b473df7edc33a903d6cd7451193ea3
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
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

    public function start(Request $request)
    {
<<<<<<< HEAD
        Mail::to('g@g.com')->send(new ThanksDonor);
=======
        Mail::to('g@g.com')->send(new OrderdStarted);
>>>>>>> 0c72456896b473df7edc33a903d6cd7451193ea3
    }

    public function ship(Request $request)
    {
        return "ship";
    }

    public function complete(Request $request)
    {
        return "complete";
    }

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
