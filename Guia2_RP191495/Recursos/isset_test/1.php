
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
 
<body>
<?php
    if (isset($_POST['Submit'])) {
        echo 'se envio el formulario';
    }
?>
<form id="form1" name="form1" method="post" action="1.php">
    <input type="text" name="texto" id="texto" />
    <input name="Submit" type="submit" value="Submit" />
</form>

</body>

</html>