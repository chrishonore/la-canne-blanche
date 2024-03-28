<div class="login">
    <h1>Le dashboard de l'admin</h1>
echo "Veillez enregistreer les series que vous voullez repertorier dans le site."
    <form name="addSeries" method="post" action="">
        <p>
            <label for="title">Title de la serie :</label>
            <input type="text" name="title" id="title" placeholder="Champ obligatoire" required autofocus>
        </p>
        <p>
            <label for="description">Description :</label>
            <input type="text" name="description" id="description" placeholder="Champ obligatoire" required autofocus>
        </p>
        <p>
            <label for="miniature">Une miniature de la serie :</label>
            <input type="image" name="miniature" id="miniature">
        </p>
        <p>
            <label for="link">Inserez le lien du trailer :</label>
            <input type="url" name="link" id="link" placeholder="Champ obligatoire" required autofocus>
        </p>
        <p>
            <label for="reference">Ajoutez la reference du site web ou on peut le trouver :</label>
            <input type="url" name="link" id="link" placeholder="Champ obligatoire" required autofocus>
        </p>
        <p>
        <button name="addReference">Ajoutez une autre reference</button>
        </p>
        <p>
            <label for="price">Price en euros :</label>
            <input type="text" name="price" id="price">
        </p>
        <p>
        <input type="submit" name="register" id="register" value="Enregistrez">
        <input type="reset" name="Annuler" id="Annuler" value="Annuler">
        </p>
    </form>
</div>