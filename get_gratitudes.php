

<div id="gratitudeCards" class="row" data-masonry='{"percentPosition": true }'>

<?php

    $sql = "SELECT * FROM gratitudes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row

        while($row = $result->fetch_assoc()) {
        // Display each badge

            echo "<div class='col-sm-6 col-lg-4 mb-4' style='position: absolute; left: 0%; top: 0px;'>";
                echo "<div class='card'>";
                    echo "<div class='card-body'>";
                        echo "<p class='card-text'>" . $row["entry_text"] ."</p>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

        }
        } else {
            // No results
        }

?>

</div>