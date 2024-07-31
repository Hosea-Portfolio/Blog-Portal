<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Category</title>
    @include('css.website.partial.navbar')
    @include('css.website.category')
</head>

<body>
    @include('website.partial.navbar')

    <div class="container">
        <div class="category-container">
            @foreach ($categories as $category)
                <a href="/category/{{ $category->slug }}">
                    <div class='card-category'>
                        <div class="category-image">
                            <img src="{{ $category->image }}" class="img-thumbnail" alt="{{ $category->name }}">
                            <div class="card-over-content">
                                <h5>{{ $category->name }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

    @include('js.website.partial.navbar')
</body>

</html>
