<?php
require_once('dbConnection.php');
function getAdmin($pseudo, $pwd)
{
    $db = dbConnect();
    $pwd = hash('sha512', htmlspecialchars($pwd));
    $pseudo = htmlspecialchars($pseudo);
    $rqt = $db->prepare("SELECT * FROM administrateurs WHERE nom = ? AND mdp = ?");
    $rqt->execute(array($pseudo, $pwd));
    $NbUser = $rqt->rowCount();
    return $NbUser;
}
