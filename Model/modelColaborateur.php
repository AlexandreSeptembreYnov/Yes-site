<?php

require_once('dbConnection.php');
function getColaboration()
{
    $db = dbConnect();
    $req = $db->prepare('SELECT idColaboration, Nom, Lien, Image FROM Colaboration ORDER BY idColaboration DESC ;');
    $req->execute();
    $post = $req->fetch();

    return $post;
}


function addColaboration($Nom, $Image, $Lien)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('INSERT INTO Colaboration (Nom, Image, Lien VALUES (?, ?, ?);');
        $req->execute($Nom, $Image, $Lien );
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

}
function delColaboration($idColaboration)
{
    $db = dbConnect();
    try {
        $req = $db->prepare('DELETE FROM Colaboration WHERE idColaboration = ?');
        $req->execute($idColaboration);
        return True;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}