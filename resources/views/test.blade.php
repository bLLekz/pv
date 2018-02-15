@extends('layouts.app')

@section('content')
<div class="container c ">
    <div class="row ">
        <div class="col-md t">1</div>
        <div class="col-md t">2</div>
        <div class="col-md t">3</div>
        <div class="w-100"></div>  <!-- перенос на новую -->
        <div class="col-md t">4</div>
        <div class="col-md t">5</div>
        <div class="col-md t">6</div>
    </div> 
    <div class="row">
        <div class="col-md t">1</div>
        <div class="col-md-6 t">2</div>
        <div class="col-md t">1</div>
        <div class="col-md t">2</div>
    </div>
    <div class="row">
        <div class="col-md t">1</div>
        <div class="col-md-auto t">Lorem ipsum dolor sit amet, consectetur</div>
        <div class="col-md t">1</div>
        <div class="col-md t">2</div>
    </div>
</div>
<br>

<!-- <div class="container c">
  <div class="row r align-items-end">
    <div class="col t">
      One of three columns
    </div>
    <div class="col t">
      One of three columns
    </div>
    <div class="col t">
      One of three columns
    </div>
  </div>
  <div class="row r align-items-center">
    <div class="col t">
      One of three columns
    </div>
    <div class="col t">
      One of three columns
    </div>
    <div class="col t">
      One of three columns
    </div>
  </div>
  <div class="row r align-items-end">
    <div class="col t">
      One of three columns
    </div>
    <div class="col t">
      One of three columns
    </div>
    <div class="col t">
      One of three columns
    </div>
  </div>
</div> -->
@endsection
