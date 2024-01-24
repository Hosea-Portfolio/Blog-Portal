<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    * {
        font-family: 'Roboto',
            sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
    }

    header {
        box-shadow: 0 2px 9px -1px rgba(0, 0, 0, 0.04);
        border-bottom-color: #efefef;
        width: 100%;


    }

    /* search */

    .box {
        display: flex;
        justify-content: space-evenly;
        align-items: center;

    }

    .input {
        padding: 10px;
        width: 40px;
        height: 40px;
        background: none;
        border: 1px solid black;
        border-radius: 50px;
        box-sizing: border-box;
        font-size: 14px;
        outline: none;
        transition: .5s;
    }

    .box:hover input {
        width: 350px;
        border-radius: 10px;
    }

    .box .icon-search {
        position: absolute;
        top: 50px;
        right: 79px;
        transform: translate(-50%, -50%);
        transition: .2s;
    }

    .box:hover .icon-search {
        opacity: 0;
        z-index: -1;
    }

    /* search */


    .flex-nav {
        display: flex;
        justify-content: space-between;
        margin: 0 80px;
    }

    .logo-image {
        max-height: 90px;
        max-width: 100%;
        height: auto;
    }

    .topnav {
        display: flex;
        justify-content: space-between;
        align-self: center;
    }

    .topnav a {
        color: black;
        text-align: center;
        padding: 14px 25px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        color: grey;
        border-bottom: 2px solid grey;

    }

    .topnav a.active {
        border-bottom: 2px solid grey;
    }


    .flex-icon {
        display: flex;
        align-self: center;
        gap: 10px;
    }

    .flex-icon a,
    .responsive-icon a {
        text-decoration: none;
        color: black;
    }

    .flex-icon a,
    .flex-icon span {
        align-self: center;
    }

    .responsive-icon {
        align-self: center;
        display: none;
    }



    @media screen and (max-width: 600px) {
        .responsive-icon {
            display: block;
        }

        .topnav {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            width: 100%;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 95px;
        }

        .topnav a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .show {
            display: block;
        }


    }
</style>
