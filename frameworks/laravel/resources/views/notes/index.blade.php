@extends('notes.layout')

@section('content')
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">Note List</h1>
      <hr>
    </div>
    <div class="col-12 mt-2">
      <a class="btn btn-sm btn-primary" href="{{ route('notes.create') }}">add</a>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col" class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($notes as $note)
          <tr>
            <td>{{$note->id}}</td>
            <td>{{$note->title}}</td>
            <td>{{$note->content}}</td>
            <td >
              <form action="{{route('notes.destroy', $note->id)}}" method="POST">
                <a class="btn btn-sm btn-secondary"
                   href="{{route('notes.show',$note->id)}}">show</a>
                <a class="btn btn-sm btn-success"
                   href="{{route('notes.edit',$note->id)}}">edit</a>
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

