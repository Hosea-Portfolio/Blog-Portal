<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('css.website.partial.navbar')
    @include('css.website.detail-blog')
</head>

<body>
    @include('website.partial.navbar')

    <div class="container">
        <div class="banner">
            <div class="banner-detail-blog">
                @if ($post->image == null)
                    <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="img-banner"
                        alt="{{ $post->category->name }}">
                @else
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-banner"
                        alt="{{ $post->category->name }}">
                @endif

            </div>
            <div class="content-title">
                <span class="post-category"><a href='#' class="category">{{ $post->category->name }}</a></span>
                <h1 class='post-title'>{{ $post->title }}</h1>
            </div>
        </div>

        <article class='article-body'>
            {!! $post->body !!}
        </article>

    </div>

    @include('js.website.partial.navbar')
</body>

</html>
