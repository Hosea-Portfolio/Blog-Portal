<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    @include('css.website.partial.navbar')
    @include('css.website.about')
</head>

<body>
    @include('website.partial.navbar')

    <div class="container">
        <div class="about-container">
            <div class="profile-section">
                <div class="profile-picture">
                    <span></span>
                </div>
                <div class="profile-info">
                    <div class="name">
                        <h2>Lorem Ipsum</h2>
                    </div>
                    <div class="social-media">
                        <a href='#' class="icon-post-footer">@include('fa.facebook')</a>
                        <a href='#' class="icon-post-footer">@include('fa.linkedin')</a>
                        <a href="#" class="icon-post-footer">@include('fa.x-white')</a>
                        <a href= "#" class="icon-post-footer">@include('fa.github')</a>
                    </div>
                </div>

            </div>
            <div class="profile-description">
                <h1>About</h1>

                <p>Welcome to my personal project, Lorem Ipsum Blog! I'm excited to share this journey with you, and I
                    hope
                    you'll find it inspiring and informative.</p>

                <h2>What is this project about?</h2>

                <p>This project is a personal endeavor that allows me to explore my passion for become Full Stack Web
                    Developer. I wanted to create something that combines my love for
                    coding with my desire to learn and grow as a developer.</p>

                <h3>My goals for this project</h3>

                <p>My primary goal for this project is to have one of my personal project using Laravel 8 . I also hope to this project can be the best practice for anyone that can see this.</p>


                <h3>Why I'm doing this</h3>

                <p>I believe that personal projects are essential for learning and growth. By working on something I'm
                    passionate about, I'm able to stay motivated and engaged.</p>

                <h3>Get in touch</h3>

                <p>If you have any questions, feedback, or just want to say hello , please don't hesitate to reach out.
                    I'm
                    always open to discussing my project and learning from others.</p>

                <p>Feel free to customize this template to fit your project's needs and tone. Good luck with your
                    project.</p>
            </div>
        </div>
    </div>

    @include('js.website.partial.navbar')
</body>

</html>
