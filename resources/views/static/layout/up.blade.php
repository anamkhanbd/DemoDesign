<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{--Font Awesome 5.12.0--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{--custom css --}}
    <link rel="stylesheet" href="/css/style.css">

    {{--dynamic css--}}
    @yield('css')
  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-6" id="logo">
                        <h1>
                            <i class="fas fa-camera-retro"></i>
                            Camera World
                        </h1>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <strong>Toll Free : +8801505050505</strong> <br>
                                <a href="#">Login</a>
                                <a href="#">My Account</a>
                                <a href="#">Card</a>
                            </div>
                            <div class="col-6">
                                <input type="search" name="" id="" placeholder="Search Here "> 
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row blue">
            <div class="container">
                <nav class="navbar navbar-expand-sm navbar-light blue">
                    {{--
                    <a class="navbar-brand" href="#">Navbar</a>
                    --}}
                    <button class="navbar-toggler d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item ">
                                <a style="color: #fff;" class="nav-link" href="{{@route('home')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('camera')}}">Camera</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('flim')}}">Flim Camera</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('dslrCamera')}}">DSLR Camera</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('lans')}}">Lans</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('cameraBag')}}">Camera Bag</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('tripots')}}">Tripots</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('cameraBattery')}}">Camera Battery</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('cameraCharger')}}">Charger </a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('microwPhone')}}">Microw Phone</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('cameraSoftware')}}">Software</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: #fff;" class="nav-link" href="{{@route('cameraGear')}}">Gear</a>
                            </li>
                            {{--
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Action 1</a>
                                    <a class="dropdown-item" href="#">Action 2</a>
                                </div>
                            </li>
                            --}}

                        </ul>

                        {{--
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        --}}
                    </div>
                </nav>
            </div>
        </div>
      </div>