<div id="section-mon-ct" class="toggle-main-container">
    <div class="toggle-content-header">
        <div class="toggle-title-container">
            <h3 class="toggle-content-title" href="">{{ pll__('Compléter une demande d\'assistance') }}</h3>
        </div>
        <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
        <div class="triangle-blue"></div>
        <a class="open-toggle-content" href="#"></a>
    </div>

    <div class="toggle-content">
        <form id="form-assistance" class="form-container">
            <div class="text-container col-xs-12">

                <p>
                    {{ pll__('Pour toute demande d’assistance technique, veuillez remplir le formulaire ci-dessous. Si vous êtes déjà un client de Groupe CT,
                    nous vous recommandons d’utiliser le portail ') }}<a href="#section-mon-ct" class="form-link">{{ pll__('Mon CT.') }}</a>
                </p>
            </div>
            <div class="content-container">
                <div class="form-left-container col-md-6">

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <select name="assistance-title" id="assistance-title" class="tech-support-input select-support">
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

                        <select name="assistance-office" id="assistance-office" class="tech-support-input select-support">
                            <option value=""  disabled selected hidden>{{ pll__('Sélectionner votre point de service*') }}</option>
                            <option value="m">{{ pll__('Groupe CT') }}</option>
                            <option value="m">{{ pll__('SAC - Bureau de Québec') }}</option>
                            <option value="mme">{{ pll__('SAC - Bureau de la Beauce') }}</option>
                        </select>
                    </div>

                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">
                        <label for="assistance-serial"></label>
                        <input type="text" id="assistance-serial" class="tech-support-input" name="assistance-serial" placeholder="{{ pll__('Numéro de série de l’appareil*') }}">
                    </div>


                    <!-- INPUT CONTAINER START -->
                    <div class="input-container">

                        <div class="opening-main-container col-sm-12 no-padding">
                            <div class="opening">
                                <span class="mention">{{ pll__("Heures d'ouverture") }}</span>
                                <select name="assistance-opening01" id="assistance-opening01" class="tech-support-input select-support assistance-opening">
                                    <option value=""  disabled selected hidden>{{ pll__('Heures') }}</option>
                                    @for ($i = 0; $i <= 24; $i++)
                                        <option value="{{ $i  }}">{{ $i  }}</option>
                                    @endfor
                                </select>

                                <select name="assistance-opening02" id="assistance-opening02" class="tech-support-input select-support assistance-opening">
                                    <option value=""  disabled selected hidden>{{ pll__('Minutes') }}</option>
                                    @for ($i = 0; $i <= 30; $i++)
                                        <option value="{{ $i  }}">{{ $i  }}</option>
                                    @endfor
                                </select>
                            </div>
                            <!--  -->
                            <label class="hour-to" for="">{{ pll__('À') }}</label>
                            <div class="opening">
                                <span class="mention">{{ pll__("Heures de fermeture") }}</span>
                                <select name="assistance-opening03" id="assistance-opening03" class="tech-support-input select-support assistance-opening">
                                    <option value=""  disabled selected hidden>{{ pll__('Heure') }}</option>
                                    @for ($i = 0; $i <= 24; $i++)
                                        <option value="{{ $i  }}">{{ $i  }}</option>
                                    @endfor
                                </select>
                                <select name="assistance-opening04" id="assistance-opening04" class="tech-support-input select-support assistance-opening">
                                    <option value=""  disabled selected hidden>{{ pll__('Minutes') }}</option>
                                    @for ($i = 0; $i <= 24; $i++)
                                        <option value="{{ $i  }}">{{ $i  }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>  <!-- OPENING MAIN CONTAINER -->
                        <input type="checkbox" name="assistance-closed" id="assistance-closed">
                        <label for="assistance-closed">{{ pll__("Bureau fermé le midi") }}</label>
                    </div>

                </div> <!-- FORM LEFT END -->
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
                            <label class="btn-upload" for="assistance-upload">{{ pll__("Parcourir") }}</label>
                        </div>
                        <span class="mention">{{ pll__('Poids maximal de X Mo') }}</span>
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

