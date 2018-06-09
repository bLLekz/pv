@extends('layouts.second')

@section('content')
  <div class="container-fluid content_stl pb-5">
    <div class="container mb-5 pt-5">
      <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
        <li class="nav-item">
          <p class="nav-link  border_tab active" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab" aria-controls="home" aria-selected="true">Предстоящие</p>
        </li>
        <li class="nav-item">
          <p class="nav-link border_tab " id="previous-tab" data-toggle="tab" href="#previous" role="tab" aria-controls="profile" aria-selected="false">Прошедшие</p>
        </li>
      </ul>
      <hr>
      <div class="tab-content mt-5 pb-5">
        <div class="tab-pane active" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
          <div class="row">
            <div class="col-md form-control">qwe</div>
            <div class="col-md form-control">qwe</div>
          </div>
          <div class="row mt-5">
            <div class="col-md form-control">qwe</div>
            <div class="col-md form-control">qwe</div>
          </div>
        </div>
        <div class="tab-pane" id="previous" role="tabpanel" aria-labelledby="previous-tab">
          <div class="row">
            <div class="col-md form-control">123</div>
            <div class="col-md form-control">123</div>
          </div>
          <div class="row mt-5">
            <div class="col-md form-control">123</div>
            <div class="col-md form-control">123</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection