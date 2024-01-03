@extends('static.layout.master-layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{@route('addAdmin')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="username" id="" class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">
                        @error('username')
                         {{$message}}   
                        @enderror
                      </small>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="useremail" id="" class="form-control @error('useremail') is-invalid @enderror " value="{{old('useremail')}}" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">
                          @error('useremail')
                           {{$message}}   
                          @enderror
                        </small>
                      </div>
                      <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input type="text" name="usernumber" id="" class="form-control @error('usernumber') is-invalid @enderror " value="{{old('usernumber')}}" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">
                          @error('usernumber')
                           {{$message}}   
                          @enderror
                        </small>
                      </div>
                      <div class="form-group">
                        <label for="">Address </label>
                        <input type="text" name="useradd" id="" class="form-control @error('useradd') is-invalid @enderror " value="{{old('useradd')}}" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">
                          @error('useradd')
                           {{$message}}   
                          @enderror
                        </small>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection