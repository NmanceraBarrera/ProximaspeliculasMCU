<!------------- CodigoPHP ---------------->
<?php
    $name = "Miguel"; 
    $isDev = true; 
    $age = 50;
    $output = "Hola $name con una edad de $age";
    $output1 = "Hola $name";
    $output1 .=  "con una edad de $age";
?>
<!------------- FIN CodigoPHP ---------------->

<!------------- CodigoHTML ---------------->
    <h1>
    <?= $output ?>
    <?= $output1 ?>
    </h1>

<!------------- FIN CodigoHTML ---------------->

<!------------- CodigoCSS ---------------->
<style>
    :root {
        color-scheme: dark;
    }
    
    body {
        display: grid;
        place-content: center;
    }
    </style>
<!------------- FIN CodigoCSS ---------------->
