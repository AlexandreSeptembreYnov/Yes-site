<?php

require_once('dbConnection.php');
function getVideo()
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idVideo, Titre, Description, Video, datePublication, miniature FROM Video ORDER BY datePublication DESC ;');
    $req->execute();
    $post = $req->fetch();

    return $post;
}

function getOneVideo($idVideo)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idVideo, Titre, Description, Video, datePublication, miniature FROM Video WHERE idVideo = ?;');
    $req->execute([$idVideo]);
    $post = $req->fetch();

    return $post;
}

function getLastVideo()
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idVideo, Titre, Description, Video,datePublication, miniature FROM Video ORDER BY datePublication DESC LIMIT 1;');
    $req->execute();
    $post = $req->fetch();

    return $post;
}

function addVideo($Titre, $Description, $Video, $Image)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('INSERT INTO Video (Titre, Description, Video, datePublication, miniature) VALUES (?, ?, ?, NOW(), ?);');
        $req->execute([$Titre, $Description, $Video, $Image]);
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function delVideo($idVideo)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('DELETE FROM Video WHERE idVideo = ?');
        $req->execute([$idVideo]);
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}