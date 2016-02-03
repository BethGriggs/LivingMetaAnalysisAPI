@extends('app')

@section('content')
    <div class="row">
      <div class="col-sm-6">
              <button class="home-button">
                <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>New Meta Analysis
              </button>

              <button class="home-button">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit Meta Analysis
              </button>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
              <button class="home-button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Data
              </button>
              <button class="home-button">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>Browse
              </button>
      </div>
    </div>
@stop
