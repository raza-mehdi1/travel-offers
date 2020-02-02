@if(request()->session()->has('status'))
    <div class="alert alert-{{request()->session()->get('status')}} alert-dismissible">
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
        <h5><i class="icon fas fa-{{ request()->session()->get('status') == 'success' ? 'check' : 'times' }}"></i> Alert!</h5>
        {{request()->session()->get('message')}}
    </div>
@endif
