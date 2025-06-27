<div class="container main">
    <div class="row">
        <h1 class="heading">Question</h1>
        <div class="col-8">
            <?php
            include("./common/db.php");
            $query = "select * from questions where id = '$qid' ";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $cid = $row['category_id'];
            echo "<h3 class='margin-bottom-15 questionTitle'>" . $row['title'] . "</h3>
    <p class='whiteText'>" . $row['description'] . "</p>";
            include("./client/answers.php");
            ?>
            <form action="./server/request.php" method="post">
                <input type="hidden" name="question_id" value="<?php echo $qid ?>">
                <textarea name="answer" class="form-control" placeholder="Your answer..."></textarea>
                <button class="btn btn-primary mt-3">Write your answer</button>
            </form>
        </div>
        <div class="col-4">
            <?php
            $categoryQuery = "select category from category where id='$cid'";
            $categoryResult = $conn->query($categoryQuery);
            $categoryRow = $categoryResult->fetch_assoc();
            echo "<h1 class='heading'>" . ucfirst($categoryRow['category']) . "</h1>";

            $query = "select * from questions where category_id='$cid' and id!='$qid'";
            $result = $conn->query($query);

            foreach ($result as $row) {
                $title = $row['title'];
                $id = $row['id'];
                echo "<div class='questionList'>
                <h4><a class='whiteText' href='?q-id=$id'>$title</a></h4>
                </div>";
            }
            ?>
        </div>
    </div>
</div>