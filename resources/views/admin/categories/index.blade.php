@extends('layouts.admin', ['title'=>'Categories'])
@include('partials/modaldelete')
@section('content')
<div class="container">
    <a href="{{route('admin.categories.create')}}" class="btn btn-outline-primary text-uppercase mb-3">Add New Category</a>
    @if (session()->has('success'))
        <div class="alert alert-success mb-3">
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
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at}}</td>
                <td>
                    <a href="{{route('admin.categories.show', $category->id)}}" class="btn cs_btn">View</a>
                </td>
                <td>
                    <form action="{{route('admin.categories.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-uppercase"onclick="boolpress.openModal(event, {{ $category->id }})">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories->links()}}
</div>
@endsection