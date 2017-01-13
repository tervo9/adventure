<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<h1>Äventyret</h1>

<?php
/** Kolla om query string parametern (GET parametern) är (==) tom (NULL)
 *	I fall att den är tom visas ett formulär som ber besökaren fylla i sitt namn
 */
if ($_GET['player_name'] == NULL):
?>
<form action="adventure_mall.php">
	<label>Vad heter du?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>
<?php
/** Annars om GET parametern "page" är lika med 1
 *	Visas den första 'sidan' med beskrivning av omgivningen och 
 *	ett formulär för att komma vidare
 */
elseif ($_GET['page'] == 1):
?>
<h2>Hej <? echo $_GET['player_name'] ?></h2>
<p>Du står i en skogsdunge. Till väster ser du en liten stuga med en rykande skorsten och österfrån rinner en liten flod. Norrut ser du bara träd.</p>
<form action="adventure_mall.php">
	<label>Åt vilket håll går du?</label><br>
	<input type="radio" name="page" value="2" id="west">
	<label for="west">Väster</label><br>
	<input type="radio" name="page" value="3" id="north">
	<label for="north">Norr</label><br>
	<input type="radio" name="page" value="4" id="east">
	<label for="east">Öster</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 2):
?>
<h2>Stugan</h2>
<p>Det ser inte ut som att någon är hemma.</p>
<img src="img/hut.jpg">
<form action="adventure_mall.php">
	<label>Åt vilket håll går du?</label><br>
	<input type="radio" name="page" value="5" id="west">
	<label for="west">Väster</label><br>
	<input type="radio" name="page" value="6" id="north">
	<label for="north">Norr</label><br>
	<input type="radio" name="page" value="7" id="east">
	<label for="east">Öster</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Här tar elseif -satserna slut. Eftersom vi inte använder tecknen {} för att
 *	visa php var våra kodblock börjar och slutar behövs ett endif
 */
endif
?>