<div class="contact-form-container ">
    <form id="contact-us-form">
        <h2 class="contact-form-title"><?php _e('Contactez-nous pour lorem ipsum', THEME_TEXTDOMAIN); ?></h2>
        <div class="contact-field-container">

            <div class="error-msg-container">
            </div>


            <div class="contact-row">
                <select name="sexe" class="sexe">
                    <option value=""  disabled selected hidden>Mr/Me</option>
                    <option value="mr">Mr</option>
                    <option value="me">Me</option>
                </select>


                <label for="first_name"></label>
                <input type="text" name="first_name" id="first_name" placeholder="<?php _e('Prénom *', THEME_TEXTDOMAIN); ?>">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="<?php _e('Nom *', THEME_TEXTDOMAIN); ?>">
            </div>
            <div class="contact-row">
                <label for="compagny_name"></label>
                <input type="text" name="compagny_name" id="compagny_name" placeholder="<?php _e("Nom de l'entreprise *", THEME_TEXTDOMAIN); ?>">
                <label for="town"></label>
                <input type="text" name="town" id="town" placeholder="<?php _e('Ville *', THEME_TEXTDOMAIN); ?>">
            </div>
            <div class="contact-row">

                <select name="departement" id="departement">
                    <option value=""  disabled selected hidden>Département</option>
                    <option value="1">Ressource humaine</option>
                    <option value="2">Administration</option>
                </select>

                <label for="email"></label>
                <input type="email" name="email" id="email" class="" placeholder="<?php _e('Courriel *', THEME_TEXTDOMAIN); ?>">
            </div>
            <div class="contact-row">
                <label for="phone"></label>
                <input type="text" name="phone" id="phone" placeholder="<?php _e("Téléphone", THEME_TEXTDOMAIN); ?>">
                <label for="extension"></label>
                <input type="text" name="extension" id="extension" placeholder="<?php _e('Poste *', THEME_TEXTDOMAIN); ?>">
            </div>
            <div class="contact-row">
                <textarea rows="6" cols="10" name="msg" placeholder="<?php _e('Message *', THEME_TEXTDOMAIN); ?>"></textarea>
            </div>
            <div class="contact-row">
                <div class="check-container">
                    <input type="checkbox" name="accept" id="accept" class="contact-accept"><label for="accept">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</label>
                </div>

                <button type="submit" class="primary-btn submit-btn"><?php _e('Envoyer', THEME_TEXTDOMAIN); ?></button>

            </div>
            <span class="mandatory-field-msg">*Champs obligatoires</span>
        </div>
    </form>
</div>
