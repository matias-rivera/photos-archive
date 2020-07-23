@extends('layouts.app')

@section('content')
    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>
        <a href="{{route('albums.show',$photo->album_id)}}">Back to Gallery</a>

    <hr>
<img src="{{asset("/storage/photos/$photo->album_id/$photo->photo")}}" alt="{{$photo->title}}">
<br><br>
{!!Form::open(['action' => ['PhotosController@destroy',$photo->id],'method' => 'POST']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete Photo', ['class' => 'button alert'])}}
{!!Form::close()!!}
<hr>
<small>Size: {{round($photo->size / 1024,2)}} KB</small>
@endsection