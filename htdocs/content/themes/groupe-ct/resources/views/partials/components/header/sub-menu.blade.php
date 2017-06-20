<div class="sub-menu-main-container">

    <div class="sub-menu-container nl1 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title"></h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-3 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_0_APPROCHE_CONSEIL) }}"><?= __('Un accompagnement sur mesure adapté à votre entreprise', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE])
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl2 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS) }}"><?= __('Des solutions qui travaillent en synergie', GROUPE_CT) ?></a></h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-3 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) }}"><?= __('Équipements d\'impression', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_4_FOURNITURES])
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-center col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_2_1_PARC_IMPRESSION) }}"><?= __('Services d\'impression gérés', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_1_PARC_IMPRESSION])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_2_RECUPERATION_COUT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_3_FOLLOW_ME_PRINTING])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_4_AUTOMATISATION_FLUX])
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-right col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE) }}"><?= __('Gestion électronique des documents', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_2_NUMERISATION_TRAITEMENT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_3_ARCHIVAGE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_4_AUTOMATISATION_PROCESSUS])
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl3 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title"></h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-3 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}"><?= __('L\'Assistance technique CT : l\'efficacité sur toute la ligne', GROUPE_CT) ?></a></h3>
                </div>

                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= __('Accéder à Mon CT', GROUPE_CT) ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= __('Compléter une demande d’assistance', GROUPE_CT) ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= __('Commander des fournitures', GROUPE_CT) ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= __('Contacter le service à la clientèle', GROUPE_CT) ?></a></li>
                    <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= __('Fournir une lecture de compteurs', GROUPE_CT) ?></a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl4 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title"></h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-3 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_0_A_PROPOS) }}"><?= __('Une entreprise à taille humaine', GROUPE_CT) ?></a></h3>
                </div>
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
        </div>
    </div>

</div> <!-- SUB MENU MAIN CONTAINER END -->

