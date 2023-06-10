<?php
require('../config.php');

// Start the session
session_start();

// Create a connection to the database
$konek = mysqli_connect(
	$config['hostname'],
	$config['username'],
	$config['password'],
	$config['database']
);

// Read data from the "suhu_pembakaran" table
$sql = mysqli_query($konek, "SELECT * FROM suhu_pembakaran ORDER BY id DESC");

// Read the topmost data
$data = mysqli_fetch_array($sql);
$id = $data['id'];

// If the ID is empty, assume it as 0
if (empty($id)) $id = 0;

$currentId = isset($_SESSION['id']) ? $_SESSION['id'] : 0;

if ($id > $currentId) {
	$status = 'on';
	$_SESSION['id'] = $id;
} else {
	$status = 'off';
}

$response = [
	'id' => $id,
	'status' => $status
];

// Convert the response array to JSON and echo it
echo json_encode($response);
