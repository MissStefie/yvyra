@extends('layouts.app')

@section('title', 'Lista de Árboles')

@section('content')
    <div class="container">
        @foreach ($trees as $tree)
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title"
                    style="background: url('{{ asset('img/trees/' . $tree->id . '.jpg') }}') center / cover;">
                    <h2 class="mdl-card__title-text">{{ $tree->Nombre_Cientifico }}</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <p>{{ $tree->Familia }}</p>
                    <p><strong>Nombre común: </strong>{{ $tree->Nombre_Comun }}</p>
                    <p><strong>Altura:</strong> {{ $tree->Altura }} m</p>
                    <p>
                        <span class="{{ $tree->Extinto ? 'danger' : 'safe' }}">
                            {{ $tree->Extinto ? 'En peligro de extinción' : 'No está en peligro de extinción' }}
                        </span>
                    </p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="{{ route('trees.show', $tree->id) }}"
                        class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="color: #6B8A7A;">Ver
                        más</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection