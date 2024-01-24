<style>
    .container {
        width: 100%;
        margin: 30px 0;
    }

    .blog-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 20px;
        margin: 0 80px;
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
</style>
