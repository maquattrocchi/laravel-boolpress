@extends('layouts.admin', ['title'=>'Categories'])

@section('content')
<div class="container">
    <a href="{{route('admin.categories.create')}}" class="btn btn-outline-primary text-uppercase mb-5">Add New Category</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Creation Date</th>
                <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at}}</td>
                <td><a href="{{route('admin.categories.show', $category->id)}}" class="btn cs_btn">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>@endsection