@extends('main')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="default-img">
                        <img src="{{url('images/default.jpg')}}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form">
                        <form action="/" method="POST" enctype="multipart/form-data">
                            <input type="file" name="image">
                            <input type="submit" name="submit" value="Upload">
                            {{csrf_field()}}
                        </form>
                    </div>

                </div>
            </div>
        </div>
@endsection