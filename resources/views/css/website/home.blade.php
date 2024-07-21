<style>
    .container {
        width: 100%;
        margin: 30px 0;
    }

    .blog-container {

        margin: 0 220px;
    }

    .blog-section {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 20px;
    }

    .card-blog {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .image-blog {
        width: 100%;
        height: 300px
    }

    .img-thumbnail {
        width: 100%;
        object-fit: cover;
        height: 100%
    }

    .content-blog {
        display: flex;
        flex-direction: column;
        margin: 15px 0;
        justify-content: space-between;
    }

    .category {
        font-size: 12px;
        font-weight: 500;
        letter-spacing: 0.1em;
        opacity: initial;
        text-decoration: none;
        text-transform: uppercase;
    }

    .post-time {
        line-height: 1.5;
        text-transform: uppercase;
        color: #989898;
        font-size: 12px;
        letter-spacing: 0.1em;
    }

    .blog-title {
        font-size: 22px;
        font-weight: 700;
        line-height: 1.4;
        text-transform: none;
    }

    .post-footer {
        border-bottom: 1px solid #ebebeb;
        border-top: 1px solid #ebebeb;
        display: flex;
        gap: 10px;
        justify-content: center;
        padding: 10px 0;
    }

    .icon-post-footer {
        text-decoration: none;
    }

    .icon-post-footer:first-child {
        margin-right: 20px
    }

    @media screen and (max-width: 1250px) {
        .blog-container {
            margin: 0 50px
        }
    }

    @media screen and (max-width: 900px) {
        .blog-container {
            margin: 0 30px
        }
    }

    @media screen and (max-width: 800px) {
        .blog-container {
            margin: 0 20px
        }
    }


    @media screen and (max-width: 700px) {
        .blog-container {
            margin: 0 10px;
        }

        .blog-section {
            grid-template-columns: 1fr 1fr;
        }
    }
</style>
