@if (count($errors) > 0)
    <div class="notification is-danger">
        <button class="delete" onclick="closeAlert(event)"></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('flash_error'))
    <div class="notification is-danger">
        <button class="delete" onclick="closeAlert(event)"></button>
        {{ Session::get('flash_error') }}
        @if(Session::has('flash_id'))
        <p style="margin-top:10px;"><a href="#" onclick="show_client_details({{Session::get('flash_id')}});">View login details</a></p>
        @endif
    </div>
@endif


@if(Session::has('flash_success'))
    <div class="notification is-primary">
        <button class="delete" onclick="closeAlert(event)"></button>
        {{ Session::get('flash_success') }}
    </div>
@endif


