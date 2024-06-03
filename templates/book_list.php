<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['author'] ?></td>
                <td><?= $row['published_year'] ?></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="edit_book.php?id=<?= $row['id'] ?>"><i class="ph ph-pencil"></i></a>
                    <button onclick="showDeleteModal(<?= $row['id'] ?>)" type="button" class="btn btn-danger btn-sm">
                        <i class="ph ph-trash"></i>
                    </button>
                </td>
            </tr>
        <?php }
        ?>
    </tbody>
</table>
<script>
    function showDeleteModal(bookId) {
        document.getElementById("delBookId").value = bookId;
        let modalId = document.getElementById('deleteModal')
        new bootstrap.Modal(modalId).show();
    }
</script>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="deleteModalLabel">Delete Book</h5>
                <button type="button" class="btn btn-light" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h3>Are you sure?</h3>
                    <form action="delete_book.php" method="post">
                        <input type="hidden" name="id" id="delBookId" value="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>