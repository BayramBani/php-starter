@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col s6">
        <h1>Hello <b class="red-text">Laravel</b></h1>
      </div>
      <div class="col s6 center">
        <br><br>
        <img src="{{asset('/img/logo.png')}}" alt="logo" width="170px"/>
      </div>
      <div class="col s12">
        <div class="divider"></div>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <div class="card-panel">
          <a href="{{url('/laravel')}}">Default</a>
        </div>
        <div class="card-panel">
          <a href="{{url('/contacts')}}">Contacts</a>
        </div>
        <div class="card-panel">
          <a href="{{url('/notes')}}">Notes</a>
        </div>
        <div class="card-panel">
          <a href="{{url('/messages')}}">Messages</a>
        </div>
      </div>
    </div>
  </div>
@endsection

