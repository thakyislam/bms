<form action="edit_book.php" method="post">
    <input type="hidden" class="table-primary" name="id" value="<?php echo $book->id; ?>">
    <label class="table-secondary">Title</label><br>
    <input type="text" name="title" value="<?php echo $book->title; ?>"><br>
    <label>Author</label><br>
    <input type="text" name="author" value="<?php echo $book->author; ?>"><br>
    <label>Published Year</label><br>
    <input type="number" name="published_year" value="<?php echo $book->published_year; ?>"><br>
    <input type="submit" value="Update Book">
</form>