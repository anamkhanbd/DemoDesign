@extends('static.layout.master-layout')
@section('title')
    Test.Form4
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-6">
                <form action="{{@route('login')}}" method="post">
                    @csrf
                    {{--username--}}
                    <div class="form-group">
                      <label for="">Name </label>
                      <input type="text" name="username" id="" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" placeholder="Enter Your Name" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">
                        @error('username')
                            {{$message}}
                        @enderror
                      </small>
                    </div>
                    {{--useremail--}}
                    <div class="form-group">
                        <label for="">Email </label>
                        <input type="text" name="useremail" id="" value="{{old('useremail')}}" class="form-control @error('useremail') is-invalid @enderror" placeholder="Enter Your Name" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">
                          @error('useremail')
                              {{$message}}
                          @enderror
                        </small>
                      </div>
                      {{--password--}}
                      <div class="form-group">
                        <label for="">Password </label>
                        <input type="text" name="password" id="" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Name" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">
                          @error('password')
                              {{$message}}
                          @enderror
                        </small>
                      </div>
                      {{--Retype password--}}
                      <div class="form-group">
                        <label for="">Confirm Password </label>
                        <input type="password" name="cr-password" id="" value="{{old('cr-password')}}" class="form-control @error('cr-password') is-invalid @enderror" placeholder="Enter Your Name" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">
                          @error('cr-password')
                              {{$message}}
                          @enderror
                        </small>
                      </div>
                      {{--submit btn--}}
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection