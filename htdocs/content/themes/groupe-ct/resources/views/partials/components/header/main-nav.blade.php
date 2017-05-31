<div class="nav-content-container nav-mobile row">

    <div class="nav-content col-xs-10 col-xs-offset-1">

        <div class="nav-logo-container"> </div>
        <div class="nav-menu-btn-container">
            <div id="menu-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

</div> <!-- SECTION END -->

<div class="nav-content-container desktop row">

    <div class="nav-logo-container col-xs-2">
    </div>
    <div class="nav-container col-xs-8">

        <nav class="nav-top">
            <ul class="nav-link-container">
                <li class="menu-item"><a class="nav-link" href="#">English</a></li>
                <li class="menu-item"><a class="nav-link" href="#">Nous joindre</a></li>
                <li class="menu-item"><a class="nav-link" href="#">Infolettre</a></li>
                <li class="menu-item"><a class="nav-link" href="#">Carrière</a></li>
                <li class="menu-item"><a class="nav-link link-account" href="#">Mon compte</a></li>
            </ul>
        </nav>

        <nav class="nav-bottom">
            <ul class="nav-link-container">
                <li class="menu-item"><a class="nav-link nl1" href="#">SERVICES ET CONSEIL</a></li>
                <li class="menu-item"><a class="nav-link nl2" href="#">PRODUITS ET SOLUTIONS</a></li>
                <li class="menu-item"><a class="nav-link nl3" href="#">SOUTIENT TECHNIQUE</a></li>
                <li class="menu-item"><a class="nav-link nl4" href="#">À PROPOS</a></li>
                <li class="menu-item"><a class="nav-link nl5" href="#">NOUVELLES</a></li>
            </ul>
        </nav>
    </div>
    <div class="nav-contact-us col-xs-2">
        <a class="contact-us-link" href="#">
            <span><?php _e('CONTACTEZ-NOUS', THEME_TEXTDOMAIN); ?></span>
            <img class="icon-arrow" src="{{ themosis_assets() }}/images/icon/icon-arrow.png" alt="arrow contact us">
        </a>
        <div class="contact-form-container">
            <h2 class="contact-form-title"><?php _e('Contactez-nous pour lorem ipsum', THEME_TEXTDOMAIN); ?></h2>
            <div class="contact-field-container">

                <div class="contact-row">
                    <select name="sexe" id="sexe">
                        <option value="">Mr/Me</option>
                        <option value="mr">Mr</option>
                        <option value="me">Me</option>
                    </select>
                    <label for="first-name"></label>
                    <input type="text" id="first-name" placeholder="<?php _e('Prénom *', THEME_TEXTDOMAIN); ?>">
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="<?php _e('Nom *', THEME_TEXTDOMAIN); ?>">
                </div>
                <div class="contact-row">
                    <label for="compagny-name"></label>
                    <input type="text" id="compagny-name" placeholder="<?php _e("Nom de l'entreprise *", THEME_TEXTDOMAIN); ?>">
                    <label for="town"></label>
                    <input type="text" id="town" placeholder="<?php _e('Ville *', THEME_TEXTDOMAIN); ?>">
                </div>
                <div class="contact-row">
                    <label for="phone"></label>
                    <input type="text" id="phone" placeholder="<?php _e("Téléphone", THEME_TEXTDOMAIN); ?>">
                    <label for="email"></label>
                    <input type="email" id="town" placeholder="<?php _e('Courriel *', THEME_TEXTDOMAIN); ?>">
                </div>
                <div class="contact-row">
                    <textarea rows="6" cols="10" placeholder="<?php _e('Message', THEME_TEXTDOMAIN); ?>"></textarea>
                </div>
                <div class="contact-row">
                    <div class="check-container">
                        <input type="checkbox" id="accept" class="contact-accept"><label for="accept">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</label>
                    </div>

                    <button type="submit" class="submit-btn"><?php _e('Envoyer', THEME_TEXTDOMAIN); ?></button>

                </div>
                <span class="mandatory-field-msg">*Champs obligatoires</span>
            </div>
        </div>
    </div>



</div> <!-- SECTION END -->