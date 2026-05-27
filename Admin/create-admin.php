<?php

include '../database/connect.php';

/*
-----------------------------------
CREATE ADMIN DETAILS
-----------------------------------
*/

$admin_username = "admin";

$admin_password = "admin123";


/*
-----------------------------------
HASH THE PASSWORD
-----------------------------------
*/

$hashed_password = password_hash(
    $admin_password,
    PASSWORD_DEFAULT
);


/*
-----------------------------------
INSERT ADMIN INTO DATABASE
-----------------------------------
*/

$sql = "INSERT INTO admins(
            username,
            password
        )

        VALUES(
            :username,
            :password
        )";


$stmt = $dbh->prepare($sql);


$stmt->execute([

    ':username' => $admin_username,

    ':password' => $hashed_password

]);


echo "Admin account created successfully!";
?>