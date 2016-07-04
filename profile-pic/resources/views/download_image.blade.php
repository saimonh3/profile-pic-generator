
@extends('main')

@section('download_image')
    <div class="container">
        <img src="{{url('uploads/images/'.$file_id)}}">
    </div>

@endsection