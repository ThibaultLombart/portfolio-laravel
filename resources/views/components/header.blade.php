
    <a href="{{route('index')}}"><img src="{{Vite::asset('/resources/pictures/favicon.png')}}" alt="logo"></a>
    <p>Junior Developer</p>
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale != $current_locale)
            <a href="{{route('changeLanguage',[$available_locale])}}">
                <img src="{{Vite::asset('/resources/pictures/'. $locale_name .'.png')}}" alt="Flag">
            </a>
        @endif
    @endforeach
