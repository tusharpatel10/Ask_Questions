<select class="form-control" name="category" id="category">
    <option value="">Select a Category</option>
    <?php
    include("./common/db.php");
    $query = "Select * from category";
    $result = $conn->query($query);
    foreach ($result as $row) {
        $id = $row['id'];
        $name = ucfirst($row['category']);
        echo "<option value='$id'>$name</option>";
    }
    ?>
</select>