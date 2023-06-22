@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('admin.project.store')}}" method="POST">
                    @csrf

                    {{-- da aggiungere l'old quando si sbaglia a compilare il form per non reinserire i dati di nuovo --}}

                    {{-- project title --}}
                    <label for="title" class="form-label">Project Title</label>
                    <input type="text" class="form-control mb-4 @error('title') is-invalid @enderror" id="title" name="title" max="25" required>
                    {{-- error --}}
                    {{-- @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}

                    {{-- project description --}}
                    <label for="description" class="form-label">Project Description</label>
                    <textarea class="form-control mb-4 @error('title') is-invalid @enderror" name="description" id="description" rows="3"></textarea>

                    {{-- project buyer --}}
                    <label for="buyer" class="form-label">Project buyer</label>
                    <input type="text" class="form-control mb-4 @error('buyer') is-invalid @enderror" id="buyer" name="buyer" max="25" required>
                    
                    {{-- project date --}}
                    <label for="project_date" class="form-label">Project Date</label>
                    <input type="date" class="form-control mb-4" id="project_date" name="project_date" placeholder="Es: 2020-10-06">

                    {{-- programming languages --}}
                    <label for="programming_languages" class="form-label">Project programming_languages</label>
                    <input type="text" class="form-control mb-4 @error('programming_languages') is-invalid @enderror" id="programming_languages" name="programming_languages" max="25" required>

                    {{-- project link --}}
                    <label for="link" class="form-label">Project Link</label>
                    <textarea class="form-control mb-4 @error('title') is-invalid @enderror" name="link" id="link" rows="3"></textarea>
                   

                    <button type="submit" class="d-block btn btn-primary">Create</button>

                    <div class="form-group mb-3">
                        <label for="project-types" class="form-label my-2">Tipologia</label>
                        <select name="type_id" id="project-types" class="form-select ">
                            @foreach ($types as $el)
                            <option value="{{$el->id}}">{{$el->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection