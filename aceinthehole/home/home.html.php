<!DOCTYPE html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml">

<head>
    <title>Ace Homepage</title>
    <meta name="description" content="Ace in the Hole Multisport Event is a legendary event in the Oregon triathlon and running community. It has become a traditional
     destination race for athletes from across the nation.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href=../styles/styles.css>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts.js"></script>

</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



      <div class="wrapper">
          <?php include '../includes/header.inc.html.php'; ?>


          <div class="mobile-nav">

              <div class="menu-btn" id="menu-btn">
                  <div></div>
                  <span></span>
                  <span></span>
                  <span></span>
              </div>

              <div class="responsive-menu">
                  <?php include '../includes/nav.inc.html.php'; ?>
              </div>
          </div>

      </div>

<main>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="../images/olympic10K.png"  alt="Olympic 10K" style="width:100%">
            <div class="text">Olympic 10K</div>
        </div>

        <div class="mySlides fade">
            <img src="../images/happy.jpg" alt="Be Happy" style="width:100%">
            <div class="text">Be Happy</div>
        </div>

        <div class="mySlides fade">
            <img src="../images/longcourseswim.jpg" alt="Long Course Swim" style="width:100%">
            <div class="text">Long Course Swim </div>
        </div>

        <div class="mySlides fade">
            <img src="../images/longcourse.jpg" alt="Long Course Bike" style="width:100%">
            <div class="text">Long Course Bike </div>
        </div>

        <div class="mySlides fade">
            <img src="../images/splashndash.jpg" alt="Splash n Dash" style="width:100%">
            <div class="text">Splash n' Dash</div>
        </div>

            <button class="registernow">
                <a href="http://lauriewandle1030.webhostingforstudents.com/cas222/aceinthehole/registration/registration.html.php">REGISTER NOW!</a>
            </button>
    </div>
    <br>

    <div id="welcome">

        <h1>Welcome to Ace in the Hole Multisport Events!</h1>
        <p>We are proud to offer running and triathlon events to Athletes of all shapes and sizes, national origins,
            gender identifications and cultural backgrounds. We offer Events for Every Body.</p>
    </div>


    <div id="aboutus">
            <div class="tutu">
                <img src="../images/aboutace.jpeg" alt="About Ace">
                </div>

                    <div class="aboutevent">

                    <h1>About the Event</h1>
                    <p> The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon
                        triathlon and running community. It has become a traditional destination race for athletes
                        from across the nation.</p>
                        <p>There is something for every level of athletic ability. The weekend includes a first timer
                        triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs.
                        Come to experience your first race or come to
                        compete to win, but make sure you come to have fun!</p>
                    </div>
    </div>

    <div id="startTimes">
    <h1>EVENT STARTING TIMES</h1>

    <div class="row">
        <div class="column">

        <h2>SATURDAY 06/20/20</h2>
       <ul>
            <li>Long Courses Triathlon    7:00AM</li>
            <li>Olympic Triathlon   7:30AM</li>
            <li>10K   7:15AM</li>
            <li>Half Marathon   7:15AM</li>
        </ul>

        <h2>SUNDAY 06/21/20</h2>
        <ul>
            <li>Sprint Triathlon    8:00AM</li>
            <li>Try-a-Tri  8:20AM</li>
            <li>Splash n Dash  12:00PM</li>
        </ul>

        </div>

            <div class="column">
              <img src="../images/morningrunners2.jpg" alt="Early Start"  style="width:100%">
            </div>
         </div>
    </div>


    <div id="newsfeed">

           <div id="feed">
            <h2>Twitter <br><br>
            <a class="twitter-timeline" data-lang="en" data-width="800" data-height="810" data-theme="dark" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
            </h2></div>

            <div id="feed">
                <h2>Facebook</h2>
                <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="700" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a></blockquote></div>
</div>
    </div>


    <div id="weather">
    <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND, OREGON" data-label_2="WEATHER" data-font="Verdana" data-icons="Climacons" data-theme="dark" >PORTLAND, OREGON WEATHER</a>
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>

    </div>


</main>


<?php include '../includes/footer.inc.html.php'; ?>


</body>

</html>
