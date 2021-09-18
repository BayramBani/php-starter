<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Basic Mail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">Send New Message</h1>
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

  @if ($message = Session::get('ok'))
    <div class="alert alert-success" role="alert">
      {{ $message }}
    </div>
  @endif

  <div class="row">
    <div class="col">
      <form action="{{route('messages.store')}}" method="post">
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
          <label for="body" class="form-label">Message</label>
          <textarea name="body" type="tel" class="form-control form-control-sm" rows="4" required></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-sm btn-primary">send</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>
</html>
