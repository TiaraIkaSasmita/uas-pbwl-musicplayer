<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\album;
class albumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=album::all();
        return view('album.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.add');
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
                'artist_id'=>'required',
                'album_name' => 'required'
            ],
            [
                'artist_id.required'=>'Wajib diisi',
                'album_name.required'=>'NAMA wajib diisi'
            ]);

        album::create([
            'artist_id' => $request->artist_id,
            'album_name' => $request->album_name
        ]);

        return redirect('album');
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
        $row=album::findOrFail($id);
        return view('album.edit',compact('row'));
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
                'artist_id'=>'required',
                'album_name' => 'required'
            ],
            [
                'artist_id.required'=>'Wajib diisi',
                'album_name.required'=>'NAMA wajib diisi'
            ]);

        $row=album::findOrFail($id);
        $row->update([
            'artist_id'=>$request->artist_id,
            'album_name'=>$request->album_name
        ]);

        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=album::findOrFail($id);
        $row->delete();

        return redirect('album');
    }
}
