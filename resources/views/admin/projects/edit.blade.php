@extends('layouts.app')

@section('content')
    <section>
        <h1>Projects Edit</h1>
    </section>
    <form class="p-5" action="{{route('admin.projects.update', $project)}}" method="POST">
        @csrf
        @method('PUT')



        <div class="mb-4">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Modifica titolo per il progetto">
        </div>
        <div class="mb-4">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Modifica descrizione">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="typetype_id" class="form-label">Categorie</label>
            <select name="type_id" class="form-control" id="type_id">
              <option>Seleziona una categoria</option>
              @foreach($types as $type)
                <option @selected( old('type_id', $project->type->name) == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
              @endforeach
            </select>
          </div>

        <div>
            <input type="submit" class="btn btn-primary" value="Modifica">
        </div>


    </form>
    <div class="text-center">
        <button><a href="{{route('admin.projects.index')}}">Torna al Catalogo</a></button>

    </div>

@endsection
