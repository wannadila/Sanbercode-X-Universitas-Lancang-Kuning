@extends('layouts.master')

@section('title')
Edit Cast  
@endsection

@section('content')
<form method="POST" action="/cast/{{$cast->id}}">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @csrf
    @method("put")
    <div class="form-group">
      <label >Nama Cast</label>
      <input value="{{$cast->nama}}" type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label >Umur Cast</label>
      <input value="{{$cast->umur}}" type="text" class="form-control" name="umur">
    </div>
    <div class="form-group">
       <label>Bio Cast</label><br>
        <textarea name="bio" class="from-control" cols="30" rows="10">{{$cast->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
