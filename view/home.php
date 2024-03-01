<style>
/*            body {
                margin: 0;
                background-color: #ccc;
                font-size: 14px;
                font-family: 'Lucida Console', 'Sans-serif';
                font-family: Arial, 'Sans-serif';
            }*/
            i {
                /*font-family: Arial, 'Sans-serif';*/
                font-size: 12px;
            }
            #container, #left, #right {
                display: table;
            }
            #container {
                width: 800px;
                margin: 0 auto;
                margin-top:30px;
                margin-bottom:30px;
                background-color: #fff;
            }
            #left, #right {
                /*                height: 400px;*/
                padding:15px;
                float: left;
            }
            #left {
                width: 170px;
                background-color: #39c;
                color: #fff;
            }
            #right {
                width: 570px;
                font-family: 'Lucida Console', 'Sans-serif';
            }
            #left img {
                display: block;
                width: 160px;
                height: 160px;
                margin:5px;
                border-radius: 100%;
            }
            .left-title {
                /*color: #39c;*/
                font-size: 16px;
                font-weight:700;
            }
            .title {
                display: table;
                color: #39c;
                font-size: 26px;
                font-weight:700;
                
                
                padding-right: 30px;
                padding-bottom: 5px;
                border-bottom: 2px #39c solid;
            }


            .skill {
                /*display: block;*/
                /*width: 275px;*/
                width: 182px;
                /*clear: both;*/
                margin-bottom: 5px;
                margin-right: 5px;
                display: table;
                float: left;
/*                height: 25px;
                line-height: 25px;*/
            }
            .skill-bar,
            .skill-bar-title,
            .skill-bar-progress {
                /*height: 16px;*/
                height: 25px;
                line-height: 28px;
            }
            .skill-progress {
                /*height: 16px;*/
            }
            .skill-bar{
                display: block;
                /*width: 275px;*/
                width: 182px;
                /*background-color: #39c;*/
                border: 1px #39c solid;
                float: left;
                position: relative;
                text-align: center;
                
                
                height: 27px;
                /*line-height: 27px;*/
                
            }

            .skill-bar-title {
                /*color: #fff;*/
                font-size: 18px;
            }
            .skill-bar-progress {
                position: absolute;
                top: 0;
                left: 0;
                background-color: rgba(51,153,204,0.5);
                display: block;
            }
        </style>


<section id="home">
    <div class="my-container page">
        
        
        <!--<div class="title">Biografia</div>-->
        
        <img id="me" src="img/flaviopavim.jpg">
        <?php if ($_SESSION['lng'] == 'pt-br') { ?>
            Programador desde os 14 anos, já estou com <?php
            $diff = abs(strtotime(date('Y-m-d')) - strtotime('1988-03-28'));
            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            echo $years;
            ?>, fazem <?php echo $years - 14; ?> anos que faço códigos
            <br>
            <br>
            Comecei fazendo sites de minhas bandas de rock, era expert no finado Flash
            <br>
            <br>
            Fiz site de baladas que era bem conhecido em minha região e depois disso fui trabalhar pra empresas pra aprimorar meus conhecimentos
            <br>
            <br>
            Trabalhei alguns anos fazendo sites e ecommerces pra empresas.
            <br>
            <br>
            Depois do meu primeiro Arduino aprendi muito mais sobre outras linguagens, então comecei a fazer apps por conta, e hoje posso desenvolver de tudo em sites e apps
            <br>
            <br>
            Atualmente trabalho com desenvolvimento de sites, aplicativos, automação residencial, automação de processos e softwares pra máquinas com Arduino ou Raspberry
            <br>
            <br>
            Atendo empresas diversas, tenho parceiros programadores e experts no WhiteHats, sou freelancer na Sofonias, e estou sempre disponível à uma boa proposta ;)
        <?php } else if ($_SESSION['lng'] == 'eng') { ?>
            Programmer since the age of 14, I am now <?php
            $diff = abs(strtotime(date('Y-m-d')) - strtotime('1988-03-28'));
            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            echo $years;
            ?> years old, and have been coding for <?php echo $years - 14; ?> years.
            <br>
            <br>
            I started by creating websites for my rock bands, mastering the now-defunct Flash.
            <br>
            <br>
            I developed a well-known nightlife website in my region and then worked for companies to enhance my skills.
            <br>
            <br>
            I spent several years creating websites and e-commerce platforms for companies.
            <br>
            <br>
            After my first experience with Arduino, I delved into other programming languages. Subsequently, I began developing apps independently, and today I can work on anything from websites to apps.
            <br>
            <br>
            Currently, I work on website development, applications, home automation, process automation, and software for machines using Arduino or Raspberry Pi.
            <br>
            <br>
            I serve various companies, collaborate with programmer partners, and specialize in WhiteHat security. I am a freelancer at Sofonias and am always open to exciting opportunities ;)
        <?php } else { ?>
            01010111 01101000 01100001 01110100 00100000 01100001 01110010 01100101 00100000 01111001 01101111 01110101 00100000 01101100 01101111 01101111 01101011 01101001 01101110 01100111 00100000 01100110 01101111 01110010 00111111 00001010 01010100 01101000 01100001 01101110 01101011 00100000 01111001 01101111 01110101 00100000 01100110 01101111 01110010 00100000 01111001 01101111 01110101 01110010 00100000 01110110 01101001 01110011 01101001 01110100 00100001 
        <?php } ?>
            
            
            
            
            
            
            
            
            
            
            
<!--                <br>
                <div>Sou desenvolvedor à 17 anos, faço sites, aplicativos, programas de computador, automação e softwares pra máquinas</div>-->
                <br>
                <!--<br>-->
                <br>

                
                <div class="title">Geral</div> 
                <br>
                <div id="general"></div>
                <div style="clear: both; height: 15px;"> 
                <br>
                <br>
                
                
                
                <div class="title">Habilidades</div> 
                <br>
                <div id="skills"></div>
                <div style="clear: both; height: 15px;"> 
                <br>
                <br>
                
                
                
                <div class="title">Frameworks</div> 
                <br>
                <div id="frameworks"></div>
                <div style="clear: both; height: 15px;"> 
                <br>
                <br>
                <div class="title">Outros</div> 
                <br>
                <div id="others"></div>
                <div style="clear: both; height: 15px;"> 
                <br>
                <br>
                <div class="title">Mais softwares</div> 
                <br>
                <div id="more"></div>
                <div style="clear: both; height: 15px;"> 
                <br>
                <br>

                <div class="title">Sistemas operacionais</div> 
                <br>
                <div id="os"></div>
            
            
            
            
            
            
            
    </div>
</section>







