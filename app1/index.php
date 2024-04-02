<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker</title>
</head>
<body>
        <?php

        echo "This is Elon Mask <br>";


        $response = file_get_contents('http://app2');

        $data = json_encode($response);

        echo $data;

        ?>

</body>
</html>