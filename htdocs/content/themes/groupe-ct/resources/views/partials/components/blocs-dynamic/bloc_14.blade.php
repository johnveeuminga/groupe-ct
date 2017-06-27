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

                <a href="{{ get_permalink($job['bloc_14_job']->ID) }}" class="cta-see-more" data-lity><?php _e('en savoir plus', THEME_TEXTDOMAIN); ?></a>
                <a class="btn primary-btn-blue" href="mailto:{{ Option::get('hr', 'hrEmail') }}"><?php _e('postuler', THEME_TEXTDOMAIN); ?></a>
            </div>
        </div>
    </div>
    {{-- job INFO END --}}
@endforeach

