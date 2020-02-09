@if(\Illuminate\Support\Str::contains(request()->route()->getName(), '.edit'))
    @if(!is_null($old))
        {{
            in_array($value, $old)
                ||
            in_array($value, @$editPageModelValuesArray)
                ?
            'selected'
                :
            ''
        }}
    @else
        {{
            in_array($value, @$editPageModelValuesArray)
                ?
            'selected'
                :
            ''
        }}
    @endif
@else
    @if(!is_null($old))
        {{in_array($value, $old) ? 'selected' : ''}}
    @endif
@endif
