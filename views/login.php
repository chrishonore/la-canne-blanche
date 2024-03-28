<div class="login">
    <h1>Bien venus sur le site comparatif des films!</h1>
    <h2>Se connecter</h2>
    <p>Si vous avez un compte d'utilisateur, veillez vous connecter!</p>
    <form name="seConnecterForm" id="seConnecterForm" method="post" action="?page=login">
        <fieldset>
        <legend>Coordonnées</legend>
        <p>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" placeholder="Champ obligatoire" required></p>
        <p>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password" placeholder="Champ obligatoire" required></p>
        </fieldset>
        <p><input type="submit" name="Connection" id="Connection" value="Connection">
        <input type="reset" name="Annuler" id="Annuler" value="Annuler"></p>
    </form>
<h2>S'enregistrer</h2>
    <p>Si vous n'avez pas encore un compte d'utiisateur, veillez en creer un:</p>
    <form name="newUserForm" id="newUserForm" method="post" action="?page=login">
        <fieldset>
        <legend>Coordonnées</legend>
    <p>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" autocomplete="family-name" id="nom" placeholder="Champ obligatoire" required autofocus>
    </p>
    <p>
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" placeholder="Champ obligatoire" required autofocus></p>
            <p>
                <label for="dateNaissance">Date de naissance :</label>
                <input type="date" name="dateNaissance" id="dateNaissance" required>
            </p>
            <p>
            <label for="username">Nom d'utilisateur : (Veillez choisir un nom d'utilisateur)</label>
            <input type="text" name="username" id="username" placeholder="Champ obligatoire" required autofocus></p>
        <p>
        <label for="email">E-Mail : (exemple : jean.dupond@mail.com)</label>
        <input type="email" name="email" id="email" placeholder="Champ obligatoire" required></p>
    <p>
        <label for="password">Mot de passe: (Choisissez un mot de passe de minimum 5 caracteres dont au moins un nombre, une lettre majuscule et une lettre minuscule)</label>
        <input type="password" name="password" id="password" placeholder="Champ obligatoire" required></p>
    <p>
        <label for="passwordConf">Confirmez le Mot de passe:</label>
        <input type="password" name="passwordConf" id="passwordConf" placeholder="Champ obligatoire" required></p>
    </fieldset>
    <p><input type="submit" name="Creer" id="Creer" value="Creez le compte">
    <input type="reset" name="Annuler" id="Annuler" value="Annuler"></p>
    </form>
</div>