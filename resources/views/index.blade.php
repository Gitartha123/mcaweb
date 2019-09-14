@extends('layout/master')
@section('AboutusAndSlider')
    <div class="a1-row a1-border-bottom a1-border-top a1-light-gray">
        <div class="a1-third a1-padding-12">
            <div class="a1-container a1-border a1-round a1-padding">
               <span style="text-align:justify; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;  font-size:18px; line-height:normal;">
                  <div class="a1-center div2" style="color:red; font-size:32px;"><b>ABOUT US</b></div>
                  <hr>
                  <p> The Assam Engineering College, the edifice that stands tall with dignity because of the plethora of engineers that has graduated from its mainspring, since its foundation in 1955, has been the premier institute in North East, regarding this field and has been celebrated for the same. To get admittance into this maiden institute, one must have to clear the mind boggling Assam CEE examinations held in May of every year. The college is situated away from the clamor of the capital city Guwahati, and is nestled in the lap of nature surrounded by hills and colorful flame trees extended to several acres of land. This college provides Bachelor of Engineering in eight fields mainly- Mechanical, Civil, Electronics and Telecommunications, Electrical, Chemical, Instrumentation, Computer Science & Engineering and Industrial & Production.
                  </p>
               </span>
                <a class="div1 a1-bar a1-button a1-right a1-hover-red">Read more</a>
            </div>
        </div>
        <div class="a1-twothird a1-padding">
            <div class="a1-content a1-section" style="max-width:100%;">
                <img class="mySlides" src="resources/views/image/Assam Engineering College, Kamrup.JPG"
                     style="width:100%; height:480px;">
                <img class="mySlides" src="resources/views/image/DJI_0151.80c176fd.jpg"
                     style="width:100%; height:480px;">

            </div>
            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 9000);
                }
            </script>

        </div>
    </div>
@endsection

@section('NewsAndUpdates')
    <style>
        .myslide {
            display: none
        }
    </style>
    <div class="a1-bar a1-border-bottom a1-border-top a1-padding-12">
        <div class="a1-container a1-border-top a1-border-bottom">
            <div class="a1-bar-item a1-animate-centered"
                 style="color:red; font-size:32px;font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;">
                <b>NEWS </b></div>
            <div class="a1-bar-item a1-animate-centered"
                 style="color:red; font-size:32px;font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;">
                <b>& </b></div>
            <!--<div class="a1-bar-item a1-centered" style="color:red; font-size:32px;font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; "><b>& </b></div>-->
            <div class="a1-bar-item a1-animate-centered"
                 style="color:red; font-size:32px;font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; ">
                <b>UPDATES </b></div>
        </div>
    </div>

    <div class="a1-container a1-light-gray">
        <div class="a1-animate-right myslide">
            <div class="a1-quarter">
                <div class="a1-card a1-margin a1-border port">
                    <div class=""
                    <div class="portfolioDisc">Image<br/>description1<br/>here</div>
                </div>
            </div>

            <div class="a1-quarter">
                <div class="a1-card a1-margin a1-border port">
                    <div class="portfolioDisc">Image<br/>description2<br/>here</div>
                </div>
            </div>

            <div class="a1-quarter">
                <div class="a1-card a1-margin a1-border port">
                    <div class="portfolioDisc">Image<br/>description3<br/>here</div>
                </div>
            </div>

            <div class="a1-quarter">
                <div class="a1-card a1-margin a1-border port">
                    <div class="portfolioDisc">Image<br/>description4<br/>here</div>
                </div>
            </div>
        </div>

        <div class="a1-animate-right myslide">
            <div class="a1-quarter">
                <div class="a1-card a1-margin a1-border port">
                    <div class="portfolioDisc">Image<br/>description5<br/>here</div>
                </div>
            </div>

            <div class="a1-quarter">
                <div class="a1-card a1-margin a1-border port">
                    <div class="portfolioDisc">Image<br/>description6<br/>here</div>
                </div>
            </div>

            <div class="a1-quarter">
                <div class="a1-card a1-margin a1-border port">
                    <div class="portfolioDisc">Image<br/>description7<br/>here</div>
                </div>
            </div>

            <div class="a1-quarter">
                <div class="a1-card a1-margin a1-border port">
                    <div class="portfolioDisc">Image<br/>description8<br/>here</div>
                </div>
            </div>
        </div>


        <div class="a1-center">
            <div class="a1-section">
                <button class="a1-button a1-dark-grey" onclick="plusDivs(-1)">❮ Prev</button>
                <button class="a1-button a1-dark-grey" onclick="plusDivs(1)">Next ❯</button>
            </div>
        </div>

    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("myslide");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-red";
        }
    </script>

@endsection
