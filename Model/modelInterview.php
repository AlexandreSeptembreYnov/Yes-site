<?php

function getInterview()
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idInterview, Titre, Description, Video, datePublication FROM interview ORDER BY datePublication DESC ;');
    $req->execute();
    $post = $req->fetch();

    return $post;
}

function getOneInterview($idInterview)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idInterview, Titre, Description, Video, datePublication FROM interview WHERE idInterview = ?;');
    $req->execute($idInterview);
    $post = $req->fetch();

    return $post;
}

function getLastInterview()
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idInterview, Titre, Description, Video,datePublication FROM interview ORDER BY datePublication DESC LIMIT 1;');
    $req->execute();
    $post = $req->fetch();

    return $post;
}

function addInterview($Titre, $Description, $Video)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('INSERT INTO Interview (Titre, Description, Video, datePublication) VALUES (?, ?, ?, ?, NOW());');
        $req->execute($Titre, $Description, $Video, );
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function delInterview($idInterview)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('DELETE FROM interview WHERE idInterview = ?');
        $req->execute($idInterview);
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function setInterview($idInterview)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idInterview, Titre, Description, Video, datePublication FROM interview WHERE idInterview = ?;');
    $req->execute($idInterview);
    $post = $req->fetch();

    return $post;
}
