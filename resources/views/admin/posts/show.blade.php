@extends('layouts.admin', ['title' => '#'.$post->id])
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-8">
                <h1 class="text-uppercase mt-3">{{$post->title}}</h1>
                @if($post->image)
                    <img src="{{$post->image}}" alt="{{$post->title}}">
                @endif
            </div>
            <div class="col-4">
                <div class="d-flex flex-column gap-2 mx-auto">
                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-outline-warning text-uppercase" type="button">Edit</a>
                    <button type="button" class="btn btn-outline-danger text-uppercase" data-toggle="modal" data-target="#modal">Delete</button>
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-uppercase" id="modalLabel">Delete Post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this post with id #{{$post->id}}?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">No</button>
                                    <form id="form-delete" action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button id="button-delete" type="submit" class="btn btn-outline-danger text-uppercase">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h3>Content</h3>
                <p>{{$post->content}}</p>
            </div>
            <div class="col-6">
                <h3>Info</h3>
                <p>Creation Date: {{$post->created_at}}</p>
                <p>Category: {{$post->category ? $post->category->name : 'Not Defined'}}</p>
                @if($post->publish)
                    <p class="text-uppercase text-success fw-bold">Published</p>
                @else
                    <p class="text-uppercase text-danger fw-bold">To publish</p>
                @endif
            </div>
        </div>
    </div>
@endsection