<style>
    .container {
        width: 100%;
        margin: 30px 0;
    }

    .category-container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 20px;
        margin: 0 220px;
    }

    .image-category {
        width: 100%;
        height: 300px
    }

    .img-thumbnail {
        width: 100%;
        height: 400px !important;
        object-fit: cover;
        height: 100%
    }



    .card-category {
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .card-over-content {
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        justify-content: center;
    }

    h5 {
        color: white;
        background-color: rgba(0, 0, 0, 0.7);
        text-align: center;
        padding: 1.5rem;
    }



    @media screen and (max-width: 1250px) {
        .category-container {
            margin: 0 50px
        }
    }

    @media screen and (max-width: 900px) {
        .category-container {
            margin: 0 30px
        }
    }

    @media screen and (max-width: 800px) {
        .category-container {
            margin: 0 20px
        }
    }


    @media screen and (max-width: 700px) {
        .category-container {
            margin: 0 10px;
            grid-template-columns: 1fr 1fr;
        }

        h5 {
            padding: 0.5rem;
        }
    }
</style>
