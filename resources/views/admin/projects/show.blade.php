@extends ('layouts.app')

@section('content')
<div class='container d-flex flex-column align-items-center justify-content-center mt-5'>
        <h2 class>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
        <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Buyer</span>: {{ $project->buyer }}</h6>
        <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Technologies</span>: {{ $project->programming_languages }}</h6>
        <h6 class="card-subtitle mb-2 text-body-secondary"><span class="text-decoration-underline">Link</span>:<a href="{{$project->link}}" target="_blank" class="ms-1 card-link">GitHub</a></h6>
        <div class="d-flex mt-3">
            <a class="me-2 btn btn-outline-light" href="{{route('admin.project.edit',$project)}}">Edit Project</a>
            <form action="{{route('admin.project.destroy', $project)}}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you sure you want to delete the project?')">Delete Project</button>
            </form>
        </div>
</div>
@endsection