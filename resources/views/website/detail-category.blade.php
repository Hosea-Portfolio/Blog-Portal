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
                    <select class="sort" id="sort_order" onchange="changeSortOrder(this)">
                        @if ($sort_order == 'desc')
                            <option value="desc">Z - A</option>
                            <option value="asc">A - Z</option>
                        @else
                            <option value="asc">A - Z</option>
                            <option value="desc">Z - A</option>
                        @endif
                    </select>
                </div>
            </div>
            <div id="list_blog" class="blog-section">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="card-blog" id="{{ $post->id }}">
                            <div class="card-content">
                                <div class="image-blog">
                                    <img src="{{ $post->image }}" class="img-thumbnail"
                                        alt="{{ $category_name->name }}">
                                </div>
                                <div class="content-blog">
                                    <span class="category">{{ $post->name }}</span>
                                    <a href="/{{ $post->slug }}" style="text-decoration:none; color:black">
                                        <h2 class="blog-title">{{ $post->title }}</h2>
                                    </a>
                                    <time class="post-time"
                                        datetime="{{ $post->created_at }}">{{ date('d/m/Y', strtotime($post->created_at)) }}</time>
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <a
                                    href='{{ url('/category/like/' . $post->slug) }}'class="icon-post-footer">@include('fa.like')</a>
                                <span>{{ $post->like_counter != 0 ? $post->like_counter : '' }}</span>
                                <a
                                    href='{{ url('/category/dislike/' . $post->slug) }}'class="icon-post-footer">@include('fa.dislike')</a>
                                <span>|</span>
                                <a href='https://www.facebook.com/sharer/sharer.php?u=url=http://127.0.0.1:8000/{{ $post->slug }}'
                                    class="icon-post-footer">@include('fa.facebook')</a>
                                <a href='https://www.linkedin.com/sharing/share-offsite/?url=http://127.0.0.1:8000/{{ $post->slug }}'
                                    class="icon-post-footer">@include('fa.linkedin')</a>
                                <a href="https://x.com/intent/tweet?text={{ $post->title }} http://127.0.0.1:8000/{{ $post->slug }}"
                                    class="icon-post-footer">@include('fa.x-white')</a>
                                <a id="copy" data-clipboard-text = "http://127.0.0.1:8000/{{ $post->slug }}"
                                    class="icon-post-footer">@include('fa.link')</a>
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
<script>
    function changeSortOrder(selectElement) {
        // Dapatkan nilai pengurutan yang dipilih
        var sortOrder = selectElement.value;

        // Perbarui URL untuk mencerminkan pengurutan yang dipilih
        var currentUrl = window.location.href;
        var newUrl = updateQueryStringParameter(currentUrl, 'sort_order', sortOrder);

        // Append "#sort" to the end of the new URL
        newUrl += "#sort";

        // Muat ulang halaman dengan URL yang diperbarui
        window.location.href = newUrl;
    }

    // Fungsi untuk memperbarui parameter query string dalam URL
    function updateQueryStringParameter(uri, key, value) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";

        if (uri.match(re)) {
            return uri.replace(re, '$1' + key + "=" + value + '$2');
        } else {
            return uri + separator + key + "=" + value;
        }
    }
    const copy = document.getElementById('copy');

    copy.addEventListener('click', () => {
        const text = copy.getAttribute('data-clipboard-text');
        navigator.clipboard.writeText(text)
    })
</script>

</html>
