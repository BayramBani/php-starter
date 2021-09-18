@extends('contacts.layout')

@section('content')
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">Contact</h1>
      <hr>
    </div>
    <div class="col-12 mt-2">
      <a class="btn btn-sm btn-secondary" href="{{ route('contacts.index') }}">back</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <tbody>
        <tr>
          <td>#</td>
          <td>{{$contact->id}}</td>
        </tr>
        <tr>
          <td>Name</td>
          <td>{{$contact->name}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{$contact->email}}</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>{{$contact->phone}}</td>
        </tr>
        <tr>
          <td>Address</td>
          <td>{{$contact->address}}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection

