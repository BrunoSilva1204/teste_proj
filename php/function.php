<?php
function select_tarefa($tarefa){

}


function insert_dados(){

    require "config.php";

    $fname = $_POST["fname"];
    $femail = $_POST["femail"];
    $fcontacter_number = $_POST["fcontacter_number"];
    $fnewsletter = 0;
    $fprefix = $_POST["countryCode"];
    $date = date("Y-m-d") ;
    $time = date("H:i:s");

    if(isset($_POST['fnewsletter']) && $_POST['fnewsletter']==1){
        $fnewsletter = 1;
    }else{
        $fnewsletter = 0;  
    }

    $sql = 'INSERT INTO improve_test_1.Tarefa_1 (name, email, prefix, phoneNumber, newsletter, date, time) 
    VALUES ("'.$fname.'","'.$femail.'","'.$fprefix.'","'.$fcontacter_number.'","'.$fnewsletter.'","'.$date.'","'.$time.'")';

    if($fname != null && $femail !=null && $fcontacter_number != null && $fprefix != null){
        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            header('Location: ../index.php');
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }

          $con->close();
    }
}

function list_dados(){

    require "config.php";

    $sql = 'SELECT * FROM improve_test_1.tarefa_2';
    
    if ($con->query($sql) == TRUE) {
        $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo '
            <br>
            <div class="containner">
            <div class="row_1">
                <div class="icon_1">
                    <img src="./img/icon_1.png" alt="icon_1">
                </div>
                <div class="title">
                    <p>'.$row['module_name'].'</p>
                </div>
                <div class="icon_2"></div>
                    <img class="icon_2_img" src="./img/icon_2.png" alt="icon_2">
            </div>
            <div class="row_2">
                <div class="date_icon">
                    <img src="./img/icon_3.png" alt="icon_3">
                </div>
                <div class="date_text">
                    <p>'.$row['date'].'</p>
                </div>
                <div class="line">
                    <p>|</p>
                </div>
                <div class="localization_icon">
                    <img src="./img/icon_4.png" alt="icon_4">
                </div>
                <div class="localization_text">
                    <p>'.$row['location'].'</p>
                </div>
            </div>
            <div class="row_3">
              <div class="content_text">
                  <p>'.$row['content'].'</p>
              </div>  
            </div>
            <hr class="hr_style">
            <div class="row_4">
                <div class="icon_5">
                        <img src="./img/icon_5.png" alt="icon_5">
                </div>
                <div class="speaker">
                    <p>Orador: <em class="em_style">'.$row['speaker'].'</em> '.$row['speaker_qual'].'</p>
                </div>
            </div>
        </div>';
        }
    }
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

    

    $con->close();
}

function download_exel(){
   
    require "config.php"; 

    $output = '<table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PREFIX</th>
                    <th>PHONENUMBER</th>
                    <th>NEWSLETTER</th>
                    <th>DATE</th>
                    <th>TIME</th>
                </tr>';
    
    // Get records from the database 
    $query = $con->query("SELECT * FROM improve_test_1.tarefa_3 ORDER BY id ASC"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        $i=0; 
        while($row = $query->fetch_assoc()){
            $output .= '<tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>'.$row["prefix"].'</td>
                            <td>'.$row["phoneNumber"].'</td>
                            <td>'.$row["newsletter"].'</td>
                            <td>'.$row["date"].'</td>
                            <td>'.$row["time"].'</td>
                        </tr>';
            $i++; 
        } 
    }else{ 
        $output .= '<tr><td>Nada a mostrar</td></tr>'; 

    }

    $output .= '</table>';
    
    // Headers for download 
    header("Contert-Type: application/xls");
    header("Content-Disposition: attachment; filename=exel.xls");
    
    // Render excel data 
    echo $output; 
    
}

function valor_hora(){
    
    $salario = $_POST['salario'];
    $horas = $_POST['horas'];

    if($salario < 0 || $salario == 0){
       $return = "O valor que inseriu para salário não é aceite tente novamente "; 
      
    }else if($salario > 0 && $horas >0 && $horas != 0){
        $valor_por_hora = $salario / $horas;
        $return = $valor_por_hora;
        
    }else{
        $return = "O valor que inseriu nas horas está errado tente novamente ";
        ;
    }
    
}

if(isset($_POST['submit'])){
    insert_dados();
}

if(isset($_POST['download_exel'])){
    download_exel();
}

if(isset($_POST['submit_dados_salario'])){
    valor_hora();
}

?>