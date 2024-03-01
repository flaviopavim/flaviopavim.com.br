<section id="videos">
    <div class="my-container page">

        <?php if ($_SESSION['lng'] == 'pt-br') { ?>
        Esse vídeo resume bem meus hobbys, minha vida, e o que passa na minha cabeça
        <?php } ?>
        <?php if ($_SESSION['lng'] == 'eng') { ?>
        This video (in Portuguese BR) summarizes well my hobbies, my life, and what goes on in my mind.
        <?php } ?>

        <div class="br-15"></div>

        <div class="video-container">
            <iframe
                src="https://www.youtube.com/embed/3wZgyTzcRWk"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                allowfullscreen></iframe>
        </div>

        <div class="br-15"></div>

        <?php if ($_SESSION['lng'] == 'pt-br') { ?>
        Vídeo sobre Arduino, um dos meus passatempos preferidos
        <?php } ?>
        <?php if ($_SESSION['lng'] == 'eng') { ?>
        Video (in Portuguese BR) about Arduino, one of my favorite pastimes.
        <?php } ?>
        <div class="br-15"></div>

        <div class="video-container">
            <iframe
                src="https://www.youtube.com/embed/rsyoDI5WDIU"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                allowfullscreen></iframe>
        </div>

    </div>
</section>