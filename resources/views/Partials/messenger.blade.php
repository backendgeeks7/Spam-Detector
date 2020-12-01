<div class="mt-5">
    @if(Session()->has('success'))
        <div class="alert alert-success" role="alert">
            {!! Session()->get('success') !!}
        </div>
    @elseif(Session()->has('info'))
        <div class="alert alert-info" role="alert">
            {!! Session()->get('info') !!}
        </div>
    @elseif(Session()->has('warning'))
        <div class="alert alert-warning" role="alert">
            {!! Session()->get('warning') !!}
        </div>
    @elseif(Session()->has('danger'))
        <div class="alert alert-danger" role="alert">
            {!! Session()->get('danger') !!}
        </div>
    @endif

    @if ($errors->any())
        <ul class="error-bag list-group">
            @foreach ($errors->all() as $error)
                <li class="">
                    <i class="fa fa-times-circle-o bg-red-50"></i> {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
</div>
