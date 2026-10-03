<?php
include_once("dbconfiger.php");
include_once("student.php");
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id) {
    $studentManager = new Student($conn);
    $studentManager->delete($id);
}
header("Location: index.php");
exit;