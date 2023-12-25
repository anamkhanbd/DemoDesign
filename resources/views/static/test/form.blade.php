@extends('static.layout.master-layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{@route('addUser')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col-12">
                            <label for="">Name</label>
                            <input type="text" value="{{old('username')}}" name="username" id="" class="form-control @error('username') is-invalid @enderror " placeholder="" aria-describedby="helpId">
                            <span class="colo-dengar">
                                @error('username')
                                {{$message}}   
                                @enderror
                            </span>
                        </div>

                        <div class="col-12">
                            <label for="">Email</label>
                            <input type="email" name="useremail" id="" class="form-control @error('useremail') is-invalid @enderror" value="{{old('useremail')}}" placeholder="" aria-describedby="helpId">
                            <span class="colo-dengar">
                                @error('useremail')
                                {{$message}}   
                                @enderror
                            </span>
                        </div>

                        <div class="col-12">
                            <label for="">Age</label>
                            <input type="number" name="userage" id="" class="form-control @error('userage') is-invalid @enderror" value="{{old('userage')}}" placeholder="" aria-describedby="helpId">
                            <span class="colo-dengar">
                                @error('userage')
                                {{$message}}   
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <label for="city">Select City </label>
                            <select class="form-control" name="city" id="City">
                            <option>Dhaka</option>
                            <option>Rangpur</option>
                            <option>Bogra</option>
                            </select>
                            <span class="colo-dengar">
                                @error('city')
                                {{$message}}   
                                @enderror
                            </span>
                        </div>
                      </div>
                      <button class="btn btn-success" type="submit"> Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection