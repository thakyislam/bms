<?php
include_once '../config/database.php';
include_once '../classes/Book.php';

$database = new Database();
$db = $database->getConnection();

$book = new Book($db);

if ($_POST) {
    $book->id = $_POST['id'];
    if ($book->delete()) {
        echo "<div>Book was deleted.</div>";
    } else {
        echo "<div>Unable to delete book.</div>";
    }
}

header("Location: index.php");
