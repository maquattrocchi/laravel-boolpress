@extends('layouts.admin', ['title'=>'Posts'])
@section('content')
<div class="container">
    <a href="{{route('admin.posts.create')}}" class="btn btn-outline-primary text-uppercase mb-5">Add New Post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Creation Date</th>
                <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td><a href="{{route('admin.posts.show', $post->id)}}" class="btn cs_btn">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection