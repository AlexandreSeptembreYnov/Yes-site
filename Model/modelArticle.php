<?php
include_once ('dbConnection.php');
function getArticle($Categorie)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idArticle, Titre, Description, Image, Categorie, datePublication FROM article WHERE Categorie = ? ORDER BY datePublication DESC ;');
    $req->execute([$Categorie]);

    $post = $req->fetch(PDO::FETCH_ASSOC);
    return $post;
}

function getOneArticle($idArticle)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idArticle, Titre, Description, Image, Categorie,datePublication FROM article WHERE idArticle = ?;');
    $req->execute([$idArticle]);
    $post = $req->fetch();

    return $post;
}

function getLastArticle($Categorie)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idArticle, Titre, Description, Image, Categorie,DatePublication FROM article WHERE Categorie = ? ORDER BY datePublication DESC LIMIT 1;');
    $req->execute([$Categorie]);
    $post = $req->fetch();

    return $post;
}

function addArticle($Titre, $Description, $Image, $Categorie)
{
    $db = dbConnect();
    try
    {
        $req = $db->prepare('INSERT INTO article (Titre, Description, Image, Categorie,datePublication) VALUES (?, ?, ?, ?, NOW());');
        $req->execute([$Titre, $Description, $Image, $Categorie]);
        return True;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function delArticle($idArticle)
{
    $db = dbConnect();
    try
    {
        $req = $db->prepare('DELETE FROM article WHERE idArticle = ?');
        $req->execute([$idArticle]);
        return True;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
