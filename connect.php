<?php

$db = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', 'root');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);