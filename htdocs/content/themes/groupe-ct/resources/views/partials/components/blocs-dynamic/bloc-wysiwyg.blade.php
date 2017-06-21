@if (isset($content))
    <section class="publication-single-main-container default-padding default-width">
        <div class="publication-container">
            <div class="publication-content-container">
                <div class="wysiwyg-container">
                    {!! $content !!}
               </div>
            </div>
        </div>
    </section>
@endif