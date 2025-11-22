@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{  html()->label('Имя статьи', 'name') }}
{{  html()->input('text', 'name') }} <br>
<br>
{{  html()->label('Содержание', 'body') }}
{{  html()->textarea('body') }} <br>
<br>
