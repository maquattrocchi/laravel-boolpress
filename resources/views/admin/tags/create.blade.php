@extends('layouts.admin', ['title'=>'Create Tag'])

@section('content')
<div class="container">
    <h1>Create new Tag</h1>
    <form action="{{route('admin.tags.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
            @error('name')
                <div class="alert alert-danger"> {{$message}} </div>
            @enderror
        </div>
        <button type="submit" class="btn cs_btn">Add</button>
    </form>
</div>
@endsection