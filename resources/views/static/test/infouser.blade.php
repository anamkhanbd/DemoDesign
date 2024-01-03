@extends('static.layout.master-layout')
@section('title')
    Info
@endsection
<div class="container-fluid">
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading"> {{$message}}</h4>
        </div>
    @endif
    </div>
</div>
@section('content')
    <div class="container justify-content-center">
        <div class="row">
            <div class="com-sm-8">
                <form action="{{@route('store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="username">Name</label>
                      <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{old("username")}}" placeholder="Name Write Here" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">
                        @error('username')
                            {{$message}}
                        @enderror
                      </small>
                    </div>

                    <div class="form-group">
                        <label for="useremail">Email</label>
                        <input type="text" name="useremail" id="useremail" class="form-control @error('useremail') is-invalid @enderror" value="{{old("useremail")}}" placeholder="Name Write Here" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">
                          @error('useremail')
                              {{$message}}
                          @enderror
                        </small>
                      </div>

                      <div class="form-group">
                        <label for="usernumber">Mobile Number</label>
                        <input type="text" name="usernumber" id="usernumber" class="form-control @error('usernumber') is-invalid @enderror" value="{{old("usernumber")}}" placeholder="Name Write Here" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">
                          @error('usernumber')
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