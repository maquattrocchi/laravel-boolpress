@extends('layouts.admin', ['title' => '#'.$post->id])

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-8">
                @if ($post->image)
                <img class="w-50" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                @endif
                <h1 class="text-uppercase">{{$post->title}}</h1>
            </div>
            <div class="col-4 align-self-center">
                <div class="d-flex flex-column gap-2 mx-auto">
                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning text-uppercase" type="button">Edit</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <h4 class="text-uppercase">Content</h4>
                <p>{!! $post->content !!}</p>
            </div>
            <div class="col-4">
                <h4 class="text-uppercase">Info</h4>
                <p class="border-bottom border-3 py-3 mb-0">Creation Date: {{$post->created_at}}</p>
                <p class="border-bottom border-3 py-3 mb-0">Category: {{$post->category ? $post->category->name : 'Not Defined'}}</p>
                @if($post->publish)
                    <p class="border-bottom border-3 py-3 mb-0 text-uppercase text-success fw-bold">Published</p>
                @else
                    <p class="border-bottom border-3 py-3 mb-0 text-uppercase text-danger fw-bold">To publish</p>
                @endif
                <div class="border-bottom border-3 py-3 ">
                    <p class="mb-0">Tags:</p>
                    <ul>
                        @foreach ($post->tags as $item)
                            <li><a class="text-dark" href="{{route('admin.tags.show', $item->id)}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection