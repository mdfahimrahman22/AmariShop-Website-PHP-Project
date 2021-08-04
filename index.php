<?php
// include_once "includes/Database.php";

function getUsers()
{
    global $database;
    $sql="SELECT * FROM `user`";
    $result=$database->query($sql);
    $resArray=$database->fetch_array($result);
    print_r($resArray[0]['name']);
    
}

// getUsers();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmariShop</title>
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <h1>Welcome to AmariShop</h1>
</body>

</html>
