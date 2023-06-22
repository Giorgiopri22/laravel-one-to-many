@extends ('layouts.app')

@section('content')
<div class='container'>
    @foreach ($projects as $el)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title mb-3 text-center">{{ $el->title }}</h2>
                <h6 class="card-subtitle mb-2 text-body-secondary text-center">Project numero: </h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Description</span>: {{ $el->description }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Technologies</span>: {{ $el->programming_languages }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Link</span>:<a href="{{$el->link}}" target="_blank" class="ms-1 card-link">GitHub</a></h6>
            </div>
        </div>
    @endforeach
</div>
@endsection