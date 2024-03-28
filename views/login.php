<?php
$isToggle = true;
if (isset($_GET['toggle'])) $isToggle = $_GET['toggle'] === 'true' ? true : false;
?>

<div class="login position-fixed top-0 end-0 bottom-0 start-0">
    <form method="post" action="?page=login">
        <fieldset class="mt-5 col-xl-4 col-lg-5 col-md-6 col-sm-9 col-9 m-auto">
            <legend><?= !$isToggle ? 'Connexion' : 'Inscription' ?></legend>

            <div class="<?= $isToggle ? 'd-block' : 'd-none' ?>">
                <div class="form-group m-auto mb-3">
                    <label for="firstName">Prénom</label>
                    <input class="form-control bg-transparent text-white py-3" type="text" name="firstName" id="firstName" placeholder="Champ obligatoire" required>
                </div>
                <div class="form-group m-auto mb-3">
                    <label for="lastName">Nom</label>
                    <input class="form-control bg-transparent text-white py-3" type="text" name="lastName" id="lastName" placeholder="Champ obligatoire" required>
                </div>
                <div class="form-group m-auto mb-3">
                    <label for="email">Adresse mail</label>
                    <input class="form-control bg-transparent text-white py-3" type="email" name="email" id="email" placeholder="Champ obligatoire" required>
                </div>
                <div class="form-group m-auto mb-3">
                    <label for="date">Date de naissance</label>
                    <input class="form-control bg-transparent text-white py-3" type="date" name="date" id="date" placeholder="Champ obligatoire" required>
                </div>
            </div>

            <div class="form-group m-auto mb-3">
                <label for="username">Nom d'utilisateur</label>
                <input class="form-control bg-transparent text-white py-3" type="text" name="username" id="username" placeholder="Champ obligatoire" required>
            </div>
            <div class="form-group m-auto mb-3">
                <label for="password">Mot de passe</label>
                <input class="form-control bg-transparent text-white py-3" type="password" name="password" id="password" placeholder="Champ obligatoire" required>
            </div>

            <p class="float-end mt-3 user-select-none" onclick="window.location.href='?page=login&toggle=<?= $isToggle ? 'false' : 'true' ?>'"><?= !$isToggle ? 'Pas de compte ?' : 'Déja inscrit ?' ?> </p>
            <input class="btn btn-outline-info mt-3" type="submit" value="Envoyé">
        </fieldset>
    </form>

    <section class="m-auto text-center mt-5">
        <?php
        if ($isToggle) include 'script/signUp.php';
        else include 'script/signIn.php'
        ?>
    </section>
</div>
