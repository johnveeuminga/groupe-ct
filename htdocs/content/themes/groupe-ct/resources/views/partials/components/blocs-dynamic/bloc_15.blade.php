<!-- Block 15 - Team -->
<div class="toggle-main-container default-padding default-width">
    @foreach ($block->get_field('bloc_15_teams') as $team)
    <div class="toggle-content-header">
        <div class="toggle-title-container">
            <h3 class="toggle-content-title" href="#">{{ $team['block_15_team_title'] }}</h3>
        </div>
        <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.png" alt="">
        <div class="triangle-blue"></div>
        <a class="open-toggle-content" href="#"></a>
    </div>

    <div class="toggle-content">
        @foreach($team['bloc_15_team_members'] as $member)
            {{-- job INFO START --}}
            <div class="team-info-container">
                {{-- BLUE BAR WITH TITLE END --}}
                <div class="team-info-inner-container">
                    <img class="team-info-img" src="{{ get_the_post_thumbnail_url($member, 'full') }}" alt="{{ get_the_post_thumbnail_caption($member) }}">
                    <h3 class="team-info-name">{{ $member['bloc_15_team_member']->post_title }}</h3>
                    <p class="info team-info-title">{{ $member['bloc_15_team_member']->team_member_title }}</p>
                    <a class="info team-info-phone" href="tel:{{ $member['bloc_15_team_member']->team_member_phone }}"><span>T :</span>{{ $member['bloc_15_team_member']->team_member_phone }} <?php _e('poste:', 'GROUPE-CT'); ?> {{ $member['bloc_15_team_member']->team_member_position }}</a>
                    <a class="team-info-email" href="mailto:{{ $member['bloc_15_team_member']->team_member_email }}">{{ $member['bloc_15_team_member']->team_member_email }}</a>
                </div>
            </div>
            {{-- job INFO END --}}
        @endforeach
    </div>
    @endforeach
</div> <!-- toggle-main-container END -->