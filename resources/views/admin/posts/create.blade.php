@extends('admin.layouts.main')

@extends('css.admin.dashboard')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Post</h1>
    </div>
    <form method="post" action="/admin/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label><span style="color:red">*</span>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}" autofocus>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label><span style="color:red">*</span>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name='slug'
                value="{{ old('slug') }}" readonly>
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="metadescription" class="form-label">Meta Description</label>
            <textarea class="form-control @error('metadescription') is-invalid @enderror" id="metadescription" style="height: 100px"
                name="metadescription"></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label><span style="color:red">*</span>
            <select class="form-select" name='category_id'>
                @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="d-flex gap-3">
            <div class="col-sm ">
                <div class="mb-3">
                    <label for="image" class="form-label">Post Image</label><span style="color:red">*</span>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image" onchange="previewImage()">
                </div>
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <img class="img-preview img-fluid mb-3 col-sm-5">

            </div>
            <div class="col-sm">
                <div class="mb-3">
                    <label for="altimage" class="form-label">Alt Image</label>
                    <input type="text" class="form-control @error('altimage') is-invalid @enderror" id="altimage"
                        name="altimage" value="{{ old('altimage') }}">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label><span style="color:red">*</span>
            @error('body')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection

@extends('js.admin.dashboard')
