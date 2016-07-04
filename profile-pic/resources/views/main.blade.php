<!DOCTYPE html>
<html>
<head>
    <title>Profile Pic Generator</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>
<body>
    <section id="header">
        <div class="container">
            <div class="logo">
                <h1>Profile Pic Generator</h1>
            </div>
        </div>
        @if(count($errors) > 0)
            @foreach($errors->all() as $e)
                <div class="errors">
                    <div class="container">
                        <h3>{{$e}}</h3>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
    <section id="main-content">
        @yield('content')
        @yield('download_image')
    </section>
</body>
</html>