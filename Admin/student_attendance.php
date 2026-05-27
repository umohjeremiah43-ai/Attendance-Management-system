
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f5f7fa;
        }

        h2{
            margin-bottom: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td{
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th{
            background: #007bff;
            color: white;
        }

        select{
            padding: 5px;
        }

        button{
            margin-top: 20px;
            padding: 10px 20px;
            background: #007bff;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover{
            background: #0056b3;
        }

    </style>
</head>

<body>

<h2>Student Attendance</h2>

<?php

include('../database/connect.php');

$query = "SELECT * FROM students";

$stmt = $dbh->prepare($query);

$stmt->execute();

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<form method="POST" action="save-student-attendance.php">

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Attendance</th>
</tr>

<?php foreach($students as $row){ ?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['fullname']; ?></td>

    <td>

        <select name="attendance[<?php echo $row['id']; ?>]">

            <option value="present">Present</option>

            <option value="absent">Absent</option>

            <option value="late">Late</option>

        </select>

    </td>

</tr>

<?php } ?>

</table>

<br>

<button type="submit">Save Attendance</button>

</form>

</body>
</html>

