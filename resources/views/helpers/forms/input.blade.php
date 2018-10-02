
@if(!$item)
<div class="form-group row mt-5">
    <div class="col-sm-3">
        <label for="{{$key}}" class='mb-0' >{{$title}}</label>
        <span class='text-muted d-block'>{{$subtitle}}</span>
    </div>
    
    <div class="col-sm-9">
        {!! Form::text($key,
            old($key), 
            [
            'placeholder'=> $title,
            'class' => 'form-control '. ($errors->has($key) ? 'is-invalid' : '' ), 
            'id' => $key
        ])
        !!}

        @if ($errors->has($key))
            <div class="invalid-feedback">
                <strong>{{ $errors->first($key) }}</strong>
            </div>
        @endif
    </div>
</div>

@else

<div class="form-group row mt-5">
        <div class="col-sm-3">
            <label for="{{$key}}" class='mb-0' >{{$title}}</label>
            <span class='text-muted d-block'>{{$subtitle}}</span>
        </div>
        
        <div class="col-sm-9">
            {!! Form::text($key,
                old($key, $item), 
                [
                'placeholder'=> $title,
                'class' => 'form-control '. ($errors->has($key) ? 'is-invalid' : '' ), 
                'id' => $key
            ])
            !!}
    
            @if ($errors->has($key))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first($key) }}</strong>
                </div>
            @endif
        </div>
    </div>



@endif

<hr class="my-4 dashed">

