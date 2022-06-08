<?php

$test_query = mysqli_query($conn, "SELECT * FROM tests");
$test_result = [];
while ($row = $test_query->fetch_assoc()) {
    $test_result[] = $row;
}

?>

<?php foreach ($test_result as $each_test) { ?>
<div class="panel_body">
    <article><a class="p panel_thumb"
            <?php echo "href=\"begin-animal.php?chosen_test=" . $each_test["test_id"] . "\""; ?>>
                    <img
                    <?php
                        switch ($each_test['difficulty']) {
                            case "beginner":
                                echo "src=\"img/Monsters2.png\"";
                                break;
                            case "intermediate":
                                echo "src=\"img/Monsters3.png\"";
                                break;
                            case "expert":
                                echo "src=\"img/Monsters4.png\"";
                                break;
                            default:
                                break;
                        }
                    ?>
                    alt="" class="newImg" style="width: 300px; height: 300px"></a><a class="p pointer_next" href="begin-animal.php">
            <div class="bar"><span></span></div>
            <div class="pointer"><img width="7" src="img/pointer_next_black.png" alt=""></div>
        </a>
        <p> <?php echo strtoupper($each_test['difficulty']) ?> </p>
        <h1> <?php echo $each_test['name'] ?> </h1>
    </article>
</div>
<?php } ?>