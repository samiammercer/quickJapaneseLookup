<?php
	$response = file_get_contents("http://jisho.org/api/v1/search/words?keyword=" . $_POST['japaneseInput']);
	echo $response;
