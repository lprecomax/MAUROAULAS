 <?php
    $raio = $_POST['raio'];
    $areapizza = ( pi() * ($raio * $raio ));
    echo "<h1>Olá, $areapizza!</h1>";
 ?> 