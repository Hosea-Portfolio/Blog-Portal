<style>
    .container {
        width: 100%;
        margin: 30px 0;

    }

    .about-container {
        display: flex;
        gap: 100px;
        margin: 0 220px;
    }

    .profile-picture {
        background-color: grey;
        width: 300px;
        height: 300px;
        border-radius: 100%;
    }

    .profile-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    @media screen and (max-width: 1250px) {
        .about-container {
            margin: 0 50px
        }


    }

    @media screen and (max-width: 900px) {
        .about-container {
            margin: 0 30px;
            gap: 50px;

        }

        .profile-picture {
            width: 250px;
            height: 250px;
        }
    }

    @media screen and (max-width: 800px) {
        .about-container {
            margin: 0 20px;
            gap: 50px;

        }

        .profile-picture {
            width: 200px;
            height: 200px;
        }
    }


    @media screen and (max-width: 700px) {
        .about-container {
            margin: 0 10px;

        }
    }
</style>
