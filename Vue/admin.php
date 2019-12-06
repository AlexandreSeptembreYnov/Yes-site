<?php require_once ('Model/modelAdmin.php');
require_once('Model/modelArticle.php');
require_once('Model/modelColaborateur.php');
require_once('Model/modelInterview.php');
require_once('Model/modelMiniSerie.php');
?>

<html>
<head>
    <title>Admin</title>
</head>
<body>
<H1>AJOUT</H1>
<div>
<div>
<h2>article</h2>
<form action="../index.php?action=addArticle" method="post" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre :</label>
        <input type="text" name="titre"/>
    </div>

    <div>
        <label>Metier
            <input type="radio" name="cat" value="Metier"/>
        </label><br>
        <label>Startup
            <input type="radio" name="cat" value="Startup"/>
        </label>
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea  name="description" rows="5" cols="33"></textarea>
    </div>
    <div>
        <label for="image">Image :</label>
        <input type="file"  value="" name="image"/>
    </div>
    <input type="submit" value="Valider" />
</form>
</div>
<h2>Interview</h2>
<div>
<form action="/index.php?action=addInterview" method="post">
    <div>
        <label for="titre">Titre :</label>
        <input type="text" name="titre"/>
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea  name="description" rows="5" cols="33"></textarea>
    </div>
    <div>
        <label for="titre">Video :</label>
        <input type="text" name="lien"/>
    </div>
    <input type="submit" value="Valider" />
</form>
</div>
<h2>MiniSerie</h2>
<form action="/index.php?action=addMiniSerie" method="post">
    <div>
        <label for="titre">Titre :</label>
        <input type="text" name="titre"/>
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea  name="description" rows="5" cols="33"></textarea>
    </div>
    <div>
        <label for="titre">Video :</label>
        <input type="text" name="lien"/>
    </div>
    <input type="submit" value="Valider" />
</form>
<h2>Collaborateur</h2>
<form action="/index.php?action=addCollaborateur" method="post" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre :</label>
        <input type="text" name="titre" value="">
    </div>

    <div>
        <label for="description">Description :</label>
        <textarea  name="description" rows="5" cols="33"></textarea>
    </div>
    <div>
        <label for="image">Image :</label>
        <input type="file"  value="" name="image">
    </div>
    <input type="submit" value="Valider" />
</form>
</div>
<H1>SUPPRIMER</H1>
<h2>article</h2>
<form action="/index.php?action=delArticle" method="post">
    <label for="article">Choisis un article</label>
    <select name="article"> 
        <?php
        $db = dbConnect();
        $req = $db->prepare('SELECT idArticle, Titre, Description, Image, Categorie, datePublication FROM article ORDER BY datePublication DESC ;');
        $req->execute([]);
        $article = $req->fetchALL();
        foreach($article as $key){ ?>
    <option value="<?php echo $key['idArticle'] ?>"><?php echo $key['Titre'] ?></option>
        <?php } ?>
</select>
    <input type="submit" value="Valider" />
</form>




<h2>Interview</h2>
<form action="/index.php?action=delInterview" method="post">
    <label for="Interview">Choisis une Interview</label>
    <select name="Interview">
        <?php
        $req = $db->prepare('SELECT idInterview, Titre, Description, Video, datePublication FROM interview ORDER BY datePublication DESC ;');
        $req->execute([]);
        $Interview = $req->fetchALL();
        foreach($Interview as $key){ ?>
            <option value="<?php echo $key['idInterview'] ?>"><?php echo $key['Titre'] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Valider" />
</form>




<h2>MiniSerie</h2>
<form action="/index.php?action=delMiniSerie" method="post">
    <label for="Mini">Choisis une Miniserie</label>
    <select name="Mini">
        <?php
        $req = $db->prepare('SELECT idMiniSerie, Titre, Description, Video, datePublication FROM MiniSerie ORDER BY datePublication DESC ;');
        $req->execute([]);
        $MiniSerie = $req->fetchALL();
        foreach($MiniSerie as $key){ ?>
            <option value="<?php echo $key['idMiniSerie'] ?>"><?php echo $key['Titre'] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Valider" />
</form>



<h2>Collaborateur</h2>
<form action="/index.php?action=delCollaboration" method="post">
    <label for="Mini">Choisis une Collaboration</label>
    <select name="Mini">
        <?php
        $req = $db->prepare('SELECT idCollaboration, Nom, Lien, Image FROM Collaboration ORDER BY idCollaboration DESC ;');
        $req->execute([]);
        $Collaboration = $req->fetchALL();
        foreach($Collaboration as $key){ ?>
            <option value="<?php echo $key['idCollaboration'] ?>"><?php echo $key['Titre'] ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Valider" />
</form>
</body>
</html>