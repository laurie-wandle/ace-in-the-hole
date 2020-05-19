<?php

include '../includes/db.inc.html.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['name']) && empty($_POST['honeypot'])) {

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.$

    $name = $_POST['name'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $contactname= $_POST['contactname'];
    $contactnumber = $_POST['contactnumber'];
    $gender = $_POST['gender'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];
    $special = $_POST['special'];

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try
    {
      $sql = /** @lang text */
          'INSERT INTO registration SET
          name = :name,
          age = :age,
          role = :role,
          email = :email,
          contactname = :contactname,
          contactnumber = :contactnumber,
          gender = :gender,
          saturday = :saturday,
          sunday = :sunday,
          special = :special';
      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $name);
      $s->bindValue(':age', $age);
      $s->bindValue(':role', $role);
      $s->bindValue(':email', $email);
      $s->bindValue(':contactname', $contactname);
      $s->bindValue(':contactnumber', $contactnumber);
      $s->bindValue(':gender', $gender);
      $s->bindValue(':saturday', $saturday);
      $s->bindValue(':sunday', $sunday);
      $s->bindValue(':special', $special);
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

    include 'registration.html.php'; //Modify this to include the initial file for this folder
}
?>

