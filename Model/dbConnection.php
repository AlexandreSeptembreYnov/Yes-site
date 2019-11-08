<?php
function dbConnect()
{
    try
    {
        $init_datas = parse_ini_file("config/config.ini");
        $url = $init_datas['url'];
        $login = $init_datas['login'];
        $pass = $init_datas['pass'];
        $db = new PDO($url, $login, $pass);
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

