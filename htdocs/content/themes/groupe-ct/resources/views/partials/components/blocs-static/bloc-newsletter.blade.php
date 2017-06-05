<div class="bloc-name row">
    <h1>SECTION NEWSLETTER</h1>
</div>


<section id="home-newsletter" class="bloc-newsletter">
    <div class="bloc-newsletter-container default-padding default-width">



        <div class="contact-form-container">

            <div class="newsletter-title-container">
                <h3 class="newsletter-upper-title"><?php _e('INFOLETTRE', THEME_TEXTDOMAIN); ?></h3>
                <h2 class="newsletter-title"><?php _e('RESTEZ À LA PAGE', THEME_TEXTDOMAIN); ?></h2>
                <p class="newsletter-desc">Abonnez-vous à l’infolettre. </p>
            </div>

            <div class="contact-field-container">
                <div class="contact-row">
                    <div class="select-container">
                        <select name="sexe" id="sexe">
                            <option value=""  disabled selected hidden>Mr/Me</option>
                            <option value="mr">Mr</option>
                            <option value="me">Me</option>
                        </select>
                    </div>

                    <label for="first-name"></label>
                    <input type="text" id="first-name" placeholder="<?php _e('Prénom *', THEME_TEXTDOMAIN); ?>">
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="<?php _e('Nom *', THEME_TEXTDOMAIN); ?>">
                </div>
                <div class="contact-row">
                    <label for="compagny-name"></label>
                    <input type="text" id="compagny-name" placeholder="<?php _e("Nom de l'entreprise *", THEME_TEXTDOMAIN); ?>">
                    <div class="select-container">
                        <select name="departement" id="departement">
                            <option value=""  disabled selected hidden>Département</option>
                            <option value="1">Ressource humaine</option>
                            <option value="2">Administration</option>
                        </select>
                    </div>
                </div>
                <div class="contact-row">
                    <label for="email"></label>
                    <input type="email" id="email" placeholder="<?php _e('Courriel *', THEME_TEXTDOMAIN); ?>">
                </div>
                <div class="contact-row">
                    <div class="check-container">
                        <input type="checkbox" id="accept" class="contact-accept"><label for="accept">
                            Sed ut perspiciatis unde omnis iste natus error.
                        </label>
                    </div>

                    <button type="submit" class="submit-btn"><?php _e('Envoyer', THEME_TEXTDOMAIN); ?></button>

                </div>
                <span class="mandatory-field-msg">*Champs obligatoires</span>
            </div>
        </div>
    </div>


    </div>
</section>
