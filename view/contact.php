<?php if ($_SESSION['lng'] == 'pt-br') { ?>
<section id="contact">
    <div class="my-container page">
        <div class="contatos">
            <div class="contato-left">

                Entre em contato, faça seu orçamento sem compromisso, ou deixe sua opinião, sugestão.<br>
                Retornarei o mais breve possível!

                <ul class="contact-list">
                    <li><a href="mailto:contato@flaviopavim.com.br" target="_blank" class="default">contato@flaviopavim.com.br</a></li>
                </ul>
                <ul class="contact-list">
                    <li>
                        <img src="img/social/whatsapp.png" title="WhatsApp" alt="WhatsApp"/>
                        <a href="https://wa.me/5518996626124" target="_blank" class="whatsapp" title="WhatsApp" alt="WhatsApp">+55 (18) 99662-6124</a>
                    </li>
                </ul>
                <ul class="contact-list">
                    <li><a href="#" class="default" title="Celular" alt="Celular">Celular: (67) 9 9312-9223</a></li>
                </ul>
                <ul class="contact-list">
                    <li>
                        <img src="img/social/github.png" title="GitHub" alt="GitHub"/>
                        <a href="https://github.com/flaviopavim" target="_blank" class="default" title="GitHub" alt="GitHub">GitHub</a>
                    </li>
                    <li>
                        <img src="img/social/linkedin.png" title="LinkedIn" alt="LinkedIn"/>
                        <a href="https://linkedin.com/in/kicko" target="_blank" class="linkedin" title="LinkedIn" alt="LinkedIn">LinkedIn</a>
                    </li>
                    <li>
                        <img src="img/social/99.png" title="99 Freelas" alt="99 Freelas"/>
                        <a href="https://www.99freelas.com.br/user/flavio.pavim" target="_blank" class="linkedin" title="Spotify" alt="Spotify">99 Freelas</a>
                    </li>
                    <li>
                        <img src="img/social/facebook.png" title="Facebook" alt="Facebook"/>
                        <a href="https://facebook.com/rockandhack" target="_blank" class="linkedin" title="Facebook" alt="Facebook">Facebook</a>
                    </li>
                    <li>
                        <img src="img/social/youtube.png" title="YouTube" alt="YouTube"/>
                        <a href="https://www.youtube.com/@FlavioPavim" target="_blank" class="linkedin" title="YouTube" alt="YouTube">YouTube</a>
                    </li>
                    <li>
                        <img src="img/social/spotify.webp" title="Spotify" alt="Spotify"/>
                        <a href="https://open.spotify.com/user/31bzmypne5bjxthqhotuxzpo7goi" target="_blank" class="linkedin" title="Spotify" alt="Spotify">Spotify</a>
                    </li>
                </ul>

                <a href="https://cnpj.biz/15616043000173" target="_blank" title="CNPJ" alt="CNPJ">CNPJ: 15.616.043/0001-73</a>

            </div>
            <div class="contato-right">
                <form action="./" method="post">

                    <p>Deixe sua mensagem, sugestão, ou entre em contato pelo formulário abaixo</p>
                    <p>Responderei o mais breve possível</p>

                    <input type="hidden" name="form-contact" value="<?php echo $_SESSION['form-contact'] = md5(time() . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)); ?>">

                    <input type="text" name="name" placeholder="Digite seu nome">
                    <input type="text" name="contact" placeholder="Digite seu email ou whatsapp">

                    <textarea name="message" placeholder="Digite sua mensagem"></textarea>

                    <button>Enviar mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php } else if ($_SESSION['lng'] == 'eng') { ?>
<section id="contact">
    <div class="my-container page">
        <div class="contatos">
            <div class="contato-left">

                Get in touch, request a quote with no commitment, or share your opinion or suggestion.<br>
                I'll get back to you as soon as possible!

                <ul class="contact-list">
                    <li><a href="mailto:contato@flaviopavim.com.br" target="_blank" class="default">contato@flaviopavim.com.br</a></li>
                </ul>
                <ul class="contact-list">
                    <li>
                        <img src="img/social/whatsapp.png" title="WhatsApp" alt="WhatsApp"/>
                        <a href="https://wa.me/5518996626124" target="_blank" class="whatsapp" title="WhatsApp" alt="WhatsApp">+55 (18) 99662-6124</a>
                    </li>
                </ul>
                <ul class="contact-list">
                    <li><a href="#" class="default" title="Mobile" alt="Mobile">Mobile: (67) 9 9312-9223</a></li>
                </ul>
                <ul class="contact-list">
                    <li>
                        <img src="img/social/github.png" title="GitHub" alt="GitHub"/>
                        <a href="https://github.com/flaviopavim" target="_blank" class="default" title="GitHub" alt="GitHub">GitHub</a>
                    </li>
                    <li>
                        <img src="img/social/linkedin.png" title="LinkedIn" alt="LinkedIn"/>
                        <a href="https://linkedin.com/in/kicko" target="_blank" class="linkedin" title="LinkedIn" alt="LinkedIn">LinkedIn</a>
                    </li>
                    <li>
                        <img src="img/social/99.png" title="99 Freelas" alt="99 Freelas"/>
                        <a href="https://www.99freelas.com.br/user/flavio.pavim" target="_blank" class="linkedin" title="Spotify" alt="Spotify">99 Freelas</a>
                    </li>
                    <li>
                        <img src="img/social/facebook.png" title="Facebook" alt="Facebook"/>
                        <a href="https://facebook.com/rockandhack" target="_blank" class="linkedin" title="Facebook" alt="Facebook">Facebook</a>
                    </li>
                    <li>
                        <img src="img/social/youtube.png" title="YouTube" alt="YouTube"/>
                        <a href="https://www.youtube.com/@FlavioPavim" target="_blank" class="linkedin" title="YouTube" alt="YouTube">YouTube</a>
                    </li>
                    <li>
                        <img src="img/social/spotify.webp" title="Spotify" alt="Spotify"/>
                        <a href="https://open.spotify.com/user/31bzmypne5bjxthqhotuxzpo7goi" target="_blank" class="linkedin" title="Spotify" alt="Spotify">Spotify</a>
                    </li>
                </ul>

                <a href="https://cnpj.biz/15616043000173" target="_blank" title="CNPJ" alt="CNPJ">CNPJ: 15.616.043/0001-73</a>

            </div>
            <div class="contato-right">
                <form action="./" method="post">

                    <p>Leave your message, suggestion, or contact me using the form below</p>
                    <p>I'll respond as soon as possible</p>

                    <input type="hidden" name="form-contact" value="<?php echo $_SESSION['form-contact'] = md5(time() . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)); ?>">

                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="text" name="contact" placeholder="Enter your email or WhatsApp">

                    <textarea name="message" placeholder="Enter your message"></textarea>

                    <button>Send message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php } else {?>


<section id="contact">
    <div class="my-container page">
        <div class="contatos">
            <div class="contato-left">

                Qapla'! ghu'vam vItlhutlh, maqon lo'laHbe' lulo'pu', pagh puqbe' quv vay'! 
                yInlIj vItlhutlh!

                <ul class="contact-list">
                    <li><a href="mailto:contato@flaviopavim.com.br" target="_blank" class="default">contato@flaviopavim.com.br</a></li>
                </ul>
                <ul class="contact-list">
                    <li>
                        <img src="img/social/whatsapp.png" title="WhatsApp" alt="WhatsApp"/>
                        <a href="https://wa.me/5518996626124" target="_blank" class="whatsapp" title="WhatsApp" alt="WhatsApp">+55 (18) 99662-6124</a>
                    </li>
                </ul>
                <ul class="contact-list">
                    <li><a href="#" class="default" title="Mobile" alt="Mobile">Mobile: (67) 9 9312-9223</a></li>
                </ul>
                <ul class="contact-list">
                    <li>
                        <img src="img/social/github.png" title="GitHub" alt="GitHub"/>
                        <a href="https://github.com/flaviopavim" target="_blank" class="default" title="GitHub" alt="GitHub">GitHub</a>
                    </li>
                    <li>
                        <img src="img/social/linkedin.png" title="LinkedIn" alt="LinkedIn"/>
                        <a href="https://linkedin.com/in/kicko" target="_blank" class="linkedin" title="LinkedIn" alt="LinkedIn">LinkedIn</a>
                    </li>
                    <li>
                        <img src="img/social/99.png" title="99 Freelas" alt="99 Freelas"/>
                        <a href="https://www.99freelas.com.br/user/flavio.pavim" target="_blank" class="linkedin" title="Spotify" alt="Spotify">99 Freelas</a>
                    </li>
                    <li>
                        <img src="img/social/facebook.png" title="Facebook" alt="Facebook"/>
                        <a href="https://facebook.com/rockandhack" target="_blank" class="linkedin" title="Facebook" alt="Facebook">Facebook</a>
                    </li>
                    <li>
                        <img src="img/social/youtube.png" title="YouTube" alt="YouTube"/>
                        <a href="https://www.youtube.com/@FlavioPavim" target="_blank" class="linkedin" title="YouTube" alt="YouTube">YouTube</a>
                    </li>
                    <li>
                        <img src="img/social/spotify.webp" title="Spotify" alt="Spotify"/>
                        <a href="https://open.spotify.com/user/31bzmypne5bjxthqhotuxzpo7goi" target="_blank" class="linkedin" title="Spotify" alt="Spotify">Spotify</a>
                    </li>
                </ul>

                <a href="https://cnpj.biz/15616043000173" target="_blank" title="CNPJ" alt="CNPJ">CNPJ: 15.616.043/0001-73</a>

            </div>
            <div class="contato-right">
                <form action="./" method="post">

                    <p>Batlh! Leave your message, suggestion, or contact me using the form below</p>
                    <p>I'll respond as soon as possible</p>

                    <input type="hidden" name="form-contact" value="<?php echo $_SESSION['form-contact'] = md5(time() . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)); ?>">

                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="text" name="contact" placeholder="Enter your email or WhatsApp">

                    <textarea name="message" placeholder="Enter your message"></textarea>

                    <button>Send message</button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php } ?>