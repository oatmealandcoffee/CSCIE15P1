<?php
include('clock_controller.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Clock</title>

    <style>
        body {
            background-color: <?=$bg_color;?>;
        }
        img {
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>
<body>
<p><?=$display_time;?></p>
<img alt="" src="<?=$imgsrc;?>">

</body>
</html>

