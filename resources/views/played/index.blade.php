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

	<center><h3>Daftar Played</h3></center>
	<center><a href="{{ url('played/create') }}">Tambah Data Played</a></center>
	<table class="table table-bordered">
		<tr class="bg-success">
			<td> ARTIS ID </td>
			<td> ALBUM ID </td>
			<td> TRACK ID </td>
			<td> PLAYED </td>
			<td> EDIT </td>
			<td> HAPUS </td>
		</tr>

		@foreach($rows as $row);

		<tr class="bg-warning">
			<td> {{ $row->artist_id }} </td>
			<td> {{ $row->album_id }} </td>
			<td> {{ $row->track_id }} </td>
			<td> {{ $row->played }} </td>
			<td><a href="{{url('played/'.$row->played_id.'/edit')}}"> EDIT </a></td>
			<td class="bg-warning">
				<form action="{{url('played/'.$row->played_id)}}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button class="btn btn-success"> HAPUS </button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection