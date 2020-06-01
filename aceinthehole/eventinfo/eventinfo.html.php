<!DOCTYPE html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml">

<head>
    <title>Event Info</title>
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

    <h1>Event Information</h1>
    
    <div id="eventContent">

        <div class="eventcontent">

            <p>This year's <span class="blackText">Ace in the Hole Multisport Event</span> will be held on June 20th-June 21st, 2020</p>

            <ul>
                <li><a href="#courseDeets">COURSE DETAILS</a></li>
                <li><a href="#what2Bring">WHAT TO BRING</a></li>
                <li><a href="#pickupCostincludes">COST INCLUDES</a></li>
                <li><a href="#pickupCostincludes">PACKET PICKUP</a></li>
                <li><a href="#FAQS">FAQs</a></li>
            </ul>
        </div>

        <div class="eventcontent">
            <img src="../images/stjohnbridge2.jpg" alt="St. John's Bridge" width="350" height="450">
        </div>
    </div>

    <div id="courseDeets">

        <h2>COURSE DETAILS</h2>

        <div class="courses">
            <img src="../images/courses.jpg" alt="Long Course Swim" width="450" height="350">
        </div>

       <div class="courses">
           <ul>
                     <li><button id="longSwim"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> LONG COURSE SWIM</button></li>
                        <p id="longSwimP">1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points.
                        Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

                    <li><button id="longBike"><i class="fas fa-caret-down"></i> LONG COURSE BIKE</button></li>
                        <p id="longBikeP">58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs.
                        The bike course will be marked with large directional signage and there will be course marshals at key intersections
                        to help direct you.</p>

                    <li><button id="longRun"><i class="fas fa-caret-down"></i> LONG COURSE RUN</button></li>
                        <p id="longRunP">13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and
                        scenic destination resort (two hills total with a minimal elevation gain).</p>

                    <li><button id="oSwim"><i class="fas fa-caret-down"></i> OLYMPIC SWIM</button></li>
                        <p id="oSwimP">1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points.
                         Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

                    <li><button id="oBike"><i class="fas fa-caret-down"></i> OLYMPIC BIKE</button></li>
                        <p id="oBikeP">28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked
                        with large directional signage and course marshals will be present at key intersections.</p>

                    <li><button id="oRun"><i class="fas fa-caret-down"></i> OLYMPIC RUN</button></li>
                        <p id="oRunP">10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and
                        scenic destination resort (one hill total with a minimal elevation gain).</p>

                    <li><button id="sprint"><i class="fas fa-caret-down"></i> SPRINT</button></li>
                          <p id="sprintP">Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>

                    <li><button id="try"><i class="fas fa-caret-down"></i> TRY-A-TRI </button></li>
                        <p id="tryP">This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes.
                        The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim),
                        10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>

                    <li><button id="half"><i class="fas fa-caret-down"></i> HALF-MARATHON</button></li>
                        <p id="halfP">Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd.
                        Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment.
                        Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>

                    <li><button id="10k"><i class="fas fa-caret-down"></i> 10K COURSE</button></li>
                        <p id="10kP">The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest.
                        Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>

                    <li><button id="splash"><i class="fas fa-caret-down"></i> SPLASH n'DASH</button></li>
                        <p id="splashP">Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event
                        otherwise it is $25.</p>
            </ul>

       </div>
    </div>

            <div id="what2Bring">

                <h2>WHAT TO BRING</h2>

                <div class="bring">
                    <img src="../images/mtHood.jpg" alt="Mount Hood" width="450" height="350">
                </div>

                <div class="bring">
                    <p>Watch the weather closely. The show goes on no matter what the weather is doing.<br><br>Also remember to bring a change of clothing
                        so you can enjoy all the post event festivities!</p>

                   <ul>
                       <li><button id="chipTiming"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> CHIP TIMING PIECE</button></li>
                            <p id="chipTimingP">You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip
                                timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing
                                piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a
                                wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>

                       <li><button id="bringSwim"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> SWIM</button></li>
                            <p id="bringSwimP">Water Temperature is expected to be between 62 & 66 degrees. The temperature will be taken on Friday and the
                                morning of the race. Wetsuits are recommended but optional for the swim but will provide buoyancy and warmth. However, many people
                                opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p>

                       <li><button id="bringBike"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> BIKE</button></li>
                            <p id="bringBikeP">A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them.
                                The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes
                                are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>

                       <li><button id="bringRun"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> RUN</button></li>
                            <p id="bringRunP">You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning
                                of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on
                                once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to
                                and then quickly strap it on before they leave for the run. Use whatever option feels best for you.</p>

                   </ul>
                </div>
</div>

    <div id="pickupCostincludes">

        <div class="pickCost">


            <h2>PACKET PICKUP</h2>

            <ul>
                <li>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR.</li>
                <li>Packet pick up hours: Thursday 8-5, Friday 9-noon.</li>
                <li>No day of event packet pick up.</li>

            <li>NOTE: Tech shirts guaranteed to pre-registered participants only. </li>

            </ul>


                <h2>COST INCLUDES</h2>

                <ul>
                    <li>Food & Beer</li>
                    <li>Access to the weekend's live entertainment & Fitness Expo</li>
                    <li>Commemorative Finisher medal</li>
                    <li>Accurate Chip Timing for competitive races</li>
                    <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                    <li>Post-event party & entertainment</li>

                </ul>

        </div>

            <div class="pickCost">

                <img src="../images/ace_logo2.png" alt id="Ace logo" width="250" height="250">

</div>
        </div>


    <div id="FAQS">

        <div class="faqs">

            <h2>FAQs</h2>

            <ul>
                <li><button id="rules"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> WHAT ARE THE RULES?</button></li><br>
                <p id="rulesP">We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting,
                    you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p>

                <li><button id="noMusic"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> CAN I USE A PERSONAL MUSIC DEVICE WHILE CYCLING?</button></li><br>
                <p id="noMusicP">Absolutely no music devices are allowed during the bike segment for obvious safety risks
                    and will result in immediate disqualification..</p>

                <li><button id="musicRun"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> CAN I USE A PERSONAL MUSIC DEVICE WHILE RUNNING?</button></li><br>
                <p id="musicRunP">During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive
                    environment and assure athletes can hear all course marshal instructions.<br> With that said, we also understand that many athletes rely
                    on music to help endure the challenge of running.<br> <br>To accommodate the needs of our athletes while still assuring maximum safety and a fair,
                    competitive environment, here is the arrangement that we can accommodate.<br>
                    <br>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time.
                        In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice
                        - music or awards/points/rankings.<br>
               <br>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a
                    disqualification but in order to assure the safety of all athletes, this is a very important rule.<br>
                <br>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions
                    can be heard.
                </p>

                <li><button id="wetsuit"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> DO I NEED TO WEAR A WETSUIT?</button></li><br>
                <p id="wetsuitP">Wetsuits are recommended but optional for the swim but will provide buoyancy and warmth. However, many people
                    opt for no wetsuit for a triathlon so no worries.</p>

                <li><button id="racingBike"><i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> DO I HAVE TO USE A ROAD OR RACING BIKE?</button></li><br>
                <p id="racingBikeP"> No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
            </ul>




    </main>

    <?php include '../includes/footer.inc.html.php'; ?>


</body>

</html>
