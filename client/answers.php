<div class="container">
    <h5 class="whiteText">Answers :</h5>
    <div class="offset-sm-1">
        <?php
        $query = "select * from answers where question_id='$qid'";
        $result = $conn->query($query);
        foreach ($result as $row) {
            $answers = $row['answer'];
            echo "<div class='row'>
        <p class='answerWrapper whiteText'>$answers</p>
        </div>";
        }
        ?>
    </div>
</div>