@extends('layouts.admin', ['title'=> '#'.$tag->id])
@include('partials/modaldelete')
@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-8">
            <h1 class="text-uppercase mt-3">#{{$tag->id}}</h1>
        </div>
        <div class="col-4 align-self-center">
            <div class="d-flex flex-column">
                <a href="{{route('admin.tags.edit', $tag->id)}}" class="btn btn-warning text-uppercase mb-4">Edit</a>
                <form action="{{route('admin.tags.destroy', $tag->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-uppercase w-100" onclick="boolpress.openModal(event, {{ $tag->id }})">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <p class="border-bottom border-3 py-3 mb-0">Name: <span class="text-uppercase">{{$tag->name}}</span></p>
        <p class="border-bottom border-3 py-3 mb-0">Created at: <span class="text-uppercase">{{$tag->created_at}}</span></p>
        <div class="border-bottom border-3 py-3">
            <p class="text-uppercase mb-0">Posts with this tag:</p> 
            @if (count($tag->posts) > 0)
                @foreach ($tag->posts as $post)
                    <p class="mb-0">#{{$post->id}} - {{$post->title}}</p>
                @endforeach
            @else
                <p class="mb-0">There are no posts with this tag</p>
            @endif
        </div>
    </div>
</div>
@endsection