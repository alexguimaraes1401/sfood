<?php

class DbConnection{
    public static function getConnection(){
        return new PDO('mysql:host=mysql742.umbler.com:41890; dbname=sfood;', 'user_food', 'food72168');
    }
} 