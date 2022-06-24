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
    
<h1 class="title_tar">Tarefa 4</h1>
<h2>Calcular quanto ganha por hora</h2>
<div class="form_tarefa_4">
<form method="post" action="./php/function.php">
        <div class="row_camp_form">
            <label for="fname" class="form_style_label">Quanto ganha de salario?</label>
            <input type="text" name="salario" id="salario" class="form_style_input">
        </div>
        <div class="row_camp_form">
            <label for="fname" class="form_style_label">Quantas horas trabalha por mês?</label>
            <input type="text" name="horas" id="horas" class="form_style_input">
        </div>
    
        <div class="row_camp_form">
            <input class="form_style_button" type="submit" name="submit_dados_salario" value="Enviar" onclick="submit_tar_4()">
        </div>
    </form>
</div>
<script>

    function submit_tar_4(){
        
    }
</script>
</body>
</html>