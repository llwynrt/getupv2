<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="/getup/assets/css/docs.css">
		<link rel="stylesheet" href="/getup/assets/css/codemirror.css">
		
		<script src="/getup/assets/js/codemirror.js"></script>
		<script src="/getup/assets/js/matchbrackets.js"></script>
		<script src="/getup/assets/js/htmlmixed.js"></script>
		<script src="/getup/assets/js/xml.js"></script>
		<script src="/getup/assets/js/javascript.js"></script>
		<script src="/getup/assets/js/css.js"></script>
		<script src="/getup/assets/js/clike.js"></script>
		<script src="/getup/assets/js/php.js"></script>

	</head>
	<body>

<?php echo validation_errors(); ?>

<?php //echo form_open('pages/edit'); 
echo '<form action="/getup/index.php/pages/edit/'.$page.'" method="post" accept-charset="utf-8">';?>

<?php echo $filePath;?>

    <textarea name="code" id="code">
	<?php echo file_get_contents($filePath);?>
	</textarea>
	<br />
    <input type="submit" name="submit" value="Enregistrer" />

</form>

<script>
			var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
				lineNumbers: true,
				matchBrackets: true,
				mode: "application/x-httpd-php",
				indentUnit: 4,
				indentWithTabs: true
			 });
		</script>
<?php
	if ($save == true){
		echo "<script>alert('Fichier sauvegardé')</script>";
	}
		
?>
</body>
</html>