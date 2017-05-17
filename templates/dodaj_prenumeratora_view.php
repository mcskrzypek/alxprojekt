<?php include "header.php";?>

<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
        <h2>Dodaj prenumeratora</h2>
		<form action="funkcje/dodaj_prenumeratora.proc.php" method="post" class="form-horizontal">
		
			<fieldset>
			
				<label for="imie">Imię</label>
				<input type="text" name="imie" id="imie" class="form-control" required="required" />
                
                <label for="nazwisko">Nazwisko</label>
				<input type="text" name="nazwisko" id="nazwisko" class="form-control" required="required" />
                
                <label for="pesel">Pesel</label>
				<input type="text" name="pesel" id="pesel" class="form-control" required="required" />
                
                <label for="miasto">Miasto</label>
				<input type="text" name="miasto" id="miasto" class="form-control" required="required" />
                
                <label for="ulica">Ulica</label>
				<input type="text" name="ulica" id="ulica" class="form-control" required="required" />
                
                <label for="nr_lokalu">Nr lokalu</label>
				<input type="text" name="nr_lokalu" id="nr_lokalu" class="form-control" required="required" />
                
                <label for="nr_mieszkania">Nr mieszkania</label>
				<input type="text" name="nr_mieszkania" id="nr_mieszkania" class="form-control" required="required" />
                
                <label for="kod_pocztowy">Kod pocztowy</label>
				<input type="text" name="kod_pocztowy" id="kod_pocztowy" class="form-control" required="required" />
                
                <label for="poczta">Poczta</label>
				<input type="text" name="poczta" id="poczta" class="form-control" required="required" />
                
                <label for="data_r_prenumeraty">Data rozpoczęcia prenumeraty (puste pole oznacza dzisiejszą datę)</label>
				<input type="text" name="data_r_prenumeraty" id="data_r_prenumeraty" class="form-control" required="required" />
                
                <label for="czas_prenumeraty">Okres prenumeraty</label>
                <select class="form-control" required="required">
                    <?php foreach($czas_prenumeraty as $key => $val): ?>
                    <option value="<?=$key;?>"><?= $val;?></option>
                    <?php endforeach; ?>
                </select> 
                
				
				<label for="notatki">Notatki</label>
				<textarea name="notatki" id="notatki" class="form-control" rows="20"></textarea>
				<br/>		
				<input type="submit" value="Zapisz" class="btn btn-primary" />
			</fieldset>
		
		</form>
	
	</div>
</div>

<?php include "footer.php";?>