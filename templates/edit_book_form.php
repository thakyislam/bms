<form action="edit_book.php" method="post">
    <div class="text-start">
        <div class="mb-3">
            <input type="hidden" class="table-primary" name="id" value="<?= $book->id; ?>">
            <label for="titleInput" class="form-label">Title</label><br>
            <input type="text" class="form-control" name="title" value="<?= $book->title; ?>"><br>
        </div>
        <div class="mb-3">
            <label for="authorInput" class="form-label">Author</label><br>
            <input type="text" class="form-control" name="author" value="<?= $book->author; ?>"><br>
        </div>
        <div class="mb-3">
            <label for="yearInput" class="form-label">Published Year</label><br>
            <input type="number" class="form-control" name="published_year" value="<?= $book->published_year; ?>"><br>
        </div>
        <input type="submit" value="Update Book">
    </div>
    </div>
</form>