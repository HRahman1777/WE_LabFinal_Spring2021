<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer Question 1</title>
</head>

<body>
    <h3>Given Pattern</h3><br>
    <?php
    for ($temp = 1; $temp <= 5; $temp++) {
        for ($star = 1; $star <= $temp; $star++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>

</html>