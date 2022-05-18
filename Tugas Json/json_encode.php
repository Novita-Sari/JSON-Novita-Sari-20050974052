<?php


$data = ["Red", "Blue", "Green", "orange", "Black", "Purple"];

header('Content-type:application/json;charset=utf-8');
echo json_encode($data);