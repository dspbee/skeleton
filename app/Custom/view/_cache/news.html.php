<?php
/**
 * @var \Dspbee\Core\Request $request
 * @var string $url
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>News list</title>
    <style>
        body {
            text-align: center;
        }
        span {
            color: green;
        }
    </style>
</head>
<body>
<h1>All news list</h1>
<br />
<a href="<?= $request->makeUrl('news/test') ?>">Test news</a>
</body>
</html>