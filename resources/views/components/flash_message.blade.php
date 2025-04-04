@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block mx-2">
        <div class="flex mx-3">
            <div class="self-center">
                <strong>{{ $message }}</strong>
            </div>
            <div class="flex-auto"></div>
            <div class="self-center">
                <button type="button" onclick="window.location.reload(true)" class="close text-lg" data-dismiss="alert">×</button>
            </div>
        </div>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block mx-2">
        <div class="flex mx-3">
            <div class="self-center">
                <strong>{{ $message }}</strong>
            </div>
            <div class="flex-auto"></div>
            <div class="self-center">
                <button type="button" onclick="window.location.reload(true)" class="close text-lg" data-dismiss="alert">×</button>
            </div>
        </div>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block mx-2">
        <div class="flex mx-3">
            <div class="self-center">
                <strong>{{ $message }}</strong>
            </div>
            <div class="flex-auto"></div>
            <div class="self-center">
                <button type="button" onclick="window.location.reload(true)" class="close text-lg" data-dismiss="alert">×</button>
            </div>
        </div>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block mx-2">
        <div class="flex mx-3">
            <div class="self-center">
                <strong>{{ $message }}</strong>
            </div>
            <div class="flex-auto"></div>
            <div class="self-center">
                <button type="button" onclick="window.location.reload(true)" class="close text-lg" data-dismiss="alert">×</button>
            </div>
        </div>
    </div>
@endif
