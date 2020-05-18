<?php


include 'includes/db.inc.html.php';

try {
    $sql = 'SELECT coursedetails, what2bring, faqs, packetpickup, costincludes, images FROM eventinfo page';
    $result = $pdo->query($sql);
} catch (PDOException $e) {
    $error = 'Error fetching content for the front page: ' . $e->getMessage();
    include '../includes/error.html.php';
    exit();
}


while ($row = $result->fetch()) {
    $eventinfo[] = array(
        'coursedetails' => $row['coursedetails'],
        'what2bring' => $row['what2bring'],
        'faqs' => $row['faqs'],
        'packetpickup' => $row['packetpickup'],
        'costincludes' => $row['costincludes'],
        'images' => $row['images']
    );
}


include 'eventinfo.html.php';

 ?>