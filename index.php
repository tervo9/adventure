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
<body background="img/Background.jpg">
<form action="index.php">
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
<body background="img/Background.jpg">
<h2>Hej <? echo $_GET['player_name'] ?></h2>
<p>Du vaknar i ett krog efter en lång natt på fest. Du bestämer dig att gå hem.</p>
<img src="img/Pub.jpg">
<form action="index.php">
	<label>Hur tänker du komma hem?</label><br>
	<input type="radio" name="page" value="2" id="Taxi">
	<label for="Taxi">Beställer taxi</label><br>
	<input type="radio" name="page" value="3" id="Walk">
	<label for="Walk">Jag går</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 2):
?>
<body background="img/Background.jpg">
<h2>Inne i taxin</h2>
<p>Du har beställt din taxi och säger adressen som du ska till. Ni kommer fram och nu är det tid att betala.</p>
<img src="img/taxi.jpg">
<form action="index.php">
	<label>Vad gör du?</label><br>
	<input type="radio" name="page" value="4" id="pay">
	<label for="pay">Betala</label><br>
	<input type="radio" name="page" value="5" id="lie">
	<label for="lie">Ljug</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 3):
?>
<body background="img/Background.jpg">
<h2>Gatan</h2>
<p>Du går på gatan och blir på körd. Game Over.</p>
<img src="img/cat.jpg">
<form action="index.php">
	<label>Börja om</label><br>
	<input type="radio" name="page" value="1" id="Start">
	<label for="Start">Start</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 4):
?>
<body background="img/Background.jpg">
<h2>Hemma</h2>
<p>Du har kommit hem utan att dö. Grattis du har vunnit</p>
<img src="img/hus.jpg">
<form action="index.php">
	<label>Vill du börja om?</label><br>
	<input type="radio" name="page" value="1" id="Ja">
	<label for="Ja">Ja</label><br>
	<input type="radio" name="page" value="1" id="Nej">
	<label for="Nej">Nej</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 5):
?>
<body background="img/Background.jpg">
<h2>Inne i taxin</h2>
<p>Du säger till chaffören att du inte har plånboken. Han ser arg ut och tar sitt vapen. Du blir skjuten. Game over</p>
<img src="img/gun.jpg">
<form action="index.php">
	<label>Vill du börja om?</label><br>
	<input type="radio" name="page" value="1" id="Ja">
	<label for="Ja">Ja</label><br>
	<input type="radio" name="page" value="1" id="Nej">
	<label for="Nej">Nej</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Här tar elseif -satserna slut. Eftersom vi inte använder tecknen {} för att
 *	visa php var våra kodblock börjar och slutar behövs ett endif
 */
endif
?>