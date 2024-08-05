<section id="home">
    <div class="my-container page">


        <!--<div class="title">Biografia</div>-->

        <img id="me" src="img/flaviopavim.jpg">
        <br>
        <br>
        <p><?php if ($_SESSION['lng'] == 'pt-br') { ?>
            Programador desde os 14 anos, já estou com <?php
                $diff = abs(strtotime(date('Y-m-d')) - strtotime('1988-03-28'));
                $years = floor($diff / (365 * 60 * 60 * 24));
                $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                echo $years;
                ?>, tem <strong><?php echo $years - 14; ?> anos que faço códigos</strong></p>
            <!--<p>Comecei fazendo sites de minhas bandas de rock, era expert no finado Flash</p>-->
            <!--<p>Fiz site de baladas que era bem conhecido em minha região e depois disso fui trabalhar pra empresas pra aprimorar meus conhecimentos</p>-->
            <!--<p>Trabalho no geral fazendo sites e ecommerces pra empresas.</p>-->
            <br>
            <p>Atualmente trabalho com <strong class="blue">desenvolvimento de sites, aplicativos, automação residencial, automação de processos</strong> e softwares pra máquinas com <strong class="green">Arduino</strong> ou <strong class="red">Raspberry</strong></p>
            <br>
            <p>Atendo empresas diversas, tenho parceiros programadores e experts no <strong>WhiteHats</strong>, sou freelancer em algumas empresas, e estou sempre disponível à uma boa proposta 😉😎</p>
            <br>
            <br>
            <div style="clear: both;"></div>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Whatsapp:</strong> <a href="https://api.whatsapp.com/send?phone=5518996626124&text=<?php echo 'Olá. Gostaria de fazer um orçamento sem compromisso sobre desenvolvimento de site, app ou automação.'; ?>" target="_blank">+55 18 99662-6124</a></p>
                    <p><strong>Cidade:</strong> Dracena SP - <strong>Com destino à Florianópolis SC</strong></p>
                    <p><strong>Email:</strong> contato@flaviopavim.com.br</p>
                    <p><img height="25" src="img/social/youtube.png" title="GitHub" alt="GitHub"/> <a href="https://youtube.com/flaviopavim" target="_blank">https://youtube.com/flaviopavim</a> (um pouco sobre quem sou)</p>
                    <p><img height="25" src="img/social/github.png" title="GitHub" alt="GitHub"/> <a href="https://github.com/flaviopavim" target="_blank">https://github.com/flaviopavim</a></p>
                    <p><img height="25" src="img/social/linkedin.png" title="GitHub" alt="GitHub"/> <a href="https://www.linkedin.com/in/kicko" target="_blank">https://www.linkedin.com/in/kicko</a></p>
                    <br>
                    <br>

                    <p><strong>Trabalhos feitos:</strong></p>
                    <p><a href="https://whitehats.com.br" target="_blank">https://whitehats.com.br</a></p>
                    <p><a href="https://flaviamattioli.com.br" target="_blank">https://flaviamattioli.com.br</a></p>
                    <p><a href="https://danieljunhipnoterapeuta.com.br" target="_blank">https://danieljunhipnoterapeuta.com.br</a> - em parceria com <a href="https://sofonias.com.br" target="_blank">Sofonias</a></p>
                    <p><a href="https://naoradoclick.com.br" target="_blank">https://naoradoclick.com.br</a></p>
                    <p><a href="https://freitasadvocaciabr.com" target="_blank">https://freitasadvocaciabr.com</a></p>
                    <p><a href="https://alexiasystem.com.br" target="_blank">https://alexiasystem.com.br</a></p>
                    <p><a href="https://protetorastl.com.br" target="_blank">https://protetorastl.com.br</a></p>
                    <br>
                    <br>

                    <p><strong>Aplicativos na PlayStore:</strong></p>
                    <p><a href="https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth" target="_blank">https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth</a></p>
                    <p><a href="https://play.google.com/store/apps/details?id=br.com.whitehats.crypt" target="_blank">https://play.google.com/store/apps/details?id=br.com.whitehats.crypt</a></p>
                    <br>
                    <br>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <!--            <div class="col-md-5">
                        
                                    </div>-->
                        <div class="col-md-12">
                            <!--<h2>Chat WhiteHats</h2>-->
                            Co-fundador do projeto <strong>WhiteHats</strong>
                            <div style="clear: both; height: 15px;"></div>
                            <img src="img/work/chat/colored.png" class="img-responsive" style="width: 100%;">
                            <div style="clear: both; height: 30px;"></div>
                            <p>
                                O <strong>WhiteHats</strong> é uma comunidade feita pra programadores, experts em tecnologias, curiosos e estudantes do assunto
                            </p>
                            <p>
                                Site: <a href="https://whitehats.com.br/chat" target="_blank">https://whitehats.com.br/chat</a>
                            </p>
                            <p>
                                Chat com criptografia ponta a ponta, no qual você pode utilizar uma chave secreta com seus amigos pra conversar com segurança em sala, grupo, ou individualmente
                            </p>
                            <p>
                                Faça amizades com pessoas do mesmo interesse que você!
                            </p>
                            <p>
                                Faça parte da equipe <strong>WhiteHats</strong>! 
                            </p>
                            <p>
                                <strong>É grátis! É seguro! E não coletamos cookies!</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p><strong>Principais experiências profissionais:</strong></p>
            <br>
            <br>

            <p><strong>Captador</strong> - <a href="https://captador.com.br/" target="_blank">www.captador.com.br</a> – janeiro de 2024 à julho de 2024</p>
            <p>Fizemos chat de atendimento integrado com WhatsApp Business e sistema de pagamento.</p>
            <p><strong>Tecnologias utilizadas:</strong> Dart (Flutter)</p>
            <br>
            <br>

            <p><strong>VMG Guindastes</strong> - <a href="https://vmgguindastes.com.br/" target="_blank">www.vmgguindastes.com.br</a> – agosto de 2023 à janeiro de 2024</p>
            <p>Fiz aplicativo Android e iOs do sistema VMG pra controle operacional da empresa.</p>
            <p><strong>Tecnologias utilizadas:</strong> PHP, SQL, Dart (Flutter)</p>
            <br>
            <br>

            <p><strong>Sofonias</strong> - <a href="https://sofonias.com.br" target="_blank">www.sofonias.com.br</a> – 2015 até o momento como freelancer</p>
            <p>Trabalho como freelancer Full Stack, onde desenvolvo principalmente backend de sites e lojas virtuais de diversos tipos. 
                Adquiri muito conhecimento no recorte de imagens com Photoshop, muitas vezes layouts já chegam pronto e eu transformo em site.</p>
            <p><strong>Tecnologias utilizadas:</strong> HTML, CSS, Javascript, jQuery, PHP, MySQL, API Rest, Integrações com</p>
            <p>Wirecard e PayPal</p>
            <br>
            <br>

            <p><strong>Faculdade Uniasselvi</strong> - <a href="https://uniasselvi.com.br" target="_blank">www.uniasselvi.com.br</a> - De abril de 2022 à abril de 2023</p>
            <p>Atuei na sustentação e manutenção do site e backend do aplicativo do sistema Uniasselvi.</p>
            <p>Trabalhei junto à uma equipe dedicada, com 25 desenvolvedores</p>
            <p><strong>Tecnologias:</strong> HTML, CSS, Bootstrap, Javascript, jQuery, PHP, MySql, Angular, Symphony, PL-SQL,</p>
            <p>SQL, Oracle</p>
            <br>
            <br>

            <p><strong>RunClub</strong> - <a href="https://runclub.com.br" target="_blank">www.runclub.com.br</a> – Janeiro do 2017 até março de 2019</p>
            <p>Ex CTO, fiz site e aplicativos Android e iOs (atualmente apps offline)</p>
            <p>Liderei uma equipe de 3 desenvolvedores, sendo eu na programação geral do app e site, um no Frontend de site e outro no Frontend de app</p>
            <p>O sistema tinha split de pagamento integrado com Wirecard, pra pagamento de produtos diversos e assinaturas com recorrência mensal</p>
            <p><strong>Tecnologias:</strong> Ionic, Cordova, HTML, CSS, Bootstrap, Javascript, jQuery, PHP, MySQL, Java</p>
            <p>Android, Swift (iOs) e integração com API do Wirecard</p>
            <br>
            <br>

            <p><strong>IndBras</strong> - <a href="https://indbras.com.br" target="_blank">www.indbras.com.br</a> – nos sábados desde julho de 2015 até dezembro de 2016</p>
            <p>Trabalhei com desenvolvimento de catálogo de vendas, feito com API integrado em sistema feito em C#, fui responsável por fazer o catálogo e ajudar na criação da comunicação SOAP.</p>
            <p>Também foi onde comecei a ter uma base de C# fazendo algumas atividades do ERP deles.</p>
            <p><strong>Tecnologias:</strong> HTML, CSS, Javascript, PHP, MySQL, SOAP e um pouco de C# desktop</p>
            <br>
            <br>

            <p><strong>Grupo UDS</strong> - <a href="https://grupouds.com.br" target="_blank">www.grupouds.com.br</a> - 2015 à 2016</p>
            <p>Trabalhei fazendo sites e lojas virtuais</p>
            <p>Foi onde tive a maior base de aprendizado em fazer todos os tipos de sites e ecommerces, 
                integrando com APIs de pagamento e fazendo a logística completa de lojas virtuais de diversos tipos. 
                Fiz integrações com PagSeguro, Ebanx, Cielo e PayPal</p>
            <p><strong>Tecnologias:</strong> HTML, CSS, Javascript, jQuery, Bootstrap, PHP, MySQL, API Rest</p>


        <?php } else if ($_SESSION['lng'] == 'eng') { ?>
            Programmer since the age of 14, I am now <?php
            $diff = abs(strtotime(date('Y-m-d')) - strtotime('1988-03-28'));
            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            echo $years;
            ?> years old, and have been coding for <?php echo $years - 14; ?> years.
            <br>
    <p>Currently, I work with <strong class="blue">website development, apps, home automation, process automation</strong>, and machine software using <strong class="green">Arduino</strong> or <strong class="red">Raspberry</strong>.</p>
    <br>
    <p>I serve various companies, have programmer partners and experts in <strong>WhiteHats</strong>, work freelance for some companies, and am always open to a good offer 😉😎</p>
    <br>
    <br>
    <div style="clear: both;"></div>

    <div class="row">
        <div class="col-md-6">
            <p><strong>Whatsapp:</strong> <a href="https://api.whatsapp.com/send?phone=5518996626124&text=<?php echo 'Hello. I would like to get a no-obligation quote on website, app, or automation development.'; ?>" target="_blank">+55 18 99662-6124</a></p>
            <p><strong>City:</strong> Dracena SP - <strong>Heading to Florianópolis SC</strong> - <span class="green-br">B</span><span class="yellow-br">r</span><span class="green-br">a</span><span class="yellow-br">s</span><span class="green-br">i</span><span class="yellow-br">l</span> <img width="20" src="img/flag/brasil.png" alt="" style="margin-top: -5px;"></p>
            <p><strong>Email:</strong> contato@flaviopavim.com.br</p>
            <p><img height="25" src="img/social/youtube.png" title="YouTube" alt="YouTube"/> <a href="https://youtube.com/flaviopavim" target="_blank">https://youtube.com/flaviopavim</a> (a bit about who I am)</p>
            <p><img height="25" src="img/social/github.png" title="GitHub" alt="GitHub"/> <a href="https://github.com/flaviopavim" target="_blank">https://github.com/flaviopavim</a></p>
            <p><img height="25" src="img/social/linkedin.png" title="LinkedIn" alt="LinkedIn"/> <a href="https://www.linkedin.com/in/kicko" target="_blank">https://www.linkedin.com/in/kicko</a></p>
            <br>
            <br>

            <p><strong>Projects:</strong></p>
            <p><a href="https://whitehats.com.br" target="_blank">https://whitehats.com.br</a></p>
            <p><a href="https://flaviamattioli.com.br" target="_blank">https://flaviamattioli.com.br</a></p>
            <p><a href="https://danieljunhipnoterapeuta.com.br" target="_blank">https://danieljunhipnoterapeuta.com.br</a> - in partnership with <a href="https://sofonias.com.br" target="_blank">Sofonias</a></p>
            <p><a href="https://naoradoclick.com.br" target="_blank">https://naoradoclick.com.br</a></p>
            <p><a href="https://freitasadvocaciabr.com" target="_blank">https://freitasadvocaciabr.com</a></p>
            <p><a href="https://alexiasystem.com.br" target="_blank">https://alexiasystem.com.br</a></p>
            <p><a href="https://protetorastl.com.br" target="_blank">https://protetorastl.com.br</a></p>
            <br>
            <br>

            <p><strong>Apps on PlayStore:</strong></p>
            <p><a href="https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth" target="_blank">https://play.google.com/store/apps/details?id=br.com.whitehats.bluetooth</a></p>
            <p><a href="https://play.google.com/store/apps/details?id=br.com.whitehats.crypt" target="_blank">https://play.google.com/store/apps/details?id=br.com.whitehats.crypt</a></p>
            <br>
            <br>
        </div>
        <div class="col-md-6">
            <div class="row">
                <!--            <div class="col-md-5">
                
                            </div>-->
                <div class="col-md-12">
                    <!--<h2>WhiteHats Chat</h2>-->
                    Co-founder of the <strong>WhiteHats</strong> project
                    <div style="clear: both; height: 15px;"></div>
                    <img src="img/work/chat/colored.png" class="img-responsive" style="width: 100%;">
                    <div style="clear: both; height: 30px;"></div>
                    <p>
                        <strong>WhiteHats</strong> is a community for programmers, technology experts, enthusiasts, and students.
                    </p>
                    <p>
                        Website: <a href="https://whitehats.com.br/chat" target="_blank">https://whitehats.com.br/chat</a>
                    </p>
                    <p>
                        Chat with end-to-end encryption, where you can use a secret key with your friends to communicate securely in a room, group, or individually.
                    </p>
                    <p>
                        Make friends with people who share the same interests as you!
                    </p>
                    <p>
                        Join the <strong>WhiteHats</strong> team!
                    </p>
                    <p>
                        <strong>It's free! It's safe! And we don't collect cookies!</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <p><strong>Main professional experiences:</strong></p>
    <br>
    <br>

    <p><strong>Captador</strong> - <a href="https://captador.com.br/" target="_blank">www.captador.com.br</a> – January 2024 to July 2024</p>
    <p>We created a chat support system integrated with WhatsApp Business and a payment system.</p>
    <p><strong>Technologies used:</strong> Dart (Flutter)</p>
    <br>
    <br>

    <p><strong>VMG Guindastes</strong> - <a href="https://vmgguindastes.com.br/" target="_blank">www.vmgguindastes.com.br</a> – August 2023 to January 2024</p>
    <p>I developed the Android and iOS app for the VMG system for operational control of the company.</p>
    <p><strong>Technologies used:</strong> PHP, SQL, Dart (Flutter)</p>
    <br>
    <br>

    <p><strong>Sofonias</strong> - <a href="https://sofonias.com.br" target="_blank">www.sofonias.com.br</a> – 2015 to present as a freelancer</p>
    <p>I work as a freelance Full Stack developer, mainly developing the backend of websites and virtual stores of various types. 
        I have gained significant knowledge in image cutting with Photoshop; often, layouts come ready, and I transform them into websites.</p>
    <p><strong>Technologies used:</strong> HTML, CSS, JavaScript, jQuery, PHP, MySQL, REST API, Integrations with</p>
    <p>Wirecard and PayPal</p>
    <br>
    <br>

    <p><strong>Faculdade Uniasselvi</strong> - <a href="https://uniasselvi.com.br" target="_blank">www.uniasselvi.com.br</a> - April 2022 to April 2023</p>
    <p>I worked on maintaining the website and backend of the Uniasselvi system app.</p>
    <p>I collaborated with a dedicated team of 25 developers.</p>
    <p><strong>Technologies:</strong> HTML, CSS, Bootstrap, JavaScript, jQuery, PHP, MySQL, Angular, Symphony, PL-SQL,</p>
    <p>SQL, Oracle</p>
    <br>
    <br>

    <p><strong>RunClub</strong> - <a href="https://runclub.com.br" target="_blank">www.runclub.com.br</a> – January 2017 to March 2019</p>
    <p>Former CTO, I developed the website and Android and iOS apps (currently offline)</p>
    <p>I led a team of 3 developers: one was responsible for the website's frontend, another for the app's frontend, and I handled the general programming of the app and website.</p>
    <p>The system had integrated payment split with Wirecard for the purchase of various products and monthly recurring subscriptions.</p>
    <p><strong>Technologies:</strong> Ionic, Cordova, HTML, CSS, Bootstrap, JavaScript, jQuery, PHP, MySQL, Java</p>
    <p>Android, Swift (iOS), and integration with Wirecard API</p>
    <br>
    <br>

    <p><strong>IndBras</strong> - <a href="https://indbras.com.br" target="_blank">www.indbras.com.br</a> – Saturdays from July 2015 to December 2016</p>
    <p>I worked on developing a sales catalog, integrated with a system developed in C#. I was responsible for creating the catalog and helping to establish SOAP communication.</p>
    <p>This experience also laid the foundation for my C# skills, allowing me to perform various ERP tasks.</p>
    <p><strong>Technologies:</strong> HTML, CSS, JavaScript, PHP, MySQL, SOAP, and a bit of C# desktop</p>
    <br>
    <br>

    <p><strong>Grupo UDS</strong> - <a href="https://grupouds.com.br" target="_blank">www.grupouds.com.br</a> - 2015 to 2016</p>
    <p>I worked on creating websites and virtual stores.</p>
    <p>This is where I gained the most significant experience in developing all types of websites and e-commerce platforms, 
        integrating with payment APIs, and managing the complete logistics of various types of virtual stores. 
        I implemented integrations with PagSeguro, Ebanx, Cielo, and PayPal.</p>
    <p><strong>Technologies:</strong> HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, MySQL, REST API</p>



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







