<?php
include('header.php');
?>

<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
    <h2>Dodaj nowego użytkownika</h2>
		<form action="dodaj_uzytkownika.proc.php" method="POST" class="form-horizontal">
			<fieldset>
				<label for="login">Nazwa użytkownika:</label>
				<input type="text" name="login" id="login" class="form-control" placeholder="Nazwa użytkownika" required="required" />

        <label for="imie">Imię:</label>
				<input type="text" name="imie" id="imie" class="form-control" placeholder="Imię" required="required" />

        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko" id="nazwisko" class="form-control" placeholder="Nazwisko" required="required" />

        <label for="haslo">Hasło:</label>
        <input type="password" name="haslo" id="haslo" class="form-control" required="required" />

        <label for="haslo2">Hasło (ponownie):</label>
        <input type="password" name="haslo2" id="haslo2" class="form-control" required="required" />
        <br/>
        <label for="rola">Rola:</label><br/>
        <select name="rola">
          <?php foreach($role as $rola): ?>
            <option value="<?= $rola['id_uprawnienia']; ?>" selected="selected" class="form-control" ><?= $rola['rola']; ?></option>
          <?php endforeach; ?>
        </select><br/><br/>

        <label for="tresc">Komentarz (opcjonalnie)</label>
				<textarea name="tresc" id="tresc" class="form-control" placeholder="Dodaj komentarz" rows="8"></textarea>

				<input type="submit" value="Dodaj" class="btn btn-primary" />
			</fieldset>
		</form>
	</div>
</div>

<?php
include('footer.php');
?>
