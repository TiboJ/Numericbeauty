<?php require_once ('config/form.php'); ?>
<div id="ct4">
    <article>
        <h1>Ils nous ont fait confiance.</h1><br>
        <ul class="confidence">
            <li><a href="javascript:void(0)"><div class="contener"><h3>#Vitrine</h3><p>Club de danse</p></div><img src="img/vitadanse.jpg" alt="Vitadanse"></a></li>
            <li><a href="javascript:void(0)"><div class="contener"><h3>#Vitrine</h3><p>Template restaurant asiatique</p></div><img src="img/asia.jpg" alt="AsiaBox"></a></li>
            <li><a href="javascript:void(0)"><div class="contener"><h3>#Affiche & Flyer</h3><p>Minutepapillote, application mobile</p></div><img src="img/minutepapillote.jpg" alt="Minutepapillote"></a></li>
            <li><a href="javascript:void(0)"><div class="contener"><h3>#Cover Facebook</h3><p>Link Club Famous place</p></div><img src="img/trompeziens.jpg" alt="LinkClub"></a></li>
            <li><a href="javascript:void(0)"><div class="contener"><h3>#Carte d'invitation</h3><p>Crédit Maritime Méditerranée</p></div><img src="img/cmm.jpg" alt="LinkClub"></a></li>
            <li><a href="javascript:void(0)"><div class="contener"><h3>#curriculum vitae</h3><p>X-Perience & Design</p></div><img src="img/cv-mate.jpg" alt="LinkClub"></a></li>
            <li><a href="http://www.caexpert.fr" target="_blank"><div class="contener"><h3>#Wordpress</h3><p>Caexpert.fr</p></div><img src="img/caex.jpg" alt="www.Caexpert.fr"></a></li>
        </ul>

    </article>
    <article><h2>Dans le doute, on pourrait en discuter.</h2>
        <div id="form-main">
            <div id="form-div">
                <form class="form" id="form1" method="POST" accept-charset="UTF-8" action="#form-main">
                    <p class="alert"><?php echo $respond; ?></p>

                    <p class="name field">
                        <input name="name" type="text" value="" class="" placeholder="Nom" id="name" />
                    </p>


                    <p class="email field">
                        <input name="email" type="text" value="" class="" id="email" placeholder="Mail" />
                    </p>


                    <p class="tel field">
                        <input name="tel" type="text" value="" class="" id="tel" placeholder="Téléphone" />
                    </p>


                    <p class="text field">
                        <textarea name="text" class="" id="comment" placeholder="Message"></textarea>
                    </p>


                    <p class="file">
                        <input type="file" class="filestyle" data-input="false">
                    </p>

                    <input type="hidden" name="token" value="true" />

                    <div class="submit">
                        <input type="submit" name="envoi" value="Envoyer" id="button-blue"/>
                        <div class="ease"></div>
                    </div>
                </form>
            </div>
        </div>
    </article>
    <article class="map">
        <h2>Ou bien se rencontrer !</h2>

        <iframe width="" height="300" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92456.97749250506!2d1.4328409999999998!3d43.600699950000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb6fec7552ff%3A0x406f69c2f411030!2sToulouse!5e0!3m2!1sfr!2sfr!4v1422393690978"></iframe>
    </article>
</div>