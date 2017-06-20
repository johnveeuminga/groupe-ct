<section id="home-newsletter" class="bloc-newsletter">
    <div class="bloc-newsletter-container default-padding default-width">
        <form id="form-newsletter" method="post">
            <div class="contact-form-container">
                <div class="newsletter-title-container">
                    <h3 class="newsletter-upper-title">{{ pll__('Infolettre') }}</h3>
                    <h2 class="newsletter-title">{{ pll__('Restez à la page') }}</h2>
                    <p class="newsletter-desc">{{ pll__('Abonnez-vous à l\'infolettre pour recevoir les dernières nouvelles de Groupe CT.') }}</p>
                </div>
                <div class="contact-field-container">
                    <div id="newsletter-success-container" style="display: none;">
                        <p>{{ pll__('Merci de votre intérêt ! Vous recevrez un courriel sous peu pour compléter votre inscription. À bientôt !') }}</p>
                    </div>
                    <div id="newsletter-errors-container" style="display: none;">
                        <p class="error-required">{{ pll__('Veuillez remplir tous les champs requis.') }}</p>
                        <p class="error-email">{{ pll__('Veuillez utiliser un format de courriel valide.') }}</p>
                    </div>
                    <div class="contact-row">
                        <div class="select-container">
                            <select name="title" id="newsletter-title">
                                <option value=""  disabled selected hidden>{{ pll__('Titre*') }}</option>
                                <option value="m">{{ pll__('M.') }}</option>
                                <option value="mme">{{ pll__('Mme') }}</option>
                            </select>
                        </div>

                        <label for="newsletter-first-name"></label>
                        <input type="text" id="newsletter-first-name" placeholder="{{ pll__('Prénom*') }}">
                        <label for="newsletter-name"></label>
                        <input type="text" id="newsletter-name" placeholder="{{ pll__('Nom*') }}">
                    </div>
                    <div class="contact-row">
                        <label for="newsletter-compagny-name"></label>
                        <input type="text" id="newsletter-compagny-name" name="newsletter-compagny-name" placeholder="{{ pll__('Entreprise*') }}">
                        <label for="newsletter-phone"></label>
                        <input type="text" id="newsletter-phone" name="newsletter-phone" placeholder="{{ pll__('Téléphone') }}">
                    </div>
                    <div class="contact-row">
                        <label for="newsletter-email"></label>
                        <input type="email" id="newsletter-email" name="newsletter-name" placeholder="{{ pll__('Courriel*') }}">
                    </div>
                    <div class="contact-row">
                        <scpan class="mandatory-field-msg">*Champs obligatoires</scpan>
                        <button type="submit" class="submit-btn">{{ pll__('Soumettre') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

