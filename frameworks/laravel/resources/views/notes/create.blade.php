@extends('notes.layout')

@section('content')
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">Add New note</h1>
      <hr>
    </div>
    <div class="col-12">
      <a class="btn btn-sm btn-secondary" href="{{route('notes.index')}}">back</a>
      <hr>
    </div>
  </div>

  @if ($errors->any())
    <div class="row">
      <div class="col">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif

  <div class="row">
    <div class="col">
      <form action="{{route('notes.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input id="title" name="title" type="text" class="form-control form-control-sm" required/>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea id="content" name="content" class="form-control form-control-sm" required rows="5"></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-sm btn-primary">save</button>
        </div>
      </form>
    </div>
  </div>

@endsection

