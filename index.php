<?php
require('Controleur/controleur.php');
session_start();
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'Connection') {
        Connection();
    } elseif ($_GET['action'] == 'lastArticleMetier') {
        lastArticleMetier();
    } elseif ($_GET['action'] == 'lastArticleStartup') {
        lastArticleStartup();
    } elseif ($_GET['action'] == 'acceuil') {
        acceuil();
    } elseif ($_GET['action'] == 'Article') {
        if (isset($_Post['idArticle']) && $_POST['idArticle'] > 0) {
            Article($_POST['idArticle']);
        } else {
            erreur404();
        }
    } elseif ($_GET['action'] == 'interview') {
        if (isset($_POST['idInterview']) && $_POST['idInterview'] > 0) {
            Interview($_POST['idInterview']);
        } else {
            erreur404();
        }
    } elseif ($_GET['action'] == 'MiniSerie') {
        if (isset($_POST['idMiniSerie']) && $_POST['idMiniSerie'] > 0) {
            MiniSerie($_POST['idMiniSerie']);
        } else {
            erreur404();
        }
    } elseif ($_GET['action'] == 'lastInterview') {
        LastInterview();
    } elseif ($_GET['action'] == 'lastMiniSerie') {
        LastMiniSerie();
    } elseif ($_GET['action'] == 'Collaborateur') {
        Collaborateur();
    } elseif ($_GET['action'] == 'addCollaborateur') {

        if (isset($_FILES['image']['tmp_name'])) {
            $taille = getimagesize($_FILES['image']['tmp_name']);
            $largeur = $taille[0];
            $hauteur = $taille[1];
            $largeur_miniature = 300;
            $hauteur_miniature = $hauteur / $largeur * 300;
            $im = imagecreatefrompng($_FILES['image']['tmp_name']);
            $im_miniature = imagecreatetruecolor($largeur_miniature, $hauteur_miniature);
            imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
            imagejpeg($im_miniature, 'Public/images/' . $_FILES['image']['name'], 90);
            $Image = '"Public/Images' . $_FILES['image']['name'] . '"';
        }

    } elseif ($_GET['action'] == 'addInterview') {

        if (isset($_POST['titre']) and isset($_POST['description']) and isset($_POST['lien'])) {
            if (isset($_FILES['image']['tmp_name'])) {
                $taille = getimagesize($_FILES['image']['tmp_name']);
                $largeur = $taille[0];
                $hauteur = $taille[1];
                $largeur_miniature = 300;
                $hauteur_miniature = $hauteur / $largeur * 300;
                $im = imagecreatefrompng($_FILES['image']['tmp_name']);
                $im_miniature = imagecreatetruecolor($largeur_miniature, $hauteur_miniature);
                imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
                imagejpeg($im_miniature, 'Public/images/' . $_FILES['image']['name'], 90);
                $Image = '"Public/Images' . $_FILES['image']['name'] . '"';
            }
            addInterview($_POST['titre'], $_POST['description'], $_POST['lien'], $Image);
            if (isset($_SESSION['id']) && $_SESSION['id'] == 25) {
                admin();
            } else {
                Connection();
            }
        }
    } elseif ($_GET['action'] == 'addMiniSerie') {

        if (isset($_POST['titre']) and isset($_POST['description']) and isset($_POST['lien'])) {
            if (isset($_FILES['image']['tmp_name'])) {
                $taille = getimagesize($_FILES['image']['tmp_name']);
                $largeur = $taille[0];
                $hauteur = $taille[1];
                $largeur_miniature = 300;
                $hauteur_miniature = $hauteur / $largeur * 300;
                $im = imagecreatefrompng($_FILES['image']['tmp_name']);
                $im_miniature = imagecreatetruecolor($largeur_miniature, $hauteur_miniature);
                imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
                imagejpeg($im_miniature, 'Public/images/' . $_FILES['image']['name'], 90);
                $Image = '"Public/Images' . $_FILES['image']['name'] . '"';
            }
            addMiniSerie($_POST['titre'], $_POST['description'], $_POST['lien'],$Image);
        }
        if (isset($_SESSION['id']) && $_SESSION['id'] == 25) {
            admin();
        } else {
            Connection();
        }
    } elseif ($_GET['action'] == 'addArticle') {

        if (isset($_FILES['image']['tmp_name'])) {
            $taille = getimagesize($_FILES['image']['tmp_name']);
            $largeur = $taille[0];
            $hauteur = $taille[1];
            $largeur_miniature = 300;
            $hauteur_miniature = $hauteur / $largeur * 300;
            $im = imagecreatefrompng($_FILES['image']['tmp_name']);
            $im_miniature = imagecreatetruecolor($largeur_miniature, $hauteur_miniature);
            imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
            imagejpeg($im_miniature, 'Public/images/' . $_FILES['image']['name'], 90);
            $Image = '"Public/Images' . $_FILES['image']['name'] . '"';
        }

        if (isset($_POST['titre']) and isset($_POST['description']) and isset($_POST['cat'])) {
            addArticle($_POST['titre'], $_POST['description'], $Image, $_POST['cat']);
            if (isset($_SESSION['id']) && $_SESSION['id'] == 25) {
                admin();
            } else {
                Connection();
            }
        }


    } elseif ($_GET['action'] == 'delArticle') {
        if (isset($_POST['article']) && $_POST['article'] > 0) {
            delArticle($_POST['article']);
            if (isset($_SESSION['id']) && $_SESSION['id'] == 25) {
                admin();
            } else {
                Connection();
            }
        }

    } elseif ($_GET['action'] == 'delCollaboration') {
        if (isset($_POST['Collabo']) && $_POST['Collabo'] > 0) {
            delCollaboration($_POST['Collabo']);
            if (isset($_SESSION['id']) && $_SESSION['id'] == 25) {
                admin();
            } else {
                Connection();
            }
        }
    } elseif ($_GET['action'] == 'delInterview') {
        if (isset($_POST['Interview']) && $_POST['Interview'] > 0) {
            delInterview($_POST['Interview']);
            if (isset($_SESSION['id']) && $_SESSION['id'] == 25) {
                admin();
            } else {
                Connection();
            }
        }
    } elseif ($_GET['action'] == 'delMiniSerie') {
        if (isset($_POST['Mini']) && $_POST['Mini'] > 0) {
            delMiniSerie($_POST['Mini']);
            if (isset($_SESSION['id']) && $_SESSION['id'] == 25) {
                admin();
            } else {
                Connection();
            }
        }
    } elseif ($_GET['action'] == 'admin') {
        if (isset($_POST['user']) && isset($_POST['pass'])) {
            if (getAdmin($_POST['user'], $_POST['pass'])) {
                $_SESSION['id'] = 25;
                admin();
            }
        }
        if (isset($_SESSION['id']) && $_SESSION['id'] == 25) {
            admin();
        } else {
            Connection();
        }
    }
}
else {
    acceuil();
}