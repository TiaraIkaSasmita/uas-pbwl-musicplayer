<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class played extends Model
{
    protected$table ="tb_played";
	protected$primaryKey='played_id';
	protected$fillable=['artist_id','album_id', 'track_id', 'played'];
}
