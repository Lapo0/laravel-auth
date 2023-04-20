<?php

namespace App\Http\Controllers;

use App\Models\cookie;
use App\Http\Requests\StorecookieRequest;
use App\Http\Requests\UpdatecookieRequest;

class CookieController extends Controller
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
     * @param  \App\Http\Requests\StorecookieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecookieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cookie  $cookie
     * @return \Illuminate\Http\Response
     */
    public function show(cookie $cookie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cookie  $cookie
     * @return \Illuminate\Http\Response
     */
    public function edit(cookie $cookie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecookieRequest  $request
     * @param  \App\Models\cookie  $cookie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecookieRequest $request, cookie $cookie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cookie  $cookie
     * @return \Illuminate\Http\Response
     */
    public function destroy(cookie $cookie)
    {
        //
    }
}
