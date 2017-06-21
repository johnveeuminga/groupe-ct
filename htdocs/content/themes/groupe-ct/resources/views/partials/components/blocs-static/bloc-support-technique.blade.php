<div class="bloc-name row">
    <h1>BLOC SUPPORT TECHNIQUE</h1>
</div>

<section class="tech-support-main-container default-padding default-width">


    <div class="toggle-main-container default-padding default-width">
        <div class="toggle-content-header">
            <div class="toggle-title-container">
                <h3 class="toggle-content-title" href="">{{ pll__('Mon environnement') }}</h3>
            </div>
            <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
            <div class="triangle-blue"></div>
            <a class="open-toggle-content" href="#"></a>
        </div>

        <div class="toggle-content">

            <div class="form-env-container form-container">
                <div class="form-left-container col-xs-12 col-sm-6">
                    <p>Mon Environnement vous permet d’accéder à un seul endroit à toutes vos factures en temps réel, de compléter un
                        appel de service, soumettre une lecture de compteur et faire une commande de cartouche.
                    </p>

                    <p>Vous aurez besoin d’un nom d’utilisateur et de votre mot de passe.
                        <span class="isBold">Veuillez cliquer sur la division à laquelle vous vous rapportez pour votre entente de service.<span>
                    </p>
                </div>
                <div class="form-right-container col-xs-12 col-sm-6">
                    <div class="input-container">
                        <label for="env-division"></label>
                        <select id="env-division" name="env-division" class="tech-support-input">
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
            </div>
        </div>
    </div>



</section>

