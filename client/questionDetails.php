<div class="container">
    <h1 class="heading">Question</h1>
    <div class="col-6">
        <?php
        include("./common/db.php");
        $query = "select * from questions where id = $qid";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();

        echo "<h4 class='margin-bottom-15 questionTitle'>" . $row['title'] . "</h4>
    <p>" . $row['description'] . "</p>";
        ?>
        <textarea class="form-control" placeholder="Your answer..."></textarea>
        <button class="btn btn-primary mt-3">Write your answer</button>
    </div>
</div>