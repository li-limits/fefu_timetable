<?php
include "dbconnect.php";
session_start();

$event_name = $_POST['event_name'];
$period = $_POST['period'];
$event_place = $_POST['event_place'];
$description = $_POST['description'];
$event_tag = isset($_POST['event_tag']) ? $_POST['event_tag'] : array();
$date = $_POST['event_date'];
$event_start = $_POST['event_start'];
$event_end = $_POST['event_end'];

if ($period == 'Единожды'){
    $sql = "INSERT INTO `events` (user_id, event_name, event_date, event_start, event_end, event_period, event_place, event_description) VALUES (:user_id,
    :event_name, :event_date, :event_start, :event_end, :event_period, :event_place, :event_description)";
    $result = $conn->prepare($sql);
    $result->execute(array(':user_id' => $_SESSION['user_id'], ':event_name' => $event_name, ':event_date' => $date,
                    ':event_start' => $event_start, ':event_end' => $event_end, ':event_period' => $period, ':event_place' => $event_place, ':event_description' => $description));
}

else if ($period == 'Каждую неделю') {
    for ($i = 0; $i <= 10; $i++){
        $sql = "INSERT INTO `events` (user_id, event_name, event_date, event_start, event_end, event_period, event_place, event_description) VALUES (:user_id,
                :event_name, :event_date, :event_start, :event_end, :event_period, :event_place, :event_description)";
        $result = $conn->prepare($sql);
        $result->execute(array(':user_id' => $_SESSION['user_id'], ':event_name' => $event_name, ':event_date' => $date,
                        ':event_start' => $event_start, ':event_end' => $event_end, ':event_period' => $period, ':event_place' => $event_place, ':event_description' => $description));
        $date = date('Y-m-d', strtotime("$date + 7 days"));
    }
}

else if ($period == 'Каждые 2 недели') {
    for ($i = 0; $i <= 10; $i++){
        $sql = "INSERT INTO `events` (user_id, event_name, event_date, event_start, event_end, event_period, event_place, event_description) VALUES (:user_id,
                :event_name, :event_date, :event_start, :event_end, :event_period, :event_place, :event_description)";
        $result = $conn->prepare($sql);
        $result->execute(array(':user_id' => $_SESSION['user_id'], ':event_name' => $event_name, ':event_date' => $date,
                        ':event_start' => $event_start, ':event_end' => $event_end, ':event_period' => $period, ':event_place' => $event_place, ':event_description' => $description));
        $date = date('Y-m-d', strtotime("$date + 14 days"));
    }
}

/*$sql = "INSERT INTO `events` (user_id, event_name, event_date, event_start, event_end, event_period, event_place, event_description) VALUES (:user_id,
:event_name, :event_date, :event_start, :event_end, :event_period, :event_place, :event_description)";
$result = $conn->prepare($sql);
$result->execute(array(':user_id' => $_SESSION['user_id'], ':event_name' => $event_name, ':event_date' => $date,
                ':event_start' => $event_start, ':event_end' => $event_end, ':event_period' => $period, ':event_place' => $event_place, ':event_description' => $description));
*/
/*$sql = "SELECT * FROM `events` WHERE user_id = :user_id";
$result = $conn->prepare($sql);
$result->execute(array(':user_id' => $_SESSION['user_id']));
$rowCount = $result->rowCount();
$i = 1;
$event_id = NULL;

while ($row = $result->fetch()){
    if ($i == $rowCount) {
       $event_id = $row['event_id'];
    }
    else{
        $i = $i + 1;
    }
}

$sql = "INSERT INTO `event_tags` (event_id, tag_1, tag_2, tag_3, tag_4) VALUES (:event_id, :tag1, :tag2, :tag3, :tag4)";
$result = $conn->prepare($sql);
$result->execute(array(':event_id' => $event_id, ':tag1' => $event_tag[0], ':tag2' => $event_tag[1], ':tag3' => $event_tag[2],
                           ':tag4' => $event_tag[3]));

$sql = "SELECT * FROM `event_tags` WHERE event_id = :event_id";
$result = $conn->prepare($sql);
$result->execute(array(':event_id' => $event_id));
$row = $result->fetch();*/

echo(1);
?>