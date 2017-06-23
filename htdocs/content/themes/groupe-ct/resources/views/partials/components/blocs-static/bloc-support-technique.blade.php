<div class="bloc-name row">
    <h1>BLOC SUPPORT TECHNIQUE</h1>
</div>

<section class="tech-support-main-container default-padding default-width">


    <!----> <div id="section-mon-ct" class="toggle-main-container">
        <div class="toggle-content-header">
            <div class="toggle-title-container">
                <h3 class="toggle-content-title" href="">{{ pll__('Mon CT') }}</h3>
            </div>
            <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
            <div class="triangle-blue"></div>
            <a class="open-toggle-content" href="#"></a>
        </div>

        <div class="toggle-content">
            <form id="form-my-ct" class="form-container">
                <div class="text-container col-xs-12">
                    <p>
                        {{ pll__('Simple et efficace, Mon CT vous permet de placer un appel de service, transmettre vos compteurs,
                        demander un déménagement d’appareil et accéder à l’historique de votre facturation.
                        Choisissez votre point de service pour accéder à Mon CT.') }}
                    </p>
                </div>
                <div class="form-content-container">
                    <div class="form-left-container col-sm-6">
                        <a class="my-ct-link primary-btn-blue" href="#">{{ pll__('Groupe CT') }}</a>
                    </div>

                    <div class="form-right-container col-sm-6">
                        <a class="my-ct-link primary-btn-blue" href="#">{{ pll__('Solutions d\'affaires de la Capitale') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <form id="form-assistance" class="form-container">
        <div class="text-container col-xs-12">
            <p>
                {{ pll__('Pour toute demande d’assistance technique, veuillez remplir le formulaire ci-dessous. Si vous êtes déjà un client de Groupe CT,
                nous vous recommandons d’utiliser le portail ') }}<a href="#section-mon-ct" class="form-link">{{ pll__('Mon CT.') }}</a>
            </p>
        </div>
        <div class="form-left-container col-md-6">

            <!-- INPUT CONTAINER START -->
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

            <!-- INPUT CONTAINER START -->
            <div class="input-container">
                <label for="assistance-email"></label>
                <input type="email" id="assistance-email" class="tech-support-input" name="assistance-email" placeholder="{{ pll__('Courriel*') }}">

                <label for="assistance-phone"></label>
                <input type="text" id="assistance-phone" class="tech-support-input" name="assistance-phone" placeholder="{{ pll__('Téléphone*') }}">

                <label for="contact-ext"></label>
                <input type="text" id="assistance-ext" class="tech-support-input" name="assistance-ext" placeholder="{{ pll__('Poste') }}">
            </div>

            <!-- INPUT CONTAINER START -->
            <div class="input-container">
                <label for="assistance-compagny-name"></label>
                <input type="text" id="assistance-compagny-name" class="tech-support-input" name="assistance-compagny-name" placeholder="{{ pll__('Entreprise*') }}">

                <select name="assistance-office" id="assistance-office" class="tech-support-input">
                    <option value=""  disabled selected hidden>{{ pll__('Bureau*') }}</option>
                    <option value="m">{{ pll__('Groupe CT') }}</option>
                    <option value="m">{{ pll__('SAC - Bureau de Québec') }}</option>
                    <option value="mme">{{ pll__('SAC - Bureau de la Beaucee') }}</option>
                </select>
            </div>

            <!-- INPUT CONTAINER START -->
            <div class="input-container">
                <label for="assistance-serial"></label>
                <input type="text" id="assistance-serial" class="tech-support-input" name="assistance-serial" placeholder="{{ pll__('# de série*') }}">




            </div>
            <!-- INPUT CONTAINER START -->
            <div class="input-container">
                <span class="mention">{{ pll__("Heures d'ouverture") }}</span>
                <div class="opening">
                    <select name="assistance-opening01" id="assistance-opening01" class="tech-support-input assistance-opening">
                        <option value=""  disabled selected hidden>{{ pll__('Heures') }}</option>
                        @for ($i = 0; $i <= 24; $i++)
                            <option value="{{ $i  }}">{{ $i  }}</option>
                        @endfor
                    </select>
                    <select name="assistance-opening02" id="assistance-opening02" class="tech-support-input assistance-opening">
                        <option value=""  disabled selected hidden>{{ pll__('Minutes') }}</option>
                        @for ($i = 0; $i <= 30; $i++)
                            <option value="{{ $i  }}">{{ $i  }}</option>
                        @endfor
                    </select>
                </div>
                <!-- <label for="">{{ pll__('à') }}</label> -->
                <span class="mention">{{ pll__("Heures de fermeture") }}</span>
                <div class="opening">

                    <select name="assistance-opening03" id="assistance-opening03" class="tech-support-input assistance-opening">
                        <option value=""  disabled selected hidden>{{ pll__('Heure') }}</option>
                        @for ($i = 0; $i <= 24; $i++)
                            <option value="{{ $i  }}">{{ $i  }}</option>
                        @endfor
                    </select>
                    <select name="assistance-opening04" id="assistance-opening04" class="tech-support-input assistance-opening">
                        <option value=""  disabled selected hidden>{{ pll__('Minutes') }}</option>
                        @for ($i = 0; $i <= 24; $i++)
                            <option value="{{ $i  }}">{{ $i  }}</option>
                        @endfor
                    </select>
                </div>
                <input type="checkbox" name="assistance-closed" id="assistance-closed">
                <label for="assistance-closed">{{ pll__("Bureau fermé le midi") }}</label>
            </div>


        </div>
        <div class="form-right-container col-md-6">
            <!-- INPUT CONTAINER START -->
            <div class="input-container">
                <label for="assistance-msg"></label>
                <textarea name="assistance-msg" id="assistance-msg" class="tech-support-input" cols="30" rows="10" placeholder="{{ pll__('Description du problème*') }}"></textarea>
            </div>
            <!-- INPUT CONTAINER START -->
            <div class="input-container">
                <div class="assistance-upload-container tech-support-input">
                    <span class="mention">{{ pll__("Joindre un test d'impression") }}</span>
                    <input type="file" name="assistance-upload" id="assistance-upload" class="tech-support-input">
                    <label for="assistance-upload">{{ pll__("Parcourir") }}</label>
                </div>
                <span class="mention">{{ pll__('Poids maximal de X Mo') }}</span>
            </div>
            <div class="form-submit">

                <a class="submit-btn primary-btn-blue" href="#">{{ pll__('Soumettre ma demande') }}</a>
                <span class="mention">*{{ pll__('Champ obligatoires') }}</span>
            </div>
        </div>
    </form>




</section>


