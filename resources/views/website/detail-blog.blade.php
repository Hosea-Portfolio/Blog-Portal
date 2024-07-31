<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->meta_description }}">
    <link href="icon.png" rel="shortcut icon">
    @include('css.website.partial.navbar')
    @include('css.website.detail-blog')
</head>

<body>
    @include('website.partial.navbar')

    <div class="container">
        <div class="banner">
            <div class="banner-detail-blog">
                <img src="{{ $post->image }}" class="img-banner" alt="{{ $post->category->name }}">
                <div class="content-title">
                    <span class="post-category"><a href='#'
                            class="category">{{ $post->category->name }}</a></span>
                    <h1 class='post-title'>{{ $post->title }}</h1>
                </div>
            </div>

        </div>

        <div class='article-body' style="box-sizing: border-box">
            <article class="body">
                {!! $post->body !!}

            </article>

            <div class="popular-issues">
                <div class="container-issues">
                    <h3>Popular Issues</h3>
                    @foreach ($popular as $pop)
                        <div class="blog-popular">
                            {{-- @if ($post->image == null)
                                <img src="https://source.unsplash.com/1200x600?{{ $pop->category->name }}"
                                    class="img-banner" alt="{{ $pop->category->name }}">
                            @else
                                <img src="{{ asset('storage/' . $pop->image) }}" class="img-banner"
                                    alt="{{ $pop->category->name }}">
                            @endif --}}
                            <img src="{{ $pop->image }}" class="img-banner" alt="{{ $pop->category->name }}">

                            <div class="content-popular">
                                <a href="{{ $pop->slug }}">
                                    <h4 style="margin: 0;">{{ $pop->title }}</h4>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="icon-bar">
                <a href="https://www.facebook.com/sharer/sharer.php?u=url=http://127.0.0.1:8000/{{ $post->slug }}"
                    class="facebook">@include('fa.facebook-white')</a>
                <a href="https://x.com/intent/tweet?text={{ $post->title }} http://127.0.0.1:8000/{{ $post->slug }}"
                    class="twitter">@include('fa.x')</i></a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=http://127.0.0.1:8000/{{ $post->slug }}"
                    class="linkedin">@include('fa.linkedin-in')</a>
            </div>
        </div>


    </div>

    @include('js.website.partial.navbar')
</body>

</html>
