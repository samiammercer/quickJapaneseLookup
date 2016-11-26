<!DOCTYPE html>
<html>
<head>
	<title>
		Quick Japanese Lookup
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/testsite/script.js"></script>
</head>
<body>
	<form method="POST" action="queryJisho.php">
		<input id="japaneseInput" type="text" name="japaneseInput">
		<input id="queryJisho" type="submit" name="queryJisho" value="submit">
	</form>
	<p id="japaneseOutput">
		Japanese Text will show here.
	</p>
</body>
</html>
