<?php

include_once 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id=:id"

$deleteUsers = $conn->prepare($sql);

$deleteUsers->bindParm(":id", $id);

$deleteUsers->execute();

header("Location:index.php");