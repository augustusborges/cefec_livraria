<!DOCTYPE html>
<html lang='pt'>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=devive-width, inicial-scale=1">

        <title><?php echo TITLE; ?>401</title>

        <link href="http://<?php echo APP_HOST;?>/public/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://<?php echo APP_HOST;?>/public/css/error.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1 class="error"><?php echo $varMessage;?>
        </div>
    </body>
</html>