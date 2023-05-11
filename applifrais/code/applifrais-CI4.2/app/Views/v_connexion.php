﻿<?= $this->extend('l_connexion') ?>

<?= $this->section('body') ?>
	<div id="contenu">
		<h2>Identification utilisateur</h2>

		<?php if (isset($erreur))	echo '<div class ="erreur"><ul><li>'.$erreur.'</li></ul></div>'; ?>

		<form method="post" action="<?= site_url().'/anonyme/seConnecter' ?>">
			<p>
				<label for="login">Login*</label>
				<input id="login" type="text" name="login"  size="30" maxlength="45"/>
			</p>
			<p>
				<label for="nom">Mot de passe*</label>
				<input id="mdp"  type="password"  name="mdp" size="30" maxlength="45"/>
			</p>
			<p>
				<input type="submit" value="Valider" name="valider"/>
				<input type="reset" value="Annuler" name="annuler"/> 
			</p>
		</form>

	</div>
<?= $this->endSection() ?>