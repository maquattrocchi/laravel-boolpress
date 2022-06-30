@extends('layouts.admin', ['title'=>'Posts'])
@include('partials/modaldelete')
@section('content')
<div class="container">
    <a href="{{route('admin.posts.create')}}" class="btn btn-outline-primary text-uppercase mb-3">Add New Post</a>
    @if (session()->has('success'))
        <div class="alert alert-success mb-3">
            {{ session()->get('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Creation Date</th>
                <th scope="col">Details</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn cs_btn">View</a>
                </td>
                <td>
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-uppercase" onclick="boolpress.openModal(event, {{ $post->id }})">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
</div>
@endsection