<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<ul>";
    $settings = array("theme" => "dark", "font" => "Arial");

    foreach ($settings as $x => $y) {
        echo "<li> $x: $y ";
    }
    echo "<ul>";

    ?>

</body>

</html>