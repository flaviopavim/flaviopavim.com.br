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
            <!--<br>-->
            <br>
            Comecei fazendo sites de minhas bandas de rock, era expert no finado Flash
            <br>
            <!--<br>-->
            Fiz site de baladas que era bem conhecido em minha região e depois disso fui trabalhar pra empresas pra aprimorar meus conhecimentos
            <!--<br>-->
            <br>
            Trabalhei alguns anos fazendo sites e ecommerces pra empresas.
            <!--<br>-->
            <br>
            Depois do meu primeiro Arduino aprendi muito mais sobre outras linguagens, então comecei a fazer apps por conta, e hoje posso desenvolver de tudo em sites e apps
            <br>
            <br>
            Atualmente trabalho com desenvolvimento de sites, aplicativos, automação residencial, automação de processos e softwares pra máquinas com Arduino ou Raspberry
            <br>
            <br>
            Atendo empresas diversas, tenho parceiros programadores e experts no WhiteHats, sou freelancer na Sofonias, e estou sempre disponível à uma boa proposta ;)
            <br>
            <br>
            
            
            Whatsapp: +55 18 99662-6124
            <br>
            Cidade: Três Lagoas - Mato Grosso do Sul - Brasil
            <br>
            Email: contato@flaviopavim.com.br
            <br>
            YouTube: https://youtube.com/flaviopavim (um pouco sobre quem sou)
            <br>
            GitHub: https://github.com/flaviopavim
            <br>
            LinkedIn: https://www.linkedin.com/in/kicko
            <br>
            <br>

            Trabalhos feitos:
            <br>
            https://whitehats.com.br
            <br>
            https://naoradoclick.com.br
            <br>
            https://freitasadvocaciabr.com
            <br>
            https://alexiasystem.com.br
            <br>
            https://protetorastl.com.br
            <br>
            <br>
            
            Aplicativos na PlayStore:
            <br>
            https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth
            <br>
            https://play.google.com/store/apps/details?id=br.com.whitehats.crypt
            <br>
            <br>
            
            Experiências profissionais:
            <br>
            <br>
            
            www.vmgguindastes.com.br – agosto de 2023 à janeiro de 2024
            <br>
            Fiz aplicativo Android e iOs do sistema VMG pra controle operacional da empresa.
            <br>
<!--            Configuração de servidor próprio pra API do aplicativo
            <br>-->
            Tecnologias utilizadas: PHP, SQL, Dart (Flutter)
            <br>
            <br>
            
            www.sofonias.com.br – 2015 à 2018, e início de 2023 à novembro de 2023
            <br>
            Trabalhei como freelancer Full Stack, onde desenvolvi principalmente backend de sites e lojas
            <br>
            virtuais de diversos tipos. Adquiri muito conhecimento no recorte de imagens com Photoshop,
            <br>
            muitas vezes layouts já chegavam pronto e eu era responsável por transformar em site.
            <br>
            Tecnologias utilizadas: HTML, CSS, Javascript, jQuery, PHP, MySQL, API Rest, Integrações com
            <br>
            Wirecard e PayPal
            <br>
            <br>
            
            www.uniasselvi.com.br - De abril de 2022 à abril de 2023
            <br>
            Atuei na sustentação e manutenção do site e backend do aplicativo do sistema Uniasselvi.
            <br>
            Trabalhei junto à uma equipe dedicada, com 25 desenvolvedores
            <br>
            Tecnologias: HTML, CSS, Bootstrap, Javascript, jQuery, PHP, MySql, Angular, Symphony, PL-SQL,
            <br>
            SQL, Oracle
            <br>
            <br>
            
            www.runclub.com.br – Janeiro do 2017 até março de 2019
            <br>
            Ex CTO, fiz site e aplicativos Android e iOs (atualmente apps offline)
            <br>
            Liderei uma equipe de 3 desenvolvedores, sendo eu na programação geral do app e site, um no
            <br>
            Frontend de site e outro no Frontend de app
            <br>
            O sistema tinha split de pagamento integrado com Wirecard, pra pagamento de produtos
            <br>
            diversos e assinaturas com recorrência mensal
            <br>
            Tecnologias: Ionic, Cordova, HTML, CSS, Bootstrap, Javascript, jQuery, PHP, MySQL, Java
            <br>
            Android, Swift (iOs) e integração com API do Wirecard
            <br>
            <br>
            
            www.indbras.com.br – nos sábados desde julho de 2015 até dezembro de 2016
            <br>
            Trabalhei com desenvolvimento de catálogo de vendas, feito com API integrado em sistema
            <br>
            feito em C#, fui responsável por fazer o catálogo e ajudar na criação da comunicação SOAP.
            <br>
            Também foi onde comecei a ter uma base de C# fazendo algumas atividades do ERP deles.
            <br>
            Tecnologias: HTML, CSS, Javascript, PHP, MySQL, SOAP e um pouco de C# desktop
            <br>
            <br>
            
            www.grupouds.com.br - 2015 à 2016
            <br>
            Trabalhei fazendo sites e lojas virtuais
            <br>
            Foi onde tive a maior base de aprendizado em fazer todos os tipos de sites e ecommerces,
            <br>
            integrando com APIs de pagamento e fazendo a logística completa de lojas virtuais de diversos
            <br>
            tipos. Fiz integrações com PagSeguro, Ebanx, Cielo e PayPal
            <br>
            Tecnologias: HTML, CSS, Javascript, jQuery, Bootstrap, PHP, MySQL, API Rest
            
            
        <?php } else if ($_SESSION['lng'] == 'eng') { ?>
            Programmer since the age of 14, I am now <?php
            $diff = abs(strtotime(date('Y-m-d')) - strtotime('1988-03-28'));
            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            echo $years;
            ?> years old, and have been coding for <?php echo $years - 14; ?> years.
            <br>
            <!--<br>-->
            I started by creating websites for my rock bands, mastering the now-defunct Flash.
            <br>
            <!--<br>-->
            I developed a well-known nightlife website in my region and then worked for companies to enhance my skills.
            <br>
            <!--<br>-->
            I spent several years creating websites and e-commerce platforms for companies.
            <br>
            <!--<br>-->
            After my first experience with Arduino, I delved into other programming languages. Subsequently, I began developing apps independently, and today I can work on anything from websites to apps.
            <br>
            <br>
            Currently, I work on website development, applications, home automation, process automation, and software for machines using Arduino or Raspberry Pi.
            <br>
            <br>
            I serve various companies, collaborate with programmer partners, and specialize in WhiteHat security. I am a freelancer at Sofonias and am always open to exciting opportunities ;)
            <br>
            <br>
                    Completed Projects:
        <br>
        https://whitehats.com.br
        <br>
        https://naoradoclick.com.br
        <br>
        https://freitasadvocaciabr.com
        <br>
        https://alexiasystem.com.br
        <br>
        https://protetorastl.com.br
        <br>
        <br>
        
        Applications on PlayStore:
        <br>
        https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth
        <br>
        https://play.google.com/store/apps/details?id=br.com.whitehats.crypt
        <br>
        <br>
        
        Professional Experiences:
        <br>
        <br>
        
        www.vmgguindastes.com.br – August 2023 to January 2024
        <br>
        Developed the Android and iOS application for the VMG system for operational control of the company.
        <br>
        
                Technologies used: PHP, SQL, Dart (Flutter)
        <br>
        <br>
        
        www.sofonias.com.br – 2015 to 2018, and early 2023 to November 2023
        <br>
        Worked as a Full Stack freelancer, mainly developing backend for various types of websites and online stores.
        <br>
        Acquired extensive knowledge in image editing with Photoshop; often received ready-made layouts and was responsible for turning them into websites.
        <br>
        Technologies used: HTML, CSS, Javascript, jQuery, PHP, MySQL, REST API, Integrations with Wirecard and PayPal
        <br>
        <br>
        
        www.uniasselvi.com.br - From April 2022 to April 2023
        <br>
        Worked on the maintenance and support of the Uniasselvi system website and backend application.
        <br>
        Collaborated with a dedicated team of 25 developers.
        <br>
        Technologies: HTML, CSS, Bootstrap, Javascript, jQuery, PHP, MySql, Angular, Symphony, PL-SQL,
        <br>
        SQL, Oracle
        <br>
        <br>
        
        www.runclub.com.br – January 2017 to March 2019
        <br>
        Former CTO, developed website and Android and iOS applications (currently offline apps).
        <br>
        Led a team of 3 developers, with myself handling overall app and website programming, one on website frontend, and another on app frontend.
        <br>
        The system had integrated split payment with Wirecard for various product payments and monthly recurring subscriptions.
        <br>
        Technologies: Ionic, Cordova, HTML, CSS, Bootstrap, Javascript, jQuery, PHP, MySQL, Java
        Android, Swift (iOS), and Wirecard API integration
        <br>
        <br>
        
        www.indbras.com.br – Saturdays from July 2015 to December 2016
        <br>
        Worked on developing a sales catalog integrated with a system built in C#, responsible for creating the catalog and assisting in SOAP communication creation.
        <br>
        Also gained foundational knowledge of C# through some activities in their ERP.
        <br>
        Technologies: HTML, CSS, Javascript, PHP, MySQL, SOAP, and some C# desktop
        <br>
        <br>
        
        www.grupouds.com.br - 2015 to 2016
        <br>
        Worked on creating websites and online stores.
        <br>
        Acquired extensive knowledge in creating various types of websites and e-commerce platforms, integrating with payment APIs and handling the complete logistics of online stores.
        <br>
        Integrated with PagSeguro, Ebanx, Cielo, and PayPal.
        <br>
        Technologies: HTML, CSS, Javascript, jQuery, Bootstrap, PHP, MySQL, REST API


            
        <?php } else { ?>
            01010111 01101000 01100001 01110100 00100000 01100001 01110010 01100101 00100000 01111001 01101111 01110101 00100000 01101100 01101111 01101111 01101011 01101001 01101110 01100111 00100000 01100110 01101111 01110010 00111111 00001010 01010100 01101000 01100001 01101110 01101011 00100000 01111001 01101111 01110101 00100000 01100110 01101111 01110010 00100000 01111001 01101111 01110101 01110010 00100000 01110110 01101001 01110011 01101001 01110100 00100001 
        <?php } ?>
            
            
            
            
            
            
            
            
            
            
            
<!--                <br>
                <div>Sou desenvolvedor à 17 anos, faço sites, aplicativos, programas de computador, automação e softwares pra máquinas</div>-->
<!--                <br>
                <br>
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
                <div id="os"></div>-->
            
            
            
            
            
            
            
    </div>
</section>







