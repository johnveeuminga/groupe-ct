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
                    <h3 class="nav-section-title">Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-right col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl3 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title">Le meilleur de l’industrie sous un même toît</h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-3 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">3 Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Donec lacus mauris</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Nullam ante</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Etiam porttitor consectetur </a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Mauris commodo</a></li>
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-center col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-right col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl4 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title">Le meilleur de l’industrie sous un même toît</h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-3 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">4 Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Donec lacus mauris</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Nullam ante</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Etiam porttitor consectetur </a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Mauris commodo</a></li>
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-center col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-right col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl5 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title">Le meilleur de l’industrie sous un même toît</h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-3 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">5 Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Donec lacus mauris</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Nullam ante</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Etiam porttitor consectetur </a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Mauris commodo</a></li>
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-center col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-right col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title">Un accompagnement sur mesure selon votre environnement</h3>
                </div>
                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                    <li class="menu-item"><a class="nav-link" href="#">Sur mesure selon vos besoins</a></li>
                </ul>
            </nav>
        </div>
    </div>

</div> <!-- SUB MENU MAIN CONTAINER END -->

