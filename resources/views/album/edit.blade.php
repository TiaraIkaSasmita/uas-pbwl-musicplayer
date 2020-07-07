@extends('layouts.app')

@section('content')

<style>
            html, body {
                background-color: #8FBC7A;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

<div class="container">
<center>
<h3><b>Edit Data Album</b></h3>
<a href="{{ url('album') }}">Data Album</a></center>
<form action="{{url('/album/'.$row->album_id)}}" method="POST">
	<input name="_method" type="hidden" value="PATCH">
@csrf
	<table class="table table-bordered"> 
	<tr class="bg-success">
		<td> ID ARTIST </td>
		<td><input type="text" name="artist_id" value="{{$row->artist_id}}"></td>
	</tr>
	<tr>
		<td class="bg-warning"> NAMA ALBUM</td>
		<td class="bg-warning"><input type="text" name="album_name" value="{{$row->album_name}}"></td>
	</tr>
	<tr class="bg-warning">
		<td></td>
		<td><input type="submit" value="UPDATE" class="btn btn-success"></td>
	</tr>
</table>
</form>
</div>

@endsection