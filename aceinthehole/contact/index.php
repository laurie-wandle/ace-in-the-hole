<?php

include '../includes/db.inc.html.php';

// Modify the If statement so the try only runs if the visitorname field has been submitted AND the honeypot field is empty ''
if (isset($_POST['visitorname']) && empty($_POST['honeypot'])) {

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.$

    $visitorname = $_POST['visitorname'];
    $email = $_POST['email'];
    $party = $_POST['party'];
    $questioncomment= $_POST['questioncomment'];

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try
    {
      $sql = /** @lang text */
          'INSERT INTO contact SET
          visitorname = :visitorname,
          email = :email,
          party = :party,
          commentquestion = :questioncomment';
      $s = $pdo->prepare($sql);
      $s->bindValue(':visitorname', $visitorname);
      $s->bindValue(':email', $email);
      $s->bindValue(':party', $party);
      $s->bindValue(':questioncomment', $questioncomment);
      $s->execute();
    }
        catch (PDOException $e)
    {
        $error = 'Error adding submitted response: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
        // load the thank you page after the INSERT runs
    include 'success.html.php';        


    // Add an else to load the initial page if the initial (line 19) if statement is false
}  else {

    include '../includes/error.html.php'; //Modify this to include the initial file for this folder   
}
?>
