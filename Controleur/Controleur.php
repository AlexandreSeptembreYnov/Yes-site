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
    require('Vue/vueArticle.php');
}
function lastArticleStartup()
{
    $article = getLastArticle("Startup");
    $listeArticle = getArticle("Startup");
    require('Vue/vueArticle.php');
}
function acceuil()
{
    $article = getLastArticle("Metier AND Startup");
    $interview = getLastInterview();
    require('Vue/vueAcceuil.php');
}

function Article($id)
{
    $article = getOneArticle($id);
    $listeArticle = getArticle($article['Categorie']);
require('Vue/vueArticle.php');
}

function Interview($id)
{
    $interview = getOneInterview($id);
    $listeInterview = getInterview();
    require('Vue/vueInterview.php');
}
function LastInterview()
{
    $interview = getLastInterview();
    $listeInterview = getInterview();
    require('Vue/vueInterview.php');
}
function LastMiniSerie()
{
    $MiniSerie = getLastMiniSerie();
    $listeMiniSerie = getMiniSerie();
    require('Vue/vueMiniSerie.php');
}

function MiniSerie($id)
{
    $MiniSerie = getOneMiniSerie($id);
    $listeMiniSerie = getMiniSerie();
    require('Vue/vueMiniSerie.php');
}
function Collaborateur()
{
    $colaborateur = getCollaboration();
    require('Vue/vueCollaborateur.php');
}
function erreur404()
{
    require('Vue/vueErreur404.php');
}