<!-- Block 16 - Timeline -->
<div class="timeline-main-container default-padding">
    <div class="timeline-bar">
        <div class="timeline-bar-line"></div>

        <div class="timeline-event-main-container">

            <!-- EVENT START -->
            @foreach($block->get_field('block_16_timeline_events') as $event)
            <div class="timeline-event-container">
                <div class="timeline-dot-container">
                    <img class="timeline-dot dot-right" src="{{ themosis_assets() }}/images/timeline-icon/dot.png" alt="">
                </div>
                <div class="event">
                    <div class="event-line"></div>
                    <div class="event-txt">
                        {!! wpautop($event->post_content) !!}
                    </div>
                </div>
            </div>
            @endforeach
            <!-- EVENT END -->
        </div>

    </div><!-- TIMELINE BAR END -->
</div>



