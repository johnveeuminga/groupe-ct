<!-- Block 14 - Job Offer -->
<div class="toggle-main-container default-padding default-width">
    <div class="toggle-content-header">
        <div class="toggle-title-container">
            <h3 class="toggle-content-title" href="#"><?php _e('Emplois en vedette', GROUPE_CT); ?></h3>
        </div>
        <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
        <div class="triangle-blue"></div>
        <a class="open-toggle-content" href="#"></a>
    </div>

    <div class="toggle-content">
        @foreach($block->get_field('bloc_14_jobs') as $job)
        {{-- job INFO START --}}
        <div class="job-info-container">
            {{-- BLUE BAR WITH TITLE END --}}
            <div class="job-info-inner-container">
                <h3 class="job-info-title">{{ $job['bloc_14_job']->post_title }}</h3>
                <p class="info job-info-office"><span><?php _e('Bureau rattaché', THEME_TEXTDOMAIN); ?> :</span>{{ $job['bloc_14_job']->job_offer_office  }}</p>
                <p class="info job-info-adresse"><span><?php _e('Lieu de travail', THEME_TEXTDOMAIN); ?> :</span>{{ $job['bloc_14_job']->job_offer_location  }}</p>
                <p class="info job-info-section"><span><?php _e('Département', THEME_TEXTDOMAIN); ?> :</span>{{ $job['bloc_14_job']->job_offer_dept  }}</p>
                <p class="info job-info-limit"><span><?php _e('Date limite pour postuler', THEME_TEXTDOMAIN); ?> :</span>{{ date('Y-m-d', strtotime($job['bloc_14_job']->job_offer_deadline))  }}</p>

                <div class="btn-container">
                    <!-- FIXME modal window missing!! -->
                    <a href="#" class="cta-see-more"><?php _e('en savoir plus', THEME_TEXTDOMAIN); ?></a>
                    <!-- FIXME email missing!! -->
                    <a class="btn primary-btn-blue" href="mailto:#"><?php _e('postuler', THEME_TEXTDOMAIN); ?></a>
                </div>
            </div>
        </div>
       {{-- job INFO END --}}
        @endforeach
   </div>
</div>


