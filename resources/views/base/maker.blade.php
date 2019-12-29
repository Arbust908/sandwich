@extends('layouts.app')

@section('content')
    <section class="w-8/12 mx-auto my-3 font-mono text-green-500 bg-gray-900 rounded shadow p-4">
        @foreach ($models as $model)
        <article class="mb-2">
            {{ $model }}
        </article>
        @endforeach
    </section>
@endsection
