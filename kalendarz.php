<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <div class="bb">
            <img src="logo1.png" alt="lipiec">
        </div>
        <div class="bb2">
            <h1>TERMINARZ</h1>
            <p>najbliższe zadania:

            <?php
            // $conn = mysqli_connect("localhost", "root", "", "terminarz");  <inny sposób połączenia krutszy
        $server = 'localhost';
        $uzytkownik='root';
        $passworld='';
        $dbname='terminarz';

        $db = mysqli_connect($server, $uzytkownik, $passworld, $dbname);

        $q = 'SELECT DISTINCT wpis FROM zadania WHERE dataZadania BETWEEN "2020-07-01" and "2020-07-07" AND wpis <> "";';
        $r = mysqli_query($db, $q);

        $zadania ="";
        while($row = mysqli_fetch_array($r)){
            $zadania .= $row["wpis"] . "; ";
        }

        echo $zadania;
        
        ?>
            </p>
        </div> 
    </header>
    <main>
    
    <?php

        $q = 'SELECT dataZadania, wpis FROM zadania WHERE miesiac="lipiec";';
        $r = mysqli_query($db, $q);

        while($row = mysqli_fetch_array($r)){
            
            echo '<section class="bg">
                <h6>'.$row["dataZadania"].'</h6>
                <p>'.$row["wpis"].'</p>
            </section>';
        
        }
        mysqli_close($db);

        ?>
    
    </main>
    
    <footer>
        <div class="st">
            <a href="sierpien.html">Terminarz na sierpień</a>
            <p>Stronę wykonał: ba ba ba baaaa ba ba ba ba baaaaa ba bababababa</p>
        </div>
    </footer>
    
</body>

</html>


    <!--
    2 SELECT dataZadania, wpis FROM zadania WHERE miesiac="lipiec"; 
    -->
