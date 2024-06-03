<table border='1' class="table table-bordered">
    <tr class="table-info">
        <th class="table-primary">ID</th>
        <th class="table-secondary">Title</th>
        <th class="table-success">Author</th>
        <th class="table-danger">Published Year</th>
        <th class="table-warning">Action</th>
    </tr>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "<tr class=table-light>";
        echo "<td class=table-warning>{$id}</td>";
        echo "<td class=table-danger>{$title}</td>";
        echo "<td class=table-warning>{$author}</td>";
        echo "<td class=table-table-primary>{$published_year}</td>";
        echo "<td>";
        echo "<a href='edit_book.php?id={$id}'>Edit</a>";
        echo " | ";
        echo "<form action='delete_book.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='id' value='{$id}'>";
        echo "<input type='submit' value='Delete'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>