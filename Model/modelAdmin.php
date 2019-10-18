<?php

function getColaboration($pseudo, $pwd)
{
    $db = dbConnect();
    $pwd = hash('sha512', htmlspecialchars($pwd));
    $rqt = $db->prepare("SELECT * FROM administrateurs WHERE nom = ? AND mdp = ?");
    $rqt->execute(array($pseudo, $pwd));
    $NbUser = $rqt->rowCount();
    return $NbUser;
}
