<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href=../styles/styles.css>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts.js"></script>

    <title>Ace Registration Form</title>

</head>

<body>
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
        <h1>Registration Form</h1>

        <div id="registration">
            <form method="post" action=" ">
                <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" required>
                <label for="age">Age:</label>
                <input type="text" name="age" id="age" required><br>
                <label for="role">Role:</label>
                <select size="1" name="role" id="role" required>
                    <option value=""></option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="interested">Interested Party</option>
                </select>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required><br>
                <label for="contactname">Emergency Contact Name:</label>
                <input type="text" name="contactname" id="contactname" required>
                <label for="contactnumber">Emergency Contact Phone Number:</label>
                <input type="text" name="contactnumber" id="contactnumber" required><br>
                <label for="gender">Gender Identification:</label>
                <select size="1" name="gender" id="gender" required>
                    <option value=""></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="non-binary">Non-Binary/Other</option>
                </select><br><br>
                <label for="saturday">Saturday Events Registering For?</label>
                <select size="1" name="saturday" id="saturday" required>
                    <option value=""></option>
                    <option value="longcourse">Long Course 7:00AM</option>
                    <option value="olympictriathlon">Olympic Triathlon 7:30AM</option>
                    <option value="10K">10K 7:15AM</option>
                    <option value="halfmarathon">Half Marathon 7:15AM</option>
                </select>

                <label for="sunday">Sunday Events Registering For?</label>
                <select size="1" name="sunday" id="sunday" required>
                    <option value=""></option>
                    <option value="sprinttriathlon">Long Course 8:00AM</option>
                    <option value="triatri">Tri-a-Tri 8:20AM</option>
                    <option value="splashndash">Splash n Dash 12:00pm</option>
                </select>

                <label for="special">Any special accommodations needed?</label>
                <textarea name="special" id="special" rows="15" cols="40" required></textarea>

                <input id="submit" type="submit" value="Submit">

            </form>
        </div>

    </main>



<?php include '../includes/footer.inc.html.php'; ?>



</body>

</html>