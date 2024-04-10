<a href="{{ route('wishlists.index') }}" class="d-flex align-items-center text-reset">
        <i class="la la-heart-o la-2x opacity-80"></i>
        <span class="flex-grow-1 ml-1">
            <span class="badge badge-primary badge-inline badge-pill"> @if(Auth::check() && count(Auth::user()->wishlists)>0) {{ count(Auth::user()->wishlists)}} @else 0 @endif</span>
            <span class="nav-box-text d-none d-xl-block opacity-70">Danh sách yêu thích</span>
        </span>
</a>
