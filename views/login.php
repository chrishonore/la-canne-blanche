<?php
$isToggle = true;
if (isset($_GET['toggle'])) $isToggle = $_GET['toggle'] === 'true' ? true : false;
?>
<h1>Bien venus a la Canne Blanche !</h1>
<div class="login position-fixed top-0 end-0 bottom-0 start-0">
    <form method="post" action="?page=login">
        <fieldset class="mt-5 col-xl-4 col-lg-5 col-md-6 col-sm-9 col-9 m-auto">
            <legend class="text-center mb-5"><?= !$isToggle ? 'Connexion' : 'Inscription' ?></legend>

            <div class="<?= $isToggle ? 'd-block' : 'd-none' ?>">
                <div class="form-group m-auto mb-3">
                    <label class="ps-3 py-1" for="firstName">Prénom</label>
                    <input class="form-control bg-transparent text-white ps-3 py-3" type="text" name="firstName" id="firstName" placeholder="Champ obligatoire" required>
                </div>
                <div class="form-group m-auto mb-3">
                    <label class="ps-3 py-1" for="lastName">Nom</label>
                    <input class="form-control bg-transparent text-white ps-3 py-3" type="text" name="lastName" id="lastName" placeholder="Champ obligatoire" required>
                </div>
                <div class="form-group m-auto mb-3">
                    <label class="ps-3 py-1" for="email">Adresse mail</label>
                    <input class="form-control bg-transparent text-white ps-3 py-3" type="email" name="email" id="email" placeholder="Champ obligatoire" required>
                </div>
                <div class="form-group m-auto mb-3">
                    <label class="ps-3 py-1" for="birthday">Date de naissance</label>
                    <input class="form-control bg-transparent text-white ps-3 py-3" type="text" name="birthday" id="birthday" placeholder="Champ obligatoire" required>
                </div>
            </div>

            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="username">Nom d'utilisateur</label>
                <input class="form-control bg-transparent text-white ps-3 py-3" type="text" name="username" id="username" placeholder="Champ obligatoire" required>
            </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="password">Mot de passe</label>
                <input class="form-control bg-transparent text-white ps-3 py-3" type="password" name="password" id="password" placeholder="Champ obligatoire" required>
            </div>
            <div class="form-group m-auto mb-3">
                <label class="ps-3 py-1" for="passwordConf">Confirmez le mot de passe</label>
                <input class="form-control bg-transparent text-white ps-3 py-3" type="passwordConf" name="passwordConf" id="passwordConf" placeholder="Champ obligatoire" required>
            </div>

            <p class="float-end mt-3 user-select-none swap-sign" onclick="window.location.href='?page=login&toggle=<?= $isToggle ? 'false' : 'true' ?>'"><?= !$isToggle ? 'Pas de compte ?' : 'Déja inscrit ?' ?></p>
            <input class="btn btn-outline-info mt-3" type="submit" value='<?= !$isToggle ? "Se connecter" : "S‘inscrire" ?>'>
        </fieldset>
    </form>

    <section class="m-auto text-center mt-5">
        <?php
        if ($isToggle) include 'script/signUp.php';
        else include 'script/signIn.php'
        ?>
    </section>
</div>