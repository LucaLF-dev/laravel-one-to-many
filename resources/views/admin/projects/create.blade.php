@extends('layouts.app')

@section('content')
    <section>
        <h1>Projects Create</h1>
    </section>

<form action="{{route('admin.projects.store')}}" method="POST">
    @csrf



    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Aggiungi un titolo per il progetto">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Aggiungi una descrizione"></textarea>
    </div>


    <div>
        <input type="submit" class="btn btn-primary" value="Aggiungi">
    </div>


</form>
<div class="text-center">
    <button><a href="{{route('admin.projects.index')}}">Torna al Catalogo</a></button>

</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
