<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artist;
class artistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=artist::all();
        return view('artist.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artist.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'artist_name' => 'required'
            ],
            [
                'artist_name.required'=>'NAMA wajib diisi'
            ]);

        artist::create([
            'artist_name' => $request->artist_name
        ]);

        return redirect('artist');
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
        $row=artist::findOrFail($id);
        return view('artist.edit',compact('row'));
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
        $request->validate([
            'artist_name' => 'required'
        ],
        [
            'artist_name.required'=>'NAMA wajib diisi'
        ]);

        $row=artist::findOrFail($id);
        $row->update([
            'artist_name'=>$request->artist_name
        ]);

        return redirect('artist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=artist::findOrFail($id);
        $row->delete();

        return redirect('artist');
    }
}
