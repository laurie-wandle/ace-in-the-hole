<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href=../styles/styles.css>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../scripts.js"></script>

    <title>Ace Contact Form</title>

</head>

<body>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars($visitorname, ENT_QUOTES, 'UTF-8'); ?><br><!-- print tour name from form submission here -->
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br><!-- print first name from form submission here -->
                  Party: <?php echo htmlspecialchars($party, ENT_QUOTES, 'UTF-8'); ?><br><!-- print last name from form submission here -->
                  Comment or Question: <?php echo htmlspecialchars($questioncomment, ENT_QUOTES, 'UTF-8'); ?><br><!-- print email address from form submission here -->

            </main>
            <?php include '../includes/footer.inc.html.php'; ?>

    </body>
</html>
