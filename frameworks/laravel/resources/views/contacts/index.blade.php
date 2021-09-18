@extends('contacts.layout')

@section('content')
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">Contact List</h1>
      <hr>
    </div>
    <div class="col-12 mt-2">
      <a class="btn btn-sm btn-primary" href="{{ route('contacts.create') }}">add</a>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
          <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->address}}</td>
            <td>
              <form action="{{route('contacts.destroy', $contact->id)}}" method="POST">
                <a class="btn btn-sm btn-secondary"
                   href="{{route('contacts.show',$contact->id)}}">show</a>
                <a class="btn btn-sm btn-success"
                   href="{{route('contacts.edit',$contact->id)}}">edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">delete</button>
              </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection

