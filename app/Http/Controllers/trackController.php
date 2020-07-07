<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\track;
class trackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=track::all();
        return view('track.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('track.add');
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
                'track_name'=>'required',
                'artist_id'=>'required',
                'album_id' => 'required',
                'time'=>'required'
            ],
            [
                'track_name.required'=>'Nama Track wajib diisi',
                'artist_id.required'=>'Wajib diisi',
                'album_id.required'=>'Wajib diisi',
                'time.required'=>'Wajib diisi'
            ]);

        track::create([
            'track_name'=>$request->track_name,
            'artist_id' => $request->artist_id,
            'album_id' => $request->album_id,
            'time' => $request->time,
        ]);

        return redirect('track');
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
        $row=track::findOrFail($id);
        return view('track.edit',compact('row'));
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
                'track_name'=>'required',
                'artist_id'=>'required',
                'album_id' => 'required',
                'time'=>'required'
            ],
            [
                'track_name.required'=>'Nama Track wajib diisi',
                'artist_id.required'=>'Wajib diisi',
                'album_id.required'=>'Wajib diisi',
                'time.required'=>'Wajib diisi'
            ]);

        $row=track::findOrFail($id);
        $row->update([
            'track_name'=>$request->track_name,
            'artist_id'=>$request->artist_id,
            'album_id'=>$request->album_id,
            'time'=>$request->time
        ]);

        return redirect('track');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=track::findOrFail($id);
        $row->delete();

        return redirect('track');
    }
}
