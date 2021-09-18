@extends('notes.layout')

@section('content')
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">note</h1>
      <hr>
    </div>
    <div class="col-12 mt-2">
      <a class="btn btn-sm btn-secondary" href="{{ route('notes.index') }}">back</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <tbody>
        <tr>
          <td>#</td>
          <td>{{$note->id}}</td>
        </tr>
        <tr>
          <td>Name</td>
          <td>{{$note->title}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{$note->content}}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection

