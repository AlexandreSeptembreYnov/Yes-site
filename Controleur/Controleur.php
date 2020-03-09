<?php
require('Model/modelAdmin.php');
require('Model/modelArticle.php');
require('Model/modelColaborateur.php');
require('Model/modelInterview.php');
require('Model/modelMiniSerie.php');

function admin()
{
    require('Vue/admin.php');
}
function Connection()
{
    require('Vue/Connection.php');
}
function lastArticleMetier()
{
    $article = getLastArticle("Metier");
    $listeArticle = getArticle("Metier");
    require ("Vue/vueHeader.html");
    require('Vue/vueArticle.php');
    require ("Vue/Footer-View.html");
}
function lastArticleStartup()
{
    $article = getLastArticle("Startup");
    $listeArticle = getArticle("Startup");
    require ("Vue/vueHeader.html");
    require('Vue/vueArticle.php');
    require ("Vue/Footer-View.html");
}
function acceuil()
{
    $article = getLastArticle("Metier AND Startup");
    $logo = "Tv.png";
    $interview = getLastInterview();
    require ("Vue/vueHeader.html");
    require("Vue/vueAccueil.php");
    require ("Vue/Footer-View.html");
}

function Article($id)
{
    $article = getOneArticle($id);
    $listeArticle = getArticle($article['Categorie']);
    require ("Vue/vueHeader.html");
    require('Vue/vueArticle.php');
    require ("Vue/Footer-View.html");
}

function Interview($id)
{
    $interview = getOneInterview($id);
    $listeInterview = getInterview();
    $logo = "Tv.png";
    $voila = "INTERVIEW";
    require ("Vue/vueHeader.html");
    require('Vue/vueInterview.php');
    require ("Vue/Footer-View.html");
}
function LastInterview()
{
    $interview = getLastInterview();
    $listeInterview = getInterview();
    $logo = "tv.png";
    $voila = "INTERVIEW";
    require ("Vue/vueHeader.html");
    require('Vue/vueInterview.php');
    require ("Vue/Footer-View.html");
}
function LastMiniSerie()
{
    $MiniSerie = getLastMiniSerie();
    $logo = "crayon.png";
    $voila = "MINI-SERIES";
    $listeMiniSerie = getMiniSerie();
    require ("Vue/vueHeader.html");
    require('Vue/vueMiniSerie.php');
    require ("Vue/Footer-View.html");
}

function MiniSerie($id)
{
    $MiniSerie = getOneMiniSerie($id);
    $logo = "crayon.png";
    $voila = "MINI-SERIES";
    $listeMiniSerie = getMiniSerie();
    require ("Vue/vueHeader.html");
    require('Vue/vueMiniSerie.php');
    require ("Vue/Footer-View.html");
}
function Collaborateur()
{
    $colaborateur = getCollaboration();
    require ("Vue/vueHeader.html");
    require('Vue/vueCollaborateurs.php');
    require ("Vue/Footer-View.html");
}
function erreur404()
{
    require('Vue/vueErreur404.php');
}