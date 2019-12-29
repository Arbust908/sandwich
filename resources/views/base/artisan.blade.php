@extends('layouts.app')

@section('content')
    <form action="{{ url('/made') }}" method="post" class="w-10/12 mx-auto shadow rounded p-4 flex flex-col">
        @csrf
        <label for="models" class="text-xl w-full text-left text-purple-600">
            Modelos
        </label>
        <input type="text" name='models' class="runded border-0 placeholder-teal-600 text-teal-800 font-mono font-bold px-3 py-1 shadow mb-2" placeholder="Model, Model, Model">
        <label for="type" class="text-lg w-full text-left text-purple-600">
            Tipos
        </label>
        <span class="w-full mb-1">
            <input type="checkbox" name="type[]" class="pr-2" value="all"> Todo
        </span>
        <span class="w-full mb-1">
            <input type="checkbox" name="type[]" class="pr-2" value="model"> Model
        </span>
        <span class="w-full mb-1">
            <input type="checkbox" name="type[]" class="pr-2" value="resource"> Resource
        </span>
        <span class="w-full mb-1">
            <input type="checkbox" name="type[]" class="pr-2" value="resourceCollection"> ResourceCollection
        </span>
        <button type="submit" class="bg-purple-500 border border-purple-500 hover:bg-purple-400 text-purple-900 rounded w-4/12 mx-auto font-bold py-1">Generar</button>
    </form>
@endsection
