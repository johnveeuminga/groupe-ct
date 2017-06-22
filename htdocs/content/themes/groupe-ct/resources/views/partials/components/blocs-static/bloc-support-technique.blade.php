<div class="bloc-name row">
    <h1>BLOC SUPPORT TECHNIQUE</h1>
</div>

<section class="tech-support-main-container default-padding default-width">


    <!----> <div class="toggle-main-container">
        <div class="toggle-content-header">
            <div class="toggle-title-container">
                <h3 class="toggle-content-title" href="">{{ pll__('Mon environnement') }}</h3>
            </div>
            <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
            <div class="triangle-blue"></div>
            <a class="open-toggle-content" href="#"></a>
        </div>

        <div class="toggle-content">
            <form id="form-env-container" class="form-container">
                <div class="form-left-container col-md-6">
                    <p>
                        {{ pll__('Mon Environnement vous permet d’accéder à un seul endroit à toutes vos factures en temps réel, de compléter un
                        appel de service, soumettre une lecture de compteur et faire une commande de cartouche.') }}
                    </p>

                    <p>
                    {{ pll__('Vous aurez besoin d’un nom d’utilisateur et de votre mot de passe.') }}
                        <span class="isBold">{{ pll__('euillez cliquer sur la division à laquelle vous vous rapportez pour votre entente de service.') }}V</span>
                    </p>
                </div>
                <div class="form-right-container col-md-6">
                    <div class="input-container">
                        <label for="env-division"></label>
                        <select id="env-division" name="env-division" class="tech-support-input fullWidth">
                            <option value="" disabled selected hidden>{{ pll__('Votre division') }}</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                        <label for="env-username"></label>
                    </div>
                    <div class="input-container">
                        <input type="text" id="env-username" class="tech-support-input" name="env-username" placeholder="{{ pll__('Nom d\'utilisateur*') }}">
                        <label for="env-psw"></label>
                        <input type="text" id="env-psw" class="tech-support-input" name="env-psw" placeholder="{{ pll__('Mot de passe*') }}">
                    </div>
                    <div class="form-footer">
                        <a class="link-forgot-psw" href="#">{{ pll__('Mot de passe oublié?') }}</a>
                        <a class="submit-btn primary-btn-blue" href="#">{{ pll__('Soumettre') }}</a>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <form id="form-assistance-container" class="form-container">
        <div class="text-container col-xs-12">
            <p>
                {{ pll__('Pour toute demande d’assistance technique, veuillez remplir le formulaire ci-dessous. Si vous êtes déjà un client de Groupe CT,
                nous vous recommandons d’utiliser le portail ') }}<a href="#">{{ pll__('Mon Environnement.') }}</a>
            </p>
        </div>
        <div class="form-left-container col-md-6">

            <div class="input-container">
                <select name="assistance-title" id="assistance-title" class="tech-support-input">
                    <option value=""  disabled selected hidden>{{ pll__('Titre*') }}</option>
                    <option value="m">{{ pll__('M.') }}</option>
                    <option value="mme">{{ pll__('Mme') }}</option>
                </select>

                <label for="assistance-firstname"></label>
                <input type="text" id="assistance-firstname" class="tech-support-input" name="assistance-firstname" placeholder="{{ pll__('Prénom*') }}">
                <label for="assistance-lastname"></label>
                <input type="text" id="assistance-lastname" class="tech-support-input" name="assistance-lastname" placeholder="{{ pll__('Nom*') }}">
            </div>

            <div class="input-container">
                <label for="assistance-compagny-name"></label>
                <input type="text" id="assistance-compagny-name" class="tech-support-input" name="assistance-compagny-name" placeholder="{{ pll__('Entreprise*') }}">
                <label for="assistance-email"></label>
                <input type="email" id="assistance-email" class="tech-support-input" name="assistance-email" placeholder="{{ pll__('Courriel*') }}">
            </div>

            <div class="input-container">
                <label for="assistance-phone"></label>
                <input type="text" id="assistance-phone" class="tech-support-input" name="assistance-phone" placeholder="{{ pll__('Téléphone*') }}">
                <label for="contact-ext"></label>
                <input type="text" id="assistance-ext" class="tech-support-input" name="assistance-ext" placeholder="{{ pll__('Poste') }}">
            </div>


        </div>
        <div class="form-right-container col-md-6">

            <div class="form-footer">

                <a class="submit-btn primary-btn-blue" href="#">{{ pll__('Soumettre') }}</a>
            </div>

        </div>
    </form>



</section>


