asm article (image text titre choix(Metier, Categorie)
asm interview (lien youtube titre description)
asm miniSerie (lien youtube titre description)
asm colaborateur (lien, nom, image taille conseillé)


<head>
    <title>Admin</title>
</head>
<body>
<H1>AJOUT</H1>
<h2>article</h2>
<form action="/index.php?action=addArticle" method="post">
    <div>
        <label for="titre">Titre :</label>
        <input type="text" name="titre"/>
    </div>

    <div>
        <label>Metier
            <input type="radio" name="metier" value="Metier"/>
        </label><br>
        <label>Startup
            <input type="radio" name="startup" value="Startup"/>
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
<h2>Interview</h2>
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
<h2>Colaborteur</h2>
<form action="/index.php?action=addColaborateur" method="post">
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


<H1>MODIF</H1>
<label for="pet-select">Choose a pet:</label>

<select name="pets" id="pet-select">
    <option value="">--Please choose an option--</option>

</select>
</body>