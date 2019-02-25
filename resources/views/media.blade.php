<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$name}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        @include('admin::form.error')
        <div data-id="preview-{{$name}}" style="margin-bottom:10px;">
            @if(old($column, $value) && is_image($value))
                <img src="/{{$value}}" alt="Attachment" style="width:100px;"/>
            @endif
        </div>

        <div class="input-group" style="margin-bottom: 5px;">
            <span class="input-group-addon"><i class="fa fa-file"></i></span>
            <input type="text" class="form-control {{$name}}" readonly data-id="media-{{$name}}" name="{{$name}}" value="{{old($column, $value)}}">
        </div>

        <div class="controls">
            <button class="btn btn-info btn-sm select-elfinder-file" data-id="{{$name}}" type="button">选择文件</button>
        </div>

        @include('admin::form.help-block')
    </div>
</div>