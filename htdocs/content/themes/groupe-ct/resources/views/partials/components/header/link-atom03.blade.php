<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>

    <div class="sub-menu-container-mobile nl3">

        <div class="nav-section-title-container">
            <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}"><?= pll__('L\'Assistance technique CT : l\'efficacité sur toute la ligne', GROUPE_CT) ?></a></h3>
        </div>

        <nav class="nav-sub">
            <ul class="nav-link-container">
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Accéder à Mon CT', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Compléter une demande d’assistance', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Commander des fournitures', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Contacter le service à la clientèle', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#TBD"><?= pll__('Fournir une lecture de compteurs', GROUPE_CT) ?></a></li>
            </ul>
        </nav>
    </div>
</li>