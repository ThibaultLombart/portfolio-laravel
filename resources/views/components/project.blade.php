<div class="case">
    <h3>{{$project['title']}}</h3>
    <p>Date : {{$project['date']}}</p>

    <p class="gras">Types : </p>
    <div class="type-total">
        @foreach($project['types'] as $type)
            <div class="type">
                <img src="{{Vite::asset($type['logo'])}}" alt="{{$type['name']}}">
                <p>{{$type['name']}}</p>
            </div>
        @endforeach
    </div>

    <p class="gras">{{__("Project")}} : </p>
    <div class="type-total">
        @foreach($project['project'] as $type)
            <div class="type">
                <img src="{{Vite::asset($type['logo'])}}" alt="{{$type['name']}}">
                <p>{{$type['name']}}</p>
            </div>
        @endforeach
    </div>

    <p class="gras">{{__("State")}} : </p>
    <div class="type-total">
        @foreach($project['state'] as $type)
            <div class="type">
                <img src="{{Vite::asset($type['logo'])}}" alt="{{$type['name']}}">
                <p>{{$type['name']}}</p>
            </div>
        @endforeach
    </div>

    <p class="gras">{{__('Short Description')}} : </p>
    <p>{{$project['description']}}</p>

    <p class="gras"> Illustration :</p>
    <img class="illustration" src="{{Storage::url($project['illustration'])}}" alt="Agenda">

    <button class="special-button" onclick="window.open({{$project['link']}}, '_blank');">
        @if($project['link-type'] == "github")
            <img src="{{Vite::asset('resources/pictures/projects/github.png')}}" alt="github">
            Go on Github
        @else
            Go on website
        @endif
    </button>
</div>
