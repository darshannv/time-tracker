<?php

        if(isset($_POST["sumbit_address"])) {
            $address = $_POST["address"];
            ?>

            <iframe width="80%" height="350" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed">
            </iframe>
            <?php
        }


?>

<form method="POST">

        <p>
        <input type="text" name="address" placeholder="Enter Address">
        </p>

        <input type="submit" name="submit_address">
</form>