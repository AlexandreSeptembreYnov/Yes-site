<?php

require_once('dbConnection.php');
function getCollaboration()
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idCollaboration, Nom, Lien, Image FROM Collaboration ORDER BY idCollaboration DESC ;');
    $req->execute();
    $post = $req->fetch();

    return $post;
}


function addCollaboration($Nom, $Image, $Lien)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('INSERT INTO Collaboration (Nom, Image, Lien VALUES (?, ?, ?);');
        $req->execute([$Nom, $Image, $Lien]);
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

}
function delCollaboration($idCollaboration)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('DELETE FROM Collaboration WHERE idCollaboration = ?');
        $req->execute([$idCollaboration]);
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}