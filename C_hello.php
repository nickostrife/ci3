<?php
class C_hello extends CI_controller{
    function index () {
        ?>
        <!doctype html>
        <html>
        <head>
            <title>Hello World!</title>
        </head>
        <body>
            <?php echo "Hello World!";?>
        </body>
        </html>
        <?php
    } 
}
?>
