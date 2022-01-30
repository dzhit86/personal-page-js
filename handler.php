<?php 
$response["success"] = "true";
$response["error"] = "Oshibka";

header("Content-type: application/json; charset=utf-8");
echo json_encode($response);