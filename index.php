<?php
require('Controleur/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'Connection') {
        Connection();
    }
    elseif ($_GET['action'] == 'lastArcticleMetier')
    {
        lastArticleMetier();
    }
    elseif ($_GET['action'] == 'lastArticleStartup')
    {
        lastArticleStartup();
    }
    elseif ($_GET['action'] == 'acceuil')
    {
        acceuil();
    }
    elseif ($_GET['action'] == 'Article') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            Article($_GET['id']);
        }
        else {
            erreur404();
        }
    }
    elseif ($_GET['action'] == 'interview') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            Interview($_GET['id']);
        }
        else {
            erreur404();
        }
    }
    elseif ($_GET['action'] == 'MiniSerie') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            MiniSerie($_GET['id']);
        }
        else {
            erreur404();
        }
    }
    elseif ($_GET['action'] == 'lastInterview')
    {
        LastInterview();
    }
    elseif ($_GET['action'] == 'lastMiniSerie')
    {
        LastMiniSerie();
    }
    elseif ($_GET['action'] == 'Colaborateur')
    {
        Colaborateur();
    }
}
else {
    lastArticle();
}