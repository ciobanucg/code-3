<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Clinicsoftware.com</title>
    </head>
    <body>
        <div id="container">
            <h1>Welcome!</h1>
            <p><?php echo $Name . " " . $Surname; ?></p>

            <pre>

                <?php

                    var_dump($array);
                ?>

            </pre>

        </div>
    </body>
</html>