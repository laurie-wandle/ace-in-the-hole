<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href=../styles/styles.css>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts.js"></script>

    <title>Ace Contact Form</title>

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

    <h1>Contact Form</h1>

    <div class="startTimes">

        <form method="post" action="index.php">
            <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>

            <label for="visitorname">Name:</label>
            <input type="text" name="visitorname" id="visitorname" required>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>

            <label for="party">Role:</label>
            <select size="1" name="party" id="party" required>
                <option value=""></option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
                <option value="interested">Interested Party</option>
                </select><br><br>

        <label for="questioncomment">Questions or Comments: </label>
        <textarea name="questioncomment" id="questioncomment" rows="15" cols="40" required></textarea>
            <input id="submit" type="submit" value="Submit">
        </form>

    </div>

</main>

<?php include '../includes/footer.inc.html.php'; ?>


</body>

</html>
