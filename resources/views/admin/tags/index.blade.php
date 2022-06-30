@extends('layouts.admin', ['title'=>'Tags'])
@include('partials/modaldelete')
@section('content')
<div class="container">
    <a href="{{route('admin.tags.create')}}" class="btn btn-outline-primary text-uppercase {{session()->has('success') ? 'mb-0' : 'mb-4'}}">Add New Tag</a>
    @if (session()->has('success'))
        <div class="alert alert-success mb-3 mt-3">
            {{ session()->get('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Creation Date</th>
                <th scope="col">Detail</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <th scope="row">{{$tag->id}}</th>
                <td>{{$tag->name}}</td>
                <td>{{$tag->created_at}}</td>
                <td>
                    <a href="{{route('admin.tags.show', $tag->id)}}" class="btn cs_btn">View</a>
                </td>
                <td>
                    <form action="{{route('admin.tags.destroy', $tag->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-uppercase" onclick="boolpress.openModal(event, {{ $tag->id }})">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$tags->links()}}
</div>
@endsection