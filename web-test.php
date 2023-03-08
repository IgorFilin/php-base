<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test-php-html</title>
</head>
<body>
    <div>
        <?php
        include 'web-test-component.php';
        echo "<h1>$foo</h1>";
        ?>
    </div>
    <div>
    <?php
        include 'web-test-component-array.php';

        for($i = 0;$i < count($array);$i++) {
            $temp = $array[$i]['name'];
              echo "<li>$temp</li>";
        };

        ?>
    </div>
</body>
</html>