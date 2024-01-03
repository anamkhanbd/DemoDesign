@extends('static.layout.master-layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="sub-manu">
                    <ul class="sub-manu">
                        <li><a href="#">Best Selling Product</a></li>
                        <li><a href="#">Hot Product</a></li>
                        <li><a href="#">Free Shiping Product</a></li>
                        <li><a href="#">Eccessoris</a></li>
                        <li><a href="#">Memory Card & Storage </a></li>
                        <li><a href="#">Drop Shiping</a></li>
                        <li><a href="#">Offer's</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="first">THIS IS PAGE 1</div>
                    <div class="second">THIS IS PAGE 2</div>
                </div>
                <div class="btn btn-success"><a href="{{@route('testForm')}}">Form</a></div>
                <div class="btn btn-success"><a href="{{@route('form2')}}">Form2</a></div>
                <div class="btn btn-success"><a href="{{@route('formEntry')}}">Form3</a></div>
                <div class="btn btn-success"><a href="{{@route('form4')}}">Form4</a></div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/slide.css">
@endsection

@section('js')
<script src="/js/slide.js"></script>
@endsection