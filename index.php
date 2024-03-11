<?php

/*
 * Author: Flávio Pavim
 * Code of my WebSite ;)
 * https://flaviopavim.com.br
 */

session_name('session_base');
session_start();

//change language
if (!empty($_GET['lng'])) {
    $_SESSION['lng']=$_GET['lng'];
    header('Location: ./');
    exit;
}

if (empty($_SESSION['lng'])) {

    try {
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = "http://ip-api.com/json/" . $ip;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept-Language: en-US,en;q=0.9',
            'Accept-Encoding: gzip, deflate, br',
            'Connection: keep-alive',
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        $array = json_decode($response, true);
        
        if ($array['country']=='Brazil') {
            $_SESSION['lng']='pt-br';
        }
        
    } catch (e) {}
}

if (empty($_SESSION['lng'])) {
    $_SESSION['lng']='eng';
}

//em klingon
/*
 * Início: bortaS
 * Habilidades: chu'wI'
 * Sobre: De
 * Trabalhos: QIch
 * Vídeos: vIDyo
 * Contato: ghItlh
 */

function translate($phrase) {
    //portuguese
    if ($_SESSION['lng']=='pt-br') {
    
        $lang=array(

            //nav
            'Flávio Pavim'=>'Flávio Pavim',
            'Skills'=>'Habilidades',
            'About'=>'Sobre',
            'Works'=>'Trabalhos',
            'Done'=>'Feitos',
            'Videos'=>'Vídeos',
            'Contact'=>'Contato',
        );
        if (!empty($lang[$phrase])) {
            return $lang[$phrase];
        }
        return $phrase;

    } else if ($_SESSION['lng']=='eng') {
        //english
        return $phrase;
    } else {
        //klingon
        $lang=array(
            //nav
            'Flávio Pavim'=>'Flávio Pavim',
            'Skills'=>'chu\'wI\'',
            'About'=>'De',
            'Works'=>'QIch',
            'Done'=>'QIch',
            'Videos'=>'vIDyo',
            'Contact'=>'ghItlh',
        );
        if (!empty($lang[$phrase])) {
            return $lang[$phrase];
        }
        return $phrase;
//        return strrev($phrase);
    }
}

if (!empty($_POST['form-contact'])) {
//    if ($_SESSION['form-contact']==$_POST['form-contact']) {

    //message
    $to = 'contato@flaviopavim.com.br';
    $assunto = "Envio de contato no site Flávio Pavim";
    $mensagem = "Nome: " . $_POST["name"] . "\n";
    $mensagem .= "Contato: " . $_POST["contact"] . "\n\n";
    $mensagem .= $_POST["message"];

    //additional information
    $ip = $_SERVER["REMOTE_ADDR"];
    $dateTime = date("Y-m-d H:i:s");
    $browser = $_SERVER["HTTP_USER_AGENT"];
    $mensagem .= "\n\nIP: $ip\nData e Hora: $dateTime\nNavegador: $browser";

//        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $headers = "From: " . $to;


    if (mail($to, $assunto, $mensagem, $headers)) {
        echo '<script>alert("Email enviado com sucesso!"); window.location.href = "./";</script>';
    } else {
        echo '<script>alert("Ocorreu um erro ao enviar o email."); window.location.href = "./";</script>';
    }
    exit;
}
?>
<!DOCTYPE html>
<!--

    Criado do zero com carinho por Flávio Pavim ♥

    Tecnologias utilizadas: HTML, CSS, Javascript e PHP

-->
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"           content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="title"              content="Flávio Pavim">
        <meta name="description"        content="Criação de aites, aplicativos, programas Windows, automação e muito mais em softwares!">
        <meta name="keywords"           content="desenvolvimento, criação, sites, aplicativos, automação, softwares">
        <meta name="author"             content="Flávio Pavim">
        <meta name="robots"             content="index,follow">
        <meta property="og:url"         content="<?php echo $actual_link; ?>" />
        <meta property="og:type"        content="website" />
        <meta property="og:title"       content="Flávio Pavim" />
        <meta property="og:description" content="Criação de sites, aplicativos, programas Windows, automação e muito mais em softwares!" />
        <meta property="og:image"       content="https://flaviopavim.com.br/img/cover-stars.png" />

        <title>Flávio Pavim</title>

        <link rel="icon" href="img/favicon.png" type="image/x-icon">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/color.css" rel="stylesheet" type="text/css"/>
        <link href="css/font.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/videos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <script src="js/map.js" type="text/javascript"></script>
        <canvas id="stars"></canvas>
        <script src="js/stars.js" type="text/javascript"></script>
        
        
        <?php if (date('m') == 12) { ?>
            <canvas id="snowCanvas"></canvas>
            <script src="js/snowfall.js" type="text/javascript"></script>
        <?php } else if ((date('H') >= 19 and date('H') <= 23) or (date('H') >= 0 and date('H') < 3)) { ?>
            
<!--            <canvas id="moon" width="200" height="200"></canvas>
            <script src="js/moon.js" type="text/javascript"></script>-->
        <?php } else if (date('H') >= 3 and date('H') <= 4) { ?>
            <canvas id="matrixCanvas"></canvas>
            <script src="js/matrix.js" type="text/javascript"></script>
        <?php } ?>
        <div id="language">
            <a href="?lng=pt-br"><img id="pt-br" src="img/flag/brasil.png" alt=""/></a>
            <a href="?lng=eng"><img id="usa" src="img/flag/usa.png" alt=""/></a>
        </div>
        <?php include 'inc/nav.php'; ?>
        <main>
            <?php
            include 'view/home.php';
            include 'view/skills.php';
            ?>
            <section id="works"></section>
            <?php
            include 'view/videos.php';
            include 'view/contact.php';
            ?>
        </main>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/adjust.js" type="text/javascript"></script>
    </body>
</html>