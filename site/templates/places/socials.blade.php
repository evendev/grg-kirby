@if ($item->facebookUrl()->isNotEmpty())
    <a href="{{ $item->facebookUrl() }}" target="_blank">
        <i class="fa fa-facebook-square icon-lg"></i>
    </a>
@endif
@if ($item->tripadvisorUrl()->isNotEmpty())
    <a href="{{ $item->tripadvisorUrl() }}" target="_blank">
        <i class="fa fa-tripadvisor icon-lg"></i>
    </a>
@endif
@if ($item->twitterUrl()->isNotEmpty())
    <a href="{{ $item->twitterUrl() }}" target="_blank">
        <i class="fa fa-twitter-square icon-lg"></i>
    </a>
@endif
@if ($item->instagramUrl()->isNotEmpty())
    <a href="{{ $item->instagramUrl() }}" target="_blank">
        <i class="fa fa-instagram icon-lg"></i>
    </a>
@endif