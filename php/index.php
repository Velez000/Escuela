<?php
            $con = mysqli_connect('localhost','root','','db_escuela');
        
            if($con == false){
                echo "Error al conectar con la base de datos";
            }
        
            $query = mysqli_query($con, "SELECT * FROM test ORDER BY RAND() LIMIT 3");
        
            mysqli_data_seek($query, 0);
            while($restultado = mysqli_fetch_array($query)){
                echo "<br> <br>".$restultado['pregunta']."<br>"."<br>";
            //  echo "<input type='radio' name='option' >" ." Opcion 1: ".$restultado['incorrecta1']."<br>";
            //    echo "<input type='radio' name='option' >" ." Opcion 2: ".$restultado['incorrecta2']."<br>";
            //    echo "<input type='radio' name='option' >" ." Opcion 3: ".$restultado['incorrecta3']."<br>";
            //    echo "<input type='radio' value='1' name='option' >  " ." Opcion 4: ".$restultado['correcta']."<br>"."<br>";      
            //    $res['pregunta'] = $restultado['pregunta'];
            // }
            $arrayPhp = [$restultado['incorrecta1'], $restultado['incorrecta2'], $restultado['incorrecta3'], $restultado['correcta']];
            $i = shuffle($arrayPhp);
            $x = implode("<br>"."<input type='radio' name='name'> " , $arrayPhp );
            echo "<input type='radio' name='name'>" .$x . "<br>";
            
            }

?>