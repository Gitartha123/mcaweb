<!--<footer class="a1-bar" style="position:fixed; bottom:0px;left:0px;padding:8px; background-color:#d4cfcf">
    <a href="#" class="a1-bar-item fa fa-phone a1-left a1-large"> 7086775828 |</a>
    <a href="#" class="a1-bar-item fa fa-location-arrow a1-left a1-large"> Location |</a>
    <a href="#" class="a1-bar-item fa fa-envelope a1-left a1-large "> gitarthapuzari@gmail.com |</a>
    <a href="#" class="a1-bar-item fa fa-search a1-right a1-large "></a>
    <a href="#" class="a1-bar-item fa fa-twitter a1-right a1-large "></a>
    <a href="#" class="a1-bar-item fa fa-facebook a1-right a1-large "></a>
</footer>-->

<style>
    #navbar {
        background-color: #d4cfcf;
        position: fixed;
        bottom: 0;
        right: 5px;
        left: 5px;
        width: 100%;
        display: block;
        transition: bottom 1s;
    }

    #navbar a {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 15px;
        text-decoration: none;
        font-size: 17px;
    }


</style>

<div id="navbar">
    <a href="#" class=" fa fa-phone a1-left a1-large"> 7086775828 |</a>
    <a href="#" class=" fa fa-location-arrow a1-left a1-large"> Location |</a>
    <a href="#" class=" fa fa-envelope a1-left a1-large "> gitarthapuzari@gmail.com |</a>
    <a href="#" class=" fa fa-search a1-right a1-large"></a>
    <a href="#" class=" fa fa-twitter a1-right a1-large "></a>
    <a href="#" class=" fa fa-facebook a1-right a1-large "></a>
</div>

<!--script for fixed header and footer-->
<script>

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        if (prevScrollpos > currentScrollPos) {
            (document.getElementById("navbar").style.bottom = "0") && (document.getElementById("myHeader").style.top = "0");
        } else {
            (document.getElementById("navbar").style.bottom = "-100%") && (document.getElementById("myHeader").style.top = "-100%");
        }
        prevScrollpos = currentScrollPos;
    }
</script>
