<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#\ Inicializar una nueva sesion de cURL;  ch = curl_init();
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la peticion y no mostrarlo
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
/* Ejecutamos la peticion y 
guardamos el resultado en una variable */

$result = curl_exec($ch);
// Decodificar el resultado JSON en un array asociativo
$data = json_decode($result, true);

?>

<Head>
    <meta charset="UTF-8" />
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
</Head>

<body>
    
    <main>
        
        <section>
            <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de  <?= $data['title']; ?>" style="border-radius: 20px;">
        </section>
        
        <hgroup class="text-center">
            <h3> <?= $data['title']; ?> Se estrena en <?= $data['days_until']; ?> dias</h3>
            <p>Fecha de estreno: <?= $data['release_date']; ?></p>
            <p>La siguiente es: <?= $data['following_production']['title']; ?></p>
        </hgroup>
    </main>
</body>
    

<style>
    :root {
        color-scheme: light dark;
        
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        
    }
</style>