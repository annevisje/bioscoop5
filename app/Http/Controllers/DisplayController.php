<?php

namespace App\Http\Controllers;

use App\tbl_displays;
use App\tbl_movies;
use Illuminate\Http\Request;
use function Symfony\Component\Debug\Tests\FatalErrorHandler\test_namespaced_function;

class DisplayController extends Controller
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
    public function show($displayID)
    {
        $display = tbl_displays::find($displayID);
        $movie = tbl_movies::find($display->movie_id);
        $movie = json_decode(file_get_contents("http://www.omdbapi.com/?apikey=31d16dc7&i=" . $movie->movie_id . "&plot=full=json"));
        $displayinfo = [$movie, $display];

        return view('ticket.select', compact('displayinfo', 'displayinfo'));
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
