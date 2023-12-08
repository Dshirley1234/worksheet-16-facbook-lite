<?php
include_once 'db.php';
include_once 'user.php';
session_start();

$user = unserialize($_SESSION['user']);
$username = $user->username;

$sql = "SELECT id FROM dbpwusers2 WHERE"