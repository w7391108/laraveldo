@extends('layouts.app_blog')
@section('content')
	<a href="{{route('articles.create')}}" style="padding: 5px;border: 1px dashed gray;"></a>
	+ New Article

	@foreach ($articles as $article)
	<div style="border:1px solid gray;margin-top: 20px;padding: 20px;">
		<h2>{{$article->title}}</h2>
		<p>{{$article->content}}</p>
		<a href="{{route('articles.edit',$article->id)}}">Edit</a>
	</div>
	@endforeach
@endsection