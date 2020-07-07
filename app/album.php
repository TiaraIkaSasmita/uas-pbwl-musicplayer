<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected$table ="tb_album";
	protected$primaryKey='album_id';
	protected$fillable=['artist_id','album_name'];
}
