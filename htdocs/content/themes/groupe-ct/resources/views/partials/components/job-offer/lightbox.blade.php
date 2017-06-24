<html>
<head>
    <?php wp_head(); ?>
</head>
<body style="background-color: white">
    <div id="global-container" style="margin: auto 30px !important;">
        <main>
            <div class="job-info-detailed-container">
                <div class="job-info-inner-container">
                    <h2 class="job-info-title">{{ $post->post_title }}</h2>
                    <p class="info job-info-office"><span><?php _e('Bureau rattaché', THEME_TEXTDOMAIN); ?> :</span>{{ $post->job_offer_office  }}</p>
                    <p class="info job-info-adresse"><span><?php _e('Lieu de travail', THEME_TEXTDOMAIN); ?> :</span>{{ $post->job_offer_location  }}</p>
                    <p class="info job-info-section"><span><?php _e('Département', THEME_TEXTDOMAIN); ?> :</span>{{ $post->job_offer_dept  }}</p>
                    <p class="info job-info-limit"><span><?php _e('Date limite pour postuler', THEME_TEXTDOMAIN); ?> :</span>{{ date('Y-m-d', strtotime($post->job_offer_deadline))  }}</p>

                    <div class="info job-info-description">
                    {!! wpautop($post->post_content) !!}
                    </div>

                    <div class="btn-container">
                        <a class="btn primary-btn-blue" href="mailto:#"><?php _e('postuler', THEME_TEXTDOMAIN); ?></a>
                    </div>
                </div>
            </div>

        </main>
    </div>
<?php wp_footer(); ?>
</body>
</html>

