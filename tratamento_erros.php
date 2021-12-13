<?php

    try {
        echo 'try';
        $sql = 'Select * from clientes';
        mysql_query($sql); //error
    } catch (Error $e) {
        echo '<br /> <p style="color: red">' . $e . '</p><br />';
    } finally {
        echo 'finally';
    }


?>