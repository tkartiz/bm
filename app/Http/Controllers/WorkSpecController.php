<?php

namespace App\Http\Controllers;

use App\Models\work_spec;
use App\Http\Requests\Storework_specRequest;
use App\Http\Requests\Updatework_specRequest;

class WorkSpecController extends Controller
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
     * @param  \App\Http\Requests\Storework_specRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storework_specRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\work_spec  $work_spec
     * @return \Illuminate\Http\Response
     */
    public function show(work_spec $work_spec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\work_spec  $work_spec
     * @return \Illuminate\Http\Response
     */
    public function edit(work_spec $work_spec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatework_specRequest  $request
     * @param  \App\Models\work_spec  $work_spec
     * @return \Illuminate\Http\Response
     */
    public function update(Updatework_specRequest $request, work_spec $work_spec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\work_spec  $work_spec
     * @return \Illuminate\Http\Response
     */
    public function destroy(work_spec $work_spec)
    {
        //
    }
}
