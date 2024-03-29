<div class="login">
    <h1>Le dashboard de l'admin</h1>
    <p>Veuillez enregistrer les series que vous voulez repertorier dans le site.</p>
    <form name="addSeries" method="post" action="?page=dashboard" enctype="multipart/form-data">
           <div class="row">
            <label for="title">Title de la serie :</label>
            <input type="text" name="title" id="title" placeholder="Champ obligatoire" required autofocus>
           </div>
        <div class="row">
            <label for="description">Description :</label>
            <input type="text" name="description" id="description" placeholder="Champ obligatoire" required autofocus>
        </div>
        <div class="row">
            <label for="image">Choisissez une image :</label>
            <input type="file" id="image" name="image" alt="">
        </div>
        <div class="row">
            <label for="Lien_trailer">Inserez le lien du trailer :</label>
            <input type="url" name="Lien_trailer" id="Lien_trailer" >
        </div>
        <div class="row">
            <label for="reference"> NETFLIX :</label>
            <label for="link"></label><input type="checkbox" name="netflix" id="link" >
        </div>
        <div class="row">
            <label for="reference"> AppelTv :</label>
            <input type="checkbox" name="AppelTv" id="link" >
        </div>
        <div class="row">
            <label for="reference"> PRIME :</label>
            <input type="checkbox" name="PRIME" id="link" >
        </div>
        <div class="row">
            <label for="reference"> DisneyPlus :</label>
            <input type="checkbox" name="DisneyPlus" id="link" >
        </div>

        <div class="row">
        <input type="submit" name="register" id="register" value="Enregistrez">
        <input type="reset" name="Annuler" id="Annuler" value="Annuler">
        </div>
    </form>
</div>
<?php
include '../script/traitement.php';
?>