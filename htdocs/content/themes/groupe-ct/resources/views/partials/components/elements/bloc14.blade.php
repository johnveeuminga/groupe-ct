<div class="bloc-name row">
    <h1>BLOC #14 Nous joindre </h1>
</div>




<div class="toggle-main-container default-padding default-width">
   <div class="toggle-content-header">
       <div class="toggle-title-container">
           <h3 class="toggle-content-title" href="">EMPLOIS EN Vedette</h3>
       </div>
       <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
       <div class="triangle-blue"></div>
       <a class="open-toggle-content" href="#"></a>
   </div>

   <div class="toggle-content">

       @for ($i = 1; $i <= 5; $i++)
       {{-- job INFO START --}}
           <div class="job-info-container">
               {{-- BLUE BAR WITH TITLE END --}}
               <div class="job-info-inner-container">
                   <h3 class="job-info-title">Titre du poste lorem ipsum dolor isit amet</h3>
                   <p class="info job-info-office"><span><?php _e('Bureau rattaché', THEME_TEXTDOMAIN); ?> :</span>Bureau de Québec</p>
                   <p class="info job-info-adresse"><span><?php _e('Lieu de travail', THEME_TEXTDOMAIN); ?> :</span>Ville, Province</p>
                   <p class="info job-info-section"><span><?php _e('Département', THEME_TEXTDOMAIN); ?> :</span>Administration, comptabilité, Marketing, Soutien technique, etc.</p>
                   <p class="info job-info-limit"><span><?php _e('Date limite pour postuler', THEME_TEXTDOMAIN); ?> :</span>00-00-0000</p>

                   <div class="btn-container">
                       <a href="mailto:#" class="cta-see-more"><?php _e('en savoir plus', THEME_TEXTDOMAIN); ?></a>
                       <a class="btn primary-btn-blue" href="#"><?php _e('postuler', THEME_TEXTDOMAIN); ?></a>
                   </div>
               </div>
           </div>
       {{-- job INFO END --}}
        @endfor
   </div>
</div>


