<?php
include_once '../config/database.php';
include_once '../classes/Book.php';

$database = new Database();
$db = $database->getConnection();

$book = new Book($db);

if ($_POST) {
    $book->title = $_POST['title'];
    $book->author = $_POST['author'];
    $book->published_year = $_POST['published_year'];

    if ($book->create()) {
        echo "<div class=alert alert-primary role=alert>Book was added.</div>";
    } else {
        echo "<div class=container text-center>Unable to add book.</div>";
    }
}

include_once '../templates/header.php';
include_once '../templates/add_book_form.php';
include_once '../templates/footer.php';
