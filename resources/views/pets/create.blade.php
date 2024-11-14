@extends('layouts.admin')
@section('content')
    <div class="container">

        <h1>Añadir Nueva Mascota</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul> 
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li> 
                    @endforeach
                </ul> 
            </div>
        @endif

        <form action="{{ route('pets.store') }}" method="post">
            @csrf
            <div class="form-groupt">
                <label for="nombre">Nombre de la mascota</label>
                <input for="text" name="nombre" class="form-control" value="{{ old('nombre', $pet->nombre ?? '') }}" required></input>
            </div>

            <div class="form-groupt">
                <label for="especie">Especie de la mascota</label>
                <input for="text" name="especie" class="form-control" value="{{ old('especie', $pet->especie ?? '') }}" required></input>
            </div>

            <div class="form-groupt">
                <label for="raza">Raza de la mascota</label>
                <input for="text" name="raza" class="form-control" value="{{ old('raza', $pet->raza ?? '') }}" required></input>
            </div>

            {{-- crear el input para la fecha de nacimiento de la mascota --}}

            <div class="form-groupt">
                <label for="cliente_id">Dueño de la mascota</label>
                <select name="cliente_id" class="form-control" required>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}"
                            {{ old('cliente_id', $pet->cliente_id ?? '') == $client->id ? 'selected' : '' }}>
                            {{ $client->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Añadir Mascota</button>
        </form>
        
    </div>
@endsection
