<div class="login">
    <form name="addSeries" method="post" action="?page=dashboard">
        <fieldset class="mt-5 col-xl-4 col-lg-5 col-md-6 col-sm-9 col-9 m-auto">
            <legend class="text-center mb-5"><h1>Ajouter un film</h1></legend>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="title">Title de la serie :</label>
                <input class="form-control bg-transparent text-white ps-3 py-3" type="text" name="title" id="title" placeholder="Champ obligatoire" required autofocus>
           </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="description">Description :</label>
                <textarea class="form-control bg-transparent text-white ps-3 py-3" name="description" id="description" placeholder="Champ obligatoire"></textarea>
            </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="image">Inserez le lien vers une image :</label>
                <input class="form-control bg-transparent text-white ps-3 py-3" type="url" name="image" id="image" placeholder="Champ obligatoire">
            </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="Lien_trailer">Inserez le lien du trailer :</label>
                <input class="form-control bg-transparent text-white ps-3 py-3" type="url" name="Lien_trailer" id="Lien_trailer" placeholder="Champ obligatoire">
            </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="netflix"> NETFLIX</label>
                <input type="checkbox" name="netflix" id="netflix">
            </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="AppelTv"> APPLE TV</label>
                <input class="ps-3 py-3" type="checkbox" name="AppelTv" id="AppelTv">
            </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="prime"> PRIME</label>
                <input class="ps-3 py-3" type="checkbox" name="prime" id="prime">
            </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="DisneyPlus"> DISNEY+</label>
                <input class="ps-3 py-3" type="checkbox" name="DisneyPlus" id="DisneyPlus">
            </div>

            <input class="btn btn-outline-success me-3" type="submit" name="register" id="register" value="Ajouter">
            <input class="btn btn-outline-warning" type="reset" name="Annuler" id="Annuler" value="Annuler">
        </fieldset>
    </form>
</div>
<?php
include 'script/traitement.php';
?>