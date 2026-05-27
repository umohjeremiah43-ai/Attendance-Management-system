<?php

include('../database/connect.php');

$date = date("Y-m-d");

foreach($_POST['attendance'] as $student_id => $status){

    $query = "INSERT INTO student_attendance
    (student_id, status, attendance_date)
    VALUES
    (:student_id, :status, :attendance_date)";

    $stmt = $dbh->prepare($query);

    $stmt->execute([
        ':student_id' => $student_id,
        ':status' => $status,
        ':attendance_date' => $date
    ]);
}

echo "Attendance saved successfully";

?>