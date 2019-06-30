<section>
    <div class="container section-title">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">{{ __("content.showcase.title") }}</h1>
                <p class="lead">{{ __("content.showcase.lead") }}</p>
            </div>
        </div>
    </div>
    <showcase-container>
        @for ($i = 0; $i < 12; $i++)
            <showcase-item thumbnail="/img/discord_bg.svg">
                Project {{ $i }}
            </showcase-item>
        @endfor
    </showcase-container>
</section>