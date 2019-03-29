@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible mb-2">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <span class="alert-icon"><i class="fa fa-exclamation-cirle"></i></span>
        <strong>{!! session()->pull('error') !!}</strong>
    </div>
@endif

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <span class="alert-icon"><i class="fa fa-check"></i></span>
        {!! session()->pull('success') !!}
    </div>
@endif