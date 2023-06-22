@extends ('layouts.app')

@section('content')
<div class='container d-flex justify-content-between align-items-start flex-wrap mt-5'>
    @foreach ($projects as $el)
        <div class="card p-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title mb-3 text-center">{{ $el->title }}</h2>
                <h6 class="card-subtitle mb-2 text-body-secondary text-center">Project numero: </h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Description</span>: {{ $el->description }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Technologies</span>: {{ $el->programming_languages }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Link</span>:<a href="{{$el->link}}" class="ms-1 card-link" target="_blank">GitHub</a></h6>
            </div>
            <a href="{{ route('admin.project.show',$el) }}" class="btn btn-outline-light">Open</a>
        </div>
    @endforeach
</div>
@endsection