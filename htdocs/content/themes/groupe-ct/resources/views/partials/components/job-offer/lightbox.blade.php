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
                    @if(!empty($job['bloc_14_job']->job_offer_office))<p class="info job-info-office"><span>{{ pll__('Bureau rattaché :') }}</span>{{ $job['bloc_14_job']->job_offer_office  }}</p>@endif
                    @if(!empty($job['bloc_14_job']->job_offer_office))<p class="info job-info-adresse"><span>{{ pll__('Lieu de travail :') }}</span>{{ $job['bloc_14_job']->job_offer_location  }}</p>@endif
                    @if(!empty($job['bloc_14_job']->job_offer_office))<p class="info job-info-section"><span>{{ pll__('Département :') }}</span>{{ $job['bloc_14_job']->job_offer_dept  }}</p>@endif
                    @if(!empty($job['bloc_14_job']->job_offer_office))<p class="info job-info-limit"><span>{{ pll__('Date limite pour postuler :') }}</span>{{ $job['bloc_14_job']->job_offer_deadline }}</p>@endif

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

