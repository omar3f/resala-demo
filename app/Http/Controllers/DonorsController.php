<?php

namespace App\Http\Controllers;

use App\Tempdonor;
use App\Donor;
use App\VerificationBox\EmailSender\EmailSender;
use Illuminate\Support\Facades\View;
use Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Mockery\CountValidator\Exception;

class DonorsController extends Controller
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
        return view('donors.create');
    }

    /**
     * @param Requests\StoreDonorRequest $request
     * @param EmailSender $email_sender
     * @param Tempdonor $temp_donor
     * @return mixed
     */
    public function sendMail(Requests\StoreDonorRequest $request, EmailSender $email_sender, Tempdonor $temp_donor, Donor $donor) {

        if($email_sender->confirmedMail($donor, ['email', $request->email])) {
            $response = $email_sender->sendMail($temp_donor, $request->all(), $request->email, $request->fullName('first_name', 'last_name'));
        } else {
            $response = 'Email already here';
        }

        return response()->json(['success' => $response]);

    }

    public function store(Request $request)
    {
        \App\Donor::create($request->all());
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
