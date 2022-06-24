@extends('layouts.admin', ['title'=> '#'.$category->id])

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-8">
            <h1 class="text-uppercase mt-3">#{{$category->id}}</h1>
        </div>
        <div class="col-4">
            <div class="d-flex flex-column gap-2 mx-auto">
                <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-outline-warning text-uppercase" type="button">Edit</a>
                <button type="button" class="btn btn-outline-danger text-uppercase" data-toggle="modal" data-target="#modal">Delete</button>
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-uppercase" id="modalLabel">Delete Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this category with id #{{$category->id}}?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">No</button>
                                <form id="form-delete" action="{{route('admin.categories.destroy', $category->id)}}" method="post">
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
    <div>
        <p class="border-bottom border-3 border-success py-3 mb-0">Name: <span class="text-uppercase">{{$category->name}}</span></p>
        <p class="border-bottom border-3 border-success py-3 mb-0">Created at: <span class="text-uppercase">{{$category->created_at}}</span></p>
        <div class="border-bottom border-3 border-success py-3">
            <p class="text-uppercase mb-0">Posts with this category:</p> 
            @if (count($category->posts) > 0)
                @foreach ($category->posts as $post)
                    <p class="mb-0">#{{$post->id}} - {{$post->title}}</p>
                @endforeach
            @else
                <p class="mb-0">There are no posts with this category</p>
            @endif
        </div>
    </div>
</div>
@endsection