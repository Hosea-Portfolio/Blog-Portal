<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lorem Ipsum</title>
    @include('css.website.partial.navbar')
    @include('css.website.home')
</head>

<body>
    @include('website.partial.navbar')

    <div class="container">
        <div class="blog-container">

            <div class="banner-title-detail-category">
                <h1>{{ $category_name->name }}</h1>
                <div>
                    <span>{{ $posts->count() }}</span> hasil ditemukan
                </div>
            </div>
            <div class="filter">
                <div class="filter-item">
                    <label>Sort By</label>
                    <select class="sort" id="sortBy">
                        <option name="asc">A - Z</option>
                        <option name="desc">Z - A</option>
                    </select>
                </div>
            </div>
            <div class="blog-section">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="card-blog" id="{{ $post->id }}">
                            <div class="card-content">
                                <div class="image-blog">
                                    @if ($post->image == null)
                                        <img src="https://source.unsplash.com/400x600?{{ $post->category->name }}"
                                            class="img-thumbnail" alt="{{ $post->category->name }}">
                                    @else
                                        <img src="{{ asset('storage/' . $post->image) }}" class="img-thumbnail"
                                            alt="{{ $post->category->name }}">
                                    @endif
                                </div>
                                <div class="content-blog">
                                    <span class="category">{{ $post->category->name }}</span>
                                    <a href="{{ $post->slug }}" style="text-decoration:none; color:black">
                                        <h2 class="blog-title">{{ $post->title }}</h2>
                                    </a>
                                    <time class="post-time"
                                        datetime="{{ $post->created_at }}">{{ date('d/m/Y', strtotime($post->created_at)) }}</time>
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <a
                                    href='{{ url('/like', $post->id) }}'class="icon-post-footer">@include('fa.like')</a>
                                <span>{{ $post->like_counter }}</span>
                                <a
                                    href='{{ url('/dislike', $post->id) }}'class="icon-post-footer">@include('fa.dislike')</a>
                                <span>|</span>
                                <a href='https://www.facebook.com/sharer/sharer.php?u=url=http://127.0.0.1:8000/{{ $post->slug }}'
                                    class="icon-post-footer">@include('fa.facebook')</a>
                                <a href='https://www.linkedin.com/sharing/share-offsite/?url=http://127.0.0.1:8000/{{ $post->slug }}'
                                    class="icon-post-footer">@include('fa.linkedin')</a>
                                <a href="https://x.com/intent/tweet?text={{ $post->title }} http://127.0.0.1:8000/{{ $post->slug }}"
                                    class="icon-post-footer">@include('fa.x-white')</a>
                                <a class="icon-post-footer">@include('fa.link')</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1> Not Found </h1>
                @endif
            </div>

        </div>
    </div>

    @include('js.website.partial.navbar')
</body>

</html>
