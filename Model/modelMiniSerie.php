<?php
require_once('dbConnection.php');

function getMiniSerie()
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idMiniSerie, Titre, Description, Video, datePublication FROM MiniSerie ORDER BY datePublication DESC ;');
    $req->execute();
    $post = $req->fetch();

    return $post;
}

function getOneMiniSerie($idMiniSerie)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idMiniSerie, Titre, Description, Video, datePublication FROM MiniSerie WHERE idMiniSerie = ?;');
    $req->execute([$idMiniSerie]);
    $post = $req->fetch();

    return $post;
}

function getLastMiniSerie()
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idMiniSerie, Titre, Description, Video,datePublication FROM MiniSerie ORDER BY datePublication DESC LIMIT 1;');
    $req->execute();
    $post = $req->fetch();

    return $post;
}

function addMiniSerie($Titre, $Description, $Video)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('INSERT INTO MiniSerie (Titre, Description, Video, datePublication) VALUES (?, ?, ?, NOW());');
        $req->execute([$Titre, $Description, $Video]);
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function delMiniSerie($idMiniSerie)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('DELETE FROM MiniSerie WHERE idMiniSerie = ?');
        $req->execute([$idMiniSerie]);
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}