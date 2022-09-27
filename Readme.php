<?php




// This file passes the content of the Readme.md file in the same directory
// through the Markdown filter. You can adapt this sample code in any way
// you like.

// Install PSR-4-compatible class autoloader
spl_autoload_register(function($class){
	require str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});
// If using Composer, use this instead:
//require 'vendor/autoload.php';

// Get Markdown class
use Michelf\MarkdownExtra;



// Read file and pass content through the Markdown parser
$text = file_get_contents('Readme.md');
$html = MarkdownExtra::defaultTransform($text);

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TheBlackSide</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>		
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<style type="text/css">
	*{
		font-family: Poppins;
	}
</style>

	<body>
		<?php
			// Put HTML content in the document
			echo $html;
		?>
	</body>
</html>
