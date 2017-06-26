<section class="publication-list-main-container default-padding default-width">

        <div class="publication-header-container">
            <h2 class="publication-header-title">{!! pll__('À la une,<br/>chez Groupe CT') !!}</h2>
        </div>

        <nav class="nav-cat-container">
            <p class="select-title">{{ pll__('Sélectionnez la catégorie de votre choix') }}</p>
            <ul class="menu-item-container">
                @foreach (get_terms('category') as $category)
                    @if ($category->name !== 'Uncategorized')
                        <li class="menu-item"><a class="primary-btn-grey" href="#" data-target="">{{ $category->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>

        <div class="publication-nav-container">
            <div class="publication-nav">
                <a class="publication-nav-item pagination active-pagination" href="#">1</a>
                <a class="publication-nav-item pagination" href="#">2</a>
                <a class="publication-nav-item pagination" href="#">3</a>
                <a class="publication-nav-item pagination" href="#">4</a>
                <a class="publication-nav-item pagination" href="#">5</a>
                <a class="publication-nav-item pagination next" href="#"><img src="{{ themosis_assets() }}/images/icon/chevron-right-grey.png" alt=""></a>
                <a class="publication-nav-item cta-pub-right" href="#">{{ pll__('Page suivante') }}</a>
            </div>
        </div>

        <!-- INSERT PUBLICATIONS HERE -->
        <div class="publication-main-container default-padding default-width">
            <?php $reverse = false; ?>
            @foreach ($posts as $post)
                <div class="publication-container @if($reverse) {{ 'reverse-elem' }} @endif"> <!-- reverse-elem : to swap img and text div -->
                    <div class="publication-img-container">

                        <?php $src = get_field('post_featured_image', $post->ID) ? get_field('post_standard_image', $post->ID)['url'] : themosis_assets() . '/images/img/img_pub01.png'; ?>
                        <img class="image-pub shadow" src="{{ $src }}">

                        <span></span>
                    </div>
                    <div class="buffer"></div>
                    <div class="publication-text-container">
                        <p class="publication-cat">{{ $post->category }}</p>
                        <h3 class="publication-title">{{ $post->post_title }}</h3>
                        @if (get_field('post_show_date', $post->ID))
                            <p class="publication-date">{{ get_the_date( 'd F Y', $post->ID) }}</p>
                        @endif
                        <p class="publication-text">{!! $post->post_excerpt !!}</p>
                        <a href="{{ $post->permalink }}" class="cta-see-more">{{ pll__('Lire la suite') }}</a>
                    </div>
                </div>
                <?php $reverse = !$reverse; ?>
            @endforeach
        </div>
        <!-- END OF PUBLICATIONS-->

        <div class="publication-nav-container">
            <div class="publication-nav">
                <a class="publication-nav-item pagination active-pagination" href="#">1</a>
                <a class="publication-nav-item pagination" href="#">2</a>
                <a class="publication-nav-item pagination" href="#">3</a>
                <a class="publication-nav-item pagination" href="#">4</a>
                <a class="publication-nav-item pagination" href="#">5</a>
                <a class="publication-nav-item pagination next" href="#"><img src="{{ themosis_assets() }}/images/icon/chevron-right-grey.png" alt=""></a>
                <a class="publication-nav-item cta-pub-right" href="#">{{ pll__('Page suivante') }}</a>
            </div>
        </div>

</section>