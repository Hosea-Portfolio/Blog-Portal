<style>
    .container {
        width: 100%;
        margin: 0;
        transform: none;
    }



    .banner-detail-blog {
        position: relative;
        height: 570px;
        background: #222;
    }

    .img-banner {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all .3s ease;
    }

    .content-title {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: 0 auto;
        transform: translateX(-50%) translateY(-50%);
        padding: 40px;
        box-sizing: border-box;
        color: #fff;
        text-align: center;
        max-width: 720px;
    }

    .post-category {
        line-height: 1.5;
        text-transform: uppercase;
        background-color: black;
        padding: 8px
    }

    .category {
        text-decoration: none;
        color: #fff;
        transition: all .25s ease-in-out;
    }

    .post-title {
        margin-top: 25px;
        margin-bottom: 25px;
        color: inherit;
        font-size: 41px;
        line-height: 1.25;
        text-shadow: 0 0 22px rgba(0, 0, 0, 0.3);
    }

    .article-body {
        margin: 0 220px;
        display: flex;
        gap: 20px;
        justify-content: space-between
    }

    .icon-bar {
        position: fixed;
        top: 55%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 0;
    }

    .icon-bar a {
        display: block;
        text-align: center;
        padding: 16px;
        transition: all 0.3s ease;
        font-size: 20px;
    }

    .icon-bar a:hover {
        background-color: #000;
    }

    .facebook {
        background: #3B5998;
        color: white;
    }

    .twitter {
        background: #000;
        color: white;
    }

    .linkedin {
        background: #0078D4;
        color: white;
    }

    .body {
        width: 60%
    }


    .popular-issues {
        width: 30%
    }

    .popular-issues .container-issues {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%
    }

    .popular-issues .container-issues .blog-popular {
        display: flex;
        gap: 10px
    }

    .popular-issues .container-issues .blog-popular .img-banner {
        width: 100px;
        height: 100px;
    }

    @media screen and (max-width: 1250px) {
        .article-body {
            margin: 0 50px
        }

        .icon-bar a {
            padding: 12px;
            font-size: 10px;
        }
    }

    @media screen and (max-width: 900px) {
        .article-body {
            margin: 0 30px;
        }

        .icon-bar a {
            padding: 12px;
            font-size: 10px;
        }
    }

    @media screen and (max-width: 800px) {
        .article-body {
            margin: 0 20px;
            flex-direction: column;
        }

        .icon-bar a {
            padding: 10px;
            font-size: 8px;
        }

        .article-body .popular-issues,
        .body {
            width: 100%;
        }
    }


    @media screen and (max-width: 700px) {

        .article-body {
            margin: 0 10px;
            flex-direction: column;
        }

        .banner-detail-blog {
            height: 250px
        }

        .content-title {
            max-width: none;
            padding: 0;
        }

        .post-title {
            font-size: 24px;
        }

        .post-category {
            font-size: 16px;
        }

        .icon-bar a {
            padding: 4px;
            font-size: 0px;
        }
    }
</style>
