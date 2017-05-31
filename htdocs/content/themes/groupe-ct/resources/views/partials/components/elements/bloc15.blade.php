<div class="bloc-name row">
    <h1>BLOC #15 Équipe </h1>
</div>



<div class="default-padding">
    <div class="col-xs-12">

        <div class="toggle-main-container">
            <div class="toggle-content-header">
                <div class="toggle-title-container">
                    <h3 class="toggle-content-title" href="">Comité de direction</h3>
                </div>
                <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
                <div class="triangle-blue"></div>
                <a class="open-toggle-content" href="#"></a>
            </div>

            <div class="toggle-content">
                @for ($i = 1; $i <= 3; $i++)
                    {{-- job INFO START --}}
                    <div class="team-info-container">
                        {{-- BLUE BAR WITH TITLE END --}}
                        <div class="team-info-inner-container">
                            <img class="team-info-img" src="{{ themosis_assets() }}/images/team/team_nic_pinto.png" alt="">
                            <h3 class="team-info-name">Nicolas Pinto</h3>
                            <p class="info team-info-title">Vice-Président exécutif</p>
                            <a class="info team-info-phone" href="tel:#"><span>T :</span>450.967.3142 poste: 7101</a>
                            <a class="team-info-email" href="mailto:#">tbelanger@groupect.com</a>
                        </div>
                    </div>
                    {{-- job INFO END --}}
                @endfor
            </div>
        </div> <!-- toggle-main-container END -->

        <div class="toggle-main-container">
            <div class="toggle-content-header">
                <div class="toggle-title-container">
                    <h3 class="toggle-content-title" href="">Laval</h3>
                </div>
                <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
                <div class="triangle-blue"></div>
                <a class="open-toggle-content" href="#"></a>
            </div>

            <div class="toggle-content">
                @for ($i = 1; $i <= 8; $i++)
                    {{-- job INFO START --}}
                    <div class="team-info-container">
                        {{-- BLUE BAR WITH TITLE END --}}
                        <div class="team-info-inner-container">
                            <img class="team-info-img" src="{{ themosis_assets() }}/images/team/team_nic_pinto.png" alt="">
                            <h3 class="team-info-name">Karine Blondin-Bérubé CPA, CA</h3>
                            <p class="info team-info-title">Directrice des Finances et de l’Administration</p>
                            <a class="info team-info-phone" href="tel:#"><span>T :</span>450.967.3142 poste: 7101</a>
                            <a class="team-info-email" href="mailto:#">tbelanger@groupect.com</a>
                        </div>
                    </div>
                    {{-- job INFO END --}}
                @endfor
            </div>
        </div> <!-- toggle-main-container END -->

    </div>
</div>