<div id="section-mon-ct" class="toggle-main-container">
    <div class="toggle-content-header active-header">
        <div class="toggle-title-container">
            <h3 class="toggle-content-title" href="">{{ pll__('Commander des fournitures') }}</h3>
        </div>
        <img class="toggle-content-carret toggle-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
        <div class="triangle-blue toggle-triangle"></div>
        <a class="open-toggle-content" href="#"></a>
    </div>

    <div class="toggle-content open-content">
        <form id="form-fourniture" class="form-container">
            <div class="text-container col-xs-12">

                <p>
                    {{ pll__('Commandez rapidement et facilement des fournitures en remplissant le formulaire ci-dessous. Votre commande sera livrée dans un délai de 24 à 48 h ouvrable.') }}
                </p>
                <p>
                    {{ pll__('D’autres options s’offrent à vous. Contactez un agent par téléphone ou par courriel. Si vous êtes déjà un client de Groupe CT, nous vous recommandons d’utiliser le portail') }}
                    <a href="#section-mon-ct" class="form-link">{{ pll__('Mon CT.') }}</a>
                </p>
            </div>
            <div class="content-container">
                <div class="form-left-container col-md-6">

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <select name="fourniture-title" id="fourniture-title" class="tech-support-input select-support">
                            <option value=""  disabled selected hidden>{{ pll__('Titre*') }}</option>
                            <option value="m">{{ pll__('M.') }}</option>
                            <option value="mme">{{ pll__('Mme') }}</option>
                        </select>

                        <label for="fourniture-firstname"></label>
                        <input type="text" id="fourniture-firstname" class="tech-support-input" name="fourniture-firstname" placeholder="{{ pll__('Prénom*') }}">

                        <label for="fourniture-lastname"></label>
                        <input type="text" id="fourniture-lastname" class="tech-support-input" name="fourniture-lastname" placeholder="{{ pll__('Nom*') }}">
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="fourniture-email"></label>
                        <input type="email" id="fourniture-email" class="tech-support-input" name="fourniture-email" placeholder="{{ pll__('Courriel*') }}">

                        <label for="fourniture-phone"></label>
                        <input type="text" id="fourniture-phone" class="tech-support-input" name="fourniture-phone" placeholder="{{ pll__('Téléphone*') }}">

                        <label for="contact-ext"></label>
                        <input type="text" id="fourniture-ext" class="tech-support-input" name="fourniture-ext" placeholder="{{ pll__('Poste') }}">
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="fourniture-compagny-name"></label>
                        <input type="text" id="fourniture-compagny-name" class="tech-support-input" name="fourniture-compagny-name" placeholder="{{ pll__('Entreprise*') }}">


                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="fourniture-serial"></label>
                        <input type="text" id="fourniture-serial" class="tech-support-input" name="fourniture-serial" placeholder="{{ pll__('Numéro de série de l’appareil*') }}">
                        <input type="checkbox" name="fourniture-contract" id="fourniture-contract">
                        <label for="fourniture-contract">{{ pll__("Équipement sous contrat de service") }}</label>
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <select name="fourniture-office" id="fourniture-office" class="tech-support-input select-support">
                            <option value=""  disabled selected hidden>{{ pll__('Sélectionner votre point de service*') }}</option>
                            <option value="m">{{ pll__('Groupe CT - Grande région de Montréal') }}</option>
                            <option value="m">{{ pll__('Groupe CT - Grande région de Toronto') }}</option>
                            <option value="m">{{ pll__('SAC - Région de Québec') }}</option>
                            <option value="mme">{{ pll__('SAC - Région de la Beaucee') }}</option>
                        </select>
                    </div>


                </div> <!-- FORM LEFT END -->
                <div class="form-right-container col-md-6">
                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="fourniture-msg"></label>
                        <textarea name="fourniture-msg" id="fourniture-msg" class="tech-support-input" cols="30" rows="10" placeholder="{{ pll__('Détail de la commande (No# d’item, description, quantité, …)*') }}"></textarea>
                    </div>

                    <div class="form-submit">

                        <a class="submit-btn primary-btn-blue" href="#">{{ pll__('Soumettre ma demande') }}</a>
                        <span class="mention">*{{ pll__('Champ obligatoires') }}</span>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>




