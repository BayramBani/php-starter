@extends('contacts.layout')

@section('content')
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">Add New Contact</h1>
      <hr>
    </div>
    <div class="col-12">
      <a class="btn btn-sm btn-secondary" href="{{route('contacts.index')}}">back</a>
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
      <form action="{{route('contacts.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input name="name" type="text" class="form-control form-control-sm" required/>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="email" class="form-control form-control-sm" required/>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input name="phone" type="tel" class="form-control form-control-sm"/>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Address</label>
          <input name="address" type="text" class="form-control form-control-sm"/>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-sm btn-primary">save</button>
        </div>
      </form>
    </div>
  </div>

@endsection

