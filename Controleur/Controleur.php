<?php
require('Model/modelAdmin.php');
require('Model/modelArticle.php');
require('Model/modelColaborateur.php');
require('Model/modelInterview.php');
require('Model/modelMiniSerie.php');

function admin()
{
    require('Vue/vueAdmin.php');
}
function Connection()
{
    require('Vue/vueConnection.php');
}
function lastArticleMetier()
{
    $article = getLastArticle("Metier");
    $listeArticle = getArticle("Metier");
    require('Vue/vueArcticle');
}
function lastArticleStartup()
{
    $article = getLastArticle("Startup");
    $listeArticle = getArticle("Startup");
    require('Vue/vueArcticle');
}
function acceuil()
{
    $article = getLastArticle("Metier AND Startup");
    $interview = getLastInterview();
    require('Vue/vueAcceuil');
}

function Article($id)
{
    $article = getOneArticle($id);
    $listeArticle = getArticle($article['Categorie']);
    require('Vue/vueArcticle');
}

function Interview($id)
{
    $interview = getOneInterview($id);
    $listeInterview = getInterview();
    require('Vue/vueInterview');
}
function LastInterview()
{
    $interview = getLastInterview();
    $listeInterview = getInterview();
    require('Vue/vueInterview');
}
function LastMiniSerie()
{
    $MiniSerie = getLastMiniSerie();
    $listeMiniSerie = getMiniSerie();
    require('Vue/vueMiniSerie');
}

function MiniSerie($id)
{
    $MiniSerie = getOneMiniSerie($id);
    $listeMiniSerie = getMiniSerie();
    require('Vue/vueMiniSerie');
}
function Colaborateur()
{
    $colaborateur = getColaboration();
    require('Vue/vueColaborateur');
}
function erreur404()
{
    require('Vue/vueErreur404');
}