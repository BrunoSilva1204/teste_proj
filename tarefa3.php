<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php require "./php/function.php";
	  require "./php/menu.php";
?>
    
<h1 class="title_tar">Tarefa 3</h1>
<div class="form_tarefa_3">
    <form method="post" action="./php/function.php" id="form">
        <label class="label_tarefa_3" for="download_exel">Download excel:</label>
        <input type="submit" name="download_exel" value="Download Excel" class="form_style_button_v2">
    </form>
</div>

</body>
</html>