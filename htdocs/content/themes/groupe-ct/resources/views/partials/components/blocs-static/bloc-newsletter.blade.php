<section id="home-newsletter" class="bloc-newsletter">
    <div class="bloc-newsletter-container default-padding default-width">
        <div id="newsletter-success-container" style="display: none;">
            <p>{{ pll__('Merci de votre intérêt ! Vous recevrez un courriel sous peu pour compléter votre inscription. À bientôt !') }}</p>
        </div>
        <div class="contact-form-container">
            <div class="newsletter-title-container">
                <h3 class="newsletter-upper-title">{{ pll__('Infolettre') }}</h3>
                <h2 class="newsletter-title">{{ pll__('Restez à la page') }}</h2>
                <p class="newsletter-desc">{{ pll__('Abonnez-vous à l\'infolettre pour recevoir les dernières nouvelles de Groupe CT.') }}</p>
            </div>
            <div class="contact-field-container">
                <div class="contact-row">
                    <div class="select-container">
                        <select name="sexe" id="sexe">
                            <option value=""  disabled selected hidden>{{ pll__('Titre*') }}</option>
                            <option value="m">{{ pll__('M.') }}</option>
                            <option value="mme">{{ pll__('Mme') }}</option>
                        </select>
                    </div>

                    <label for="first-name"></label>
                    <input type="text" id="first-name" placeholder="{{ pll__('Prénom*') }}">
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="{{ pll__('Nom*') }}">
                </div>
                <div class="contact-row">
                    <label for="compagny-name"></label>
                    <input type="text" id="compagny-name" placeholder="{{ pll__('Entreprise*') }}">
                    <label for="phone"></label>
                    <input type="text" id="compagny-phone" placeholder="{{ pll__('Téléphone') }}">
                </div>
                <div class="contact-row">
                    <label for="email"></label>
                    <input type="email" id="email" placeholder="{{ pll__('Courriel*') }}">
                </div>
                <div class="contact-row">
                    <button type="submit" class="submit-btn">{{ pll__('Soumettre') }}</button>
                </div>
            </div>
        </div>
    </div>
</section>
