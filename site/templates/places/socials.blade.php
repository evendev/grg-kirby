@if ($item->tripadvisorUrl()->isNotEmpty())
    <a class="social-icon" href="{{ $item->tripadvisorUrl() }}" target="_blank" title="{{ $item->title() }} on TripAdvisor">
        <i class="fa fa-tripadvisor icon-lg"></i>
    </a>
@endif
@if ($item->facebookUrl()->isNotEmpty())
    <a class="social-icon" href="{{ $item->facebookUrl() }}" target="_blank" title="{{ $item->title() }} on Facebook">
        <i class="fa fa-facebook-square icon-lg"></i>
    </a>
@endif
@if ($item->twitterUrl()->isNotEmpty())
    <a class="social-icon" href="{{ $item->twitterUrl() }}" target="_blank" title="{{ $item->title() }} on Twitter">
        <i class="fa fa-twitter-square icon-lg"></i>
    </a>
@endif
@if ($item->instagramUrl()->isNotEmpty())
    <a class="social-icon" href="{{ $item->instagramUrl() }}" target="_blank" title="{{ $item->title() }} on Instagram">
        <i class="fa fa-instagram icon-lg"></i>
    </a>
@endif