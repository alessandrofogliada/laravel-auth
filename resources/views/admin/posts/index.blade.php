@extends('layouts.app')

@section('content')
    <h1>Elenco post</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Testo</th>
            <th scope="col">Tempo di lettura</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->text}}</td>
            <td>{{$post->reading_time}}</td>
            <td><a href="{{ route('admin.posts.show' , $post)}}" type="button" class="btn btn-warning">Dettagli</a>
            </td>
            <td><a href="{{ route('admin.posts.edit' , $post)}}" type="button" class="btn btn-info">Modifica</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection