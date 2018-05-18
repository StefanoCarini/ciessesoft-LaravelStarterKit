<div id="page-wrapper" style="padding-top: 70px">
    <div class="container-fluid">
        @if(Session::has('flash_message'))
            <div class="container">
                <div class="alert alert-info"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</div>