<?php 

    class MinhaEceptionCustomizada

    try {

        throw new Exception('Esse é um erro de teste');

    } catch(Exception $e) {
        echo $e;
    }

