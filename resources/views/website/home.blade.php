<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('css.website.partial.navbar')
    @include('css.website.home')
</head>

<body>
    @include('website.partial.navbar')

    <div class="container">
        <div class="blog-container">
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

                        {{-- Code untuk like satu kali attempt per sesi --}}
                        {{-- @if (Session::get('sesi_token') == $syslog->session_id)
                            <a href='#'class="icon-post-footer"
                                style="fill: :red">@include('fa.love')</a>
                        @else
                            <a
                                href='{{ url('/like', $post->id) }}'class="icon-post-footer">@include('fa.love')</a>
                        @endif --}}
                        {{-- Code untuk like satu kali attempt per sesi --}}

                        <a
                            href='{{ url('/like', $post->id) }}'class="icon-post-footer">@include('fa.like')</a>
                        <span>{{ $post->like_counter }}</span>
                        <a
                            href='{{ url('/dislike', $post->id) }}'class="icon-post-footer">@include('fa.dislike')</a>
                        <span>|</span>
                        <a class="icon-post-footer">@include('fa.facebook')</a>
                        <a class="icon-post-footer">@include('fa.link')</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @include('js.website.partial.navbar')
</body>

</html>
