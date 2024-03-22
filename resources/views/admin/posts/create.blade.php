@extends('admin.layouts.master')

@section('links')
<!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

@endsection

@section('content')
<div class="bg-white p-4">
    <h2 class="fs-5 mb-4">Create Post</h2>
    <form>
        {{-- title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{old('title')}}">
        </div>
        {{-- description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" placeholder="Description" id="description" name="description"></textarea>
        </div>
        {{-- Is Publish (static single select) --}}
        <div class="mb-3">
            <label for="is_publish" class="form-label">Is Publish</label>
            <select class="form-select" name="is_publish" id="is_publish">
                <option selected disabled value="">Choose Option</option>
                <option value="1">Publish</option>
                <option value="0">Draft</option>
            </select>
        </div>
        {{-- Category (dynamic single select) --}}
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category" id="category">
                <option selected disabled value="" >Choose Category</option>
                @if (count($categories)>0)
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                @else
                <option value="" disabled>No Category</option>
                @endif
            </select>
        </div>
        {{-- Tags (dynamic multiple select) --}}
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select class="form-select" id="select-tags" data-placeholder="Choose Tags" multiple name="tags[]">
                @if (count($tags)>0)
                    @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                @else
                <option value="" disabled>No Tag</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('script')
{{-- multiple select fields --}}
<script>
    $(document).ready(function() {
        $('#select-tags').select2({
            theme: "bootstrap-5", // Use "bs5" for Bootstrap 5
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style'
            , placeholder: $(this).data('placeholder')
            , closeOnSelect: false
            , tags: true
        });
    });

</script>


@endsection
