<a href="index.php">Retour page principale</a>

<h1>Ajouter votre recette</h1><br>


<form action="" method="post">
    <div class="form-group">
        <label for="titre">Titre de la recette</label>
        <input type="text" class="form-control" id="titre" name="titre" >
    </div>
    <div class="form-group">
        <label for="ingredient">Ingrédient </label>
        <input type="text" class="form-control" id="ingredient" name="ingredient" >
    </div>
    <div class="form-group">
        <label for="description">Décrivez votre recette</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="photo">Une photo de votre recette</label>
        <input type="text" id="photo" name="photo" class="form-control" placeholder="Un champ texte pour l'instant, je gèrerai les fichiers si j'ai le temps">
    </div>


    <button type="submit" class="btn btn-primary">Soumettre</button>
</form>