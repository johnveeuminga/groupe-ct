<div class="footer-main-container row">
    <div class="col-xs-10 col-xs-offset-1">

        <div class="footer-top">
            <nav class="footer-nav footer-nav-01">
                <h4 class="footer-nav-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_0_APPROCHE_CONSEIL) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_1_0_APPROCHE_CONSEIL) }}</a></h4>

                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE])
                </ul>
            </nav>
            <nav class="footer-nav footer-nav-02">
                <h4 class="footer-nav-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS) }}</a></h4>
                <ul class="nav-link-container">

                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_2_1_PARC_IMPRESSION) }}"><?= pll__('Équipements d\'impression', GROUPE_CT) ?></a></li>
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_4_FOURNITURES])

                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_2_1_PARC_IMPRESSION) }}"><?= pll__('Services d\'impression gérés', GROUPE_CT) ?></a></li>
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_1_PARC_IMPRESSION])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_2_RECUPERATION_COUT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_3_FOLLOW_ME_PRINTING])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_4_AUTOMATISATION_FLUX])

                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE) }}"><?= pll__('Gestion électronique des documents', GROUPE_CT) ?></a></li>
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_2_NUMERISATION_TRAITEMENT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_3_ARCHIVAGE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_4_AUTOMATISATION_PROCESSUS])
                </ul>
            </nav>
            <nav class="footer-nav footer-nav-03">
                <h4 class="footer-nav-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_3_0_ASSISTANCE) }}</a></h4>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Accéder à Mon CT', GROUPE_CT) ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Compléter une demande d’assistance', GROUPE_CT) ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Commander des fournitures', GROUPE_CT) ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Contacter le service à la clientèle', GROUPE_CT) ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Fournir une lecture de compteurs', GROUPE_CT) ?></a></li>
                </ul>
            </nav>
            <nav class="footer-nav footer-nav-04">
                <h4 class="footer-nav-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_0_A_PROPOS) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_3_0_ASSISTANCE) }}</a></h4>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_1_MOT_DIRECTION])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_2_DIVISIONS])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_3_HISTORIQUE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_4_EQUIPE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_5_DEVELOPPEMENT_DURABLE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_6_CARRIERE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_7_NOUS_JOINDRE])
                </ul>
            </nav>

            <nav class="footer-nav contact">
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">{{ pll_current_language() === 'fr' ? 'English' : 'Français' }}</a></li>
                    <li class="menu-item"><a class="nav-link" href="#newsletter">{{ pll__('Infolettre') }}</a></li>
                </ul>
            </nav>

        </div>

        <div class="footer-bottom">

            <div class="social-media-container">

                <a class="social-link" href="https://www.linkedin.com/company/ct-conseil-et-technologie" target="_blank">
                    <img class="social-icon" src="{{ themosis_assets() }}/images/icon/icon-linked.png" alt="">
                    <img class="social-icon over" src="{{ themosis_assets() }}/images/icon/icon-over-linked.png" alt="">
                </a>

                <a class="social-link" href="https://www.facebook.com/GroupeCT/" target="_blank">
                    <img class="social-icon" src="{{ themosis_assets() }}/images/icon/icon-fb.png" alt="">
                    <img class="social-icon over" src="{{ themosis_assets() }}/images/icon/icon-over-fb.png" alt="">
                </a>

            </div>
            <div class="legal-container">
                <p>© <?php echo date("Y"); ?> &copy;&nbsp;{{ pll__('2017 Groupe C.T Tous droits réservé') }}</p>
                <a href="#">{{ pll__('Mentions légales') }}</a>
            </div>


        </div>

    </div>
</div>