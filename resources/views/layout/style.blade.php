<!--css for slider-->
<style>A {
        text-decoration: none;
    }

    .mySlides {
        display: none
    }

    .w3-left, .w3-right, .w3-badge {
        cursor: pointer
    }

    .w3-badge {
        height: 13px;
        width: 13px;
        padding: 0
    }
</style>

<!--css for zoom out and transform after hover-->
<style>
    .div1 {
        width: 200px;
        height: 50px;
        background-color: hsla(0, 100%, 50%, 0.3);
        -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
        transition: width 2s;
    }

    .div1:hover {
        width: 100%;
        height: 50px;
    }

    .div2 {
        width: 200px;
        height: 50px;
        border-top: 1px solid #9e9a9a;
        border-bottom: 1px solid #9e9a9a;
        -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
        transition: width 2s;
    }

    .div2:hover {
        width: 100%;
        height: 50px;
    }

    * {
        box-sizing: border-box;
    }

    .zoom {
        padding: 50px;
        background-color: green;
        transition: transform .2s;
        width: 100px;
        height: 50px;
        margin: 0 auto;
    }

    .zoom:hover {
        -ms-transform: scale(1.5); /* IE 9 */
        -webkit-transform: scale(1.5); /* Safari 3-8 */
        transform: scale(1.5);
    }
</style>

<!--css for fixed header-->
<style>
    .content {
        padding: 16px;
    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        transition: top 1s;
    }

    .sticky + .content {
        padding-top: 102px;
    }
</style>

