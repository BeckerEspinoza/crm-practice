@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Mascotas</h1>
        <a href="{{ route('pets.create') }}" class="btn btn-primary">Agregar Mascota</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Client_ID</th>
                </tr>
            </thead>
        </table>
    </div>    
@endsection