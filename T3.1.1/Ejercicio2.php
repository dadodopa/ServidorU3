<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            const X = 5;

            for ($i = 1; $i <= 10; $i++) {
                $y = X * $i;
                printf("\n%d X %d = %d", X, $i, $y);
            }
            ?>
        </pre>
    </body>
</html>