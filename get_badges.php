<select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
<option selected>Tag</option>
    <?php

        $sql = "SELECT * FROM `badges` ORDER BY badge_no";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row

            while($row = $result->fetch_assoc()) {
                // Display each badge
                echo "<option value='" . $row["badge_no"] . "'>" . $row["badge_display"] . "</option>";
            }
            } else {
                // No results
            }

    ?>

</select>