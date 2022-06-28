@extends('layouts.admin', ['title'=>'Home'])

@section('content')
<div class="container">
    <div class="row w-75 m-auto">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action text-uppercase active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
            <a class="list-group-item list-group-item-action text-uppercase" id="list-posts-list" data-toggle="list" href="#list-posts" role="tab" aria-controls="posts">Posts</a>
            <a class="list-group-item list-group-item-action text-uppercase" id="list-tags-list" data-toggle="list" href="#list-tags" role="tab" aria-controls="tags">Tags</a>
            <a class="list-group-item list-group-item-action text-uppercase" id="list-category-list" data-toggle="list" href="#list-category" role="tab" aria-controls="category">Categories</a>
          </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade  show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <h4 class="text-uppercase text-center">Profile</h4>
                    <img src="{{asset('img/user.png')}}" alt="" class="w-25">
                    <p>NAME: {{ Auth::user()->name }}</p>
                    <p>EMAIL: {{ Auth::user()->email }}</p>
                </div>
                <div class="tab-pane fade" id="list-posts" role="tabpanel" aria-labelledby="list-posts-list">
                    <h4 class="text-uppercase text-center">Post</h4>
                    <p>View All Posts 
                        <a href="{{route('admin.posts.index')}}">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                    </p>
                    <p>Add New Post 
                        <a href="{{route('admin.posts.index')}}">
                            <i class="fa-regular fa-plus"></i>
                        </a>
                    </p>
                </div>
                <div class="tab-pane fade" id="list-tags" role="tabpanel" aria-labelledby="list-tags-list">
                    <h4 class="text-uppercase text-center">Tags</h4>
                    <p>View All Tags
                        <a href="{{route('admin.tags.index')}}">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                    </p>
                    <p>Add New Tag
                        <a href="{{route('admin.tags.index')}}">
                            <i class="fa-regular fa-plus"></i>
                        </a>
                    </p>
                </div>
                <div class="tab-pane fade" id="list-category" role="tabpanel" aria-labelledby="list-category-list">
                    <h4 class="text-uppercase text-center">Categories</h4>
                    <p>View All Categories
                        <a href="{{route('admin.categories.index')}}">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                    </p>
                    <p>Add New Category
                        <a href="{{route('admin.categories.index')}}">
                            <i class="fa-regular fa-plus"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
