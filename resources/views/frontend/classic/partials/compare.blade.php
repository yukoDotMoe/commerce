<a href="{{ route('compare') }}" class="d-flex align-items-center text-reset">
    <i class="la la-refresh la-2x opacity-80"></i>
    <span class="flex-grow-1 ml-1">
        <span class="badge badge-primary badge-inline badge-pill">@if(Session::has('compare')) {{ count(Session::get('compare'))}} @else 0 @endif</span>
        <span class="nav-box-text d-none d-xl-block opacity-70">{{ translate('compare') }}</span>
    </span>
</a>