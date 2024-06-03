<?php
include_once '../config/database.php';
include_once '../classes/Book.php';

$database = new Database();
$db = $database->getConnection();

$book = new Book($db);

if ($_POST) {
    $book->id = $_POST['id'];
    $book->title = $_POST['title'];
    $book->author = $_POST['author'];
    $book->published_year = $_POST['published_year'];

    if ($book->update()) {
        echo "<div>Book was updated.</div>";
    } else {
        echo "<div>Unable to update book.</div>";
    }
} else {
    $book->id = $_GET['id'];
    $book->readOne();
}

include_once '../templates/header.php';
include_once '../templates/edit_book_form.php';
include_once '../templates/footer.php';
