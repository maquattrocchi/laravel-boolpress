@extends('layouts.admin', ['title'=>'Edit #'.$post->id])

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$post->title}}" required maxlength="100">
                @error('title')
                    <div class="alert alert-danger"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{$post->content}}</textarea>
                @error('content')
                    <div class="alert alert-danger"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label d-block">Insert Image</label>
                <img id="imgPreview" width="100" src="https://via.placeholder.com/300x200">
                <input type="file" id="image" name="image" onchange="boolpress.changeImage()">
                @error('image')
                    <div class="alert alert-danger"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror" required>
                    <option value="">Select category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$post->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="alert alert-danger"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <h6>Tags</h6>
                @foreach($tags as $tag)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input @error('category_id') is-invalid @enderror" name="tags[]" id="{{$tag->name}}" {{$post->tags->contains($tag->id) ? 'checked' : ''}} value="{{$tag->id}}">
                    <label class="form-check-label" for="{{$tag->name}}">{{$tag->name}}</label>
                </div>
                @endforeach
                @error('category_id')
                    <div class="alert alert-danger"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="publish" id="publish" {{$post->publish ? 'checked' : ''}}>
                <label class="form-check-label" for="publish">Published</label>
            </div>
            <button type="submit" class="btn cs_btn">Edit</button>
        </form>
    </div>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection