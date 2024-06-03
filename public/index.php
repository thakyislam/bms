<?php
include_once '../config/database.php';
include_once '../classes/Book.php';

$database = new Database();
$db = $database->getConnection();

$book = new Book($db);
$stmt = $book->read();
$num = $stmt->rowCount();

include_once '../templates/header.php';

if ($num > 0) {
    include_once '../templates/book_list.php';
} else {
    echo "<div>No books found.</div>";
}

include_once '../templates/footer.php';
