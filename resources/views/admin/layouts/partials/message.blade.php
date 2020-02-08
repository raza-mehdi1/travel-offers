@if(request()->session()->has('status'))
    <div class="alert alert-{{request()->session()->get('status') == 'error' ? 'danger' : request()->session()->get('status')}} alert-dismissible">
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
        <h5><i class="icon fas fa-{{ request()->session()->get('status') == 'success' ? 'check' : 'times' }}"></i> {{ucwords(request()->session()->get('status'))}}!</h5>
        {{request()->session()->get('message')}}
    </div>
@endif

@if(!empty($errors->all()))
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-{{ request()->session()->get('status') == 'success' ? 'check' : 'times' }}"></i> Errors!</h5>
        <ul>
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
