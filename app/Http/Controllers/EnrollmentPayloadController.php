<?php

namespace App\Http\Controllers;

use App\EnrollmentPayload;
use Illuminate\Http\Request;

    class EnrollmentPayloadController extends Controller
    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payloads = EnrollmentPayload::orderBy('created_at', 'desc')->get();
        return view('enrollment_payload.index', compact('payloads'));
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
     * @param  \App\EnrollmentPayload  $enrollmentPayload
     * @return \Illuminate\Http\Response
     */
    public function show(EnrollmentPayload $enrollment_payload)
    {
        return view('enrollment_payload.show', compact('enrollment_payload'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EnrollmentPayload  $enrollmentPayload
     * @return \Illuminate\Http\Response
     */
    public function edit(EnrollmentPayload $enrollmentPayload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EnrollmentPayload  $enrollmentPayload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EnrollmentPayload $enrollmentPayload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EnrollmentPayload  $enrollmentPayload
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnrollmentPayload $enrollmentPayload)
    {
        //
    }
}
