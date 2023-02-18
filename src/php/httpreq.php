<?php
    $directions = json_decode($_POST['json']);
    echo($directions->Name);
    echo isset($directions);
?>

