@if ($item->tripadvisorUrl()->isNotEmpty())
    <a href="{{ $item->tripadvisorUrl() }}" target="_blank" title="{{ $item->title() }} on TripAdvisor">
        <i class="fa-social fa fa-tripadvisor icon-lg"></i>
    </a>
@endif
@if ($item->facebookUrl()->isNotEmpty())
    <a href="{{ $item->facebookUrl() }}" target="_blank" title="{{ $item->title() }} on Facebook">
        <i class="fa-social fa fa-facebook-square icon-lg"></i>
    </a>
@endif
@if ($item->twitterUrl()->isNotEmpty())
    <a href="{{ $item->twitterUrl() }}" target="_blank" title="{{ $item->title() }} on Twitter">
        <i class="fa-social fa fa-twitter-square icon-lg"></i>
    </a>
@endif
@if ($item->instagramUrl()->isNotEmpty())
    <a href="{{ $item->instagramUrl() }}" target="_blank" title="{{ $item->title() }} on Instagram">
        <i class="fa-social fa fa-instagram icon-lg"></i>
    </a>
@endif