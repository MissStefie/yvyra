@extends('layouts.app')

@section('title', 'Detalles del Árbol')

@section('content')
    <div class="center-card-container">
        <div class="mdl-card mdl-shadow--2dp center-card">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active mdl-card-img-carrusel">
                        <img class="d-block w-100" src="{{ asset('img/trees/' . $tree->id . '.jpg') }}"
                            alt="Imagen del árbol">
                    </div>
                    <div class="carousel-item mdl-card-img-carrusel">
                        <img class="d-block w-100" src="{{ asset('img/fruits/' . $tree->id . '.jpg') }}"
                            alt="Imagen del fruto">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
            <div class="mdl-card__supporting-text">
                <p><strong>Familia:</strong> {{ $tree->Familia }}</p>
                <p><strong>Nombre Científico:</strong> {{ $tree->Nombre_Cientifico }}</p>
                <p><strong>Nombre Común:</strong> {{ $tree->Nombre_Comun }}</p>
                @if ($tree->Nombre_PY !== 'NONE')
                    <p><strong>Nombre en Paraguay:</strong> {{ $tree->Nombre_PY }}</p>
                @endif
                @if ($tree->Nombre_ARG !== 'NONE')
                    <p><strong>Nombre en Argentina:</strong> {{ $tree->Nombre_ARG }}</p>
                @endif
                @if ($tree->Nombre_BR !== 'NONE')
                    <p><strong>Nombre en Brasil:</strong> {{ $tree->Nombre_BR }}</p>
                @endif
                <p><strong>Altura:</strong> {{ $tree->Altura }} m</p>
                <p><strong>Porte:</strong> {{ $tree->Porte }}</p>
                <p>
                    <span class="{{ $tree->Extinto ? 'danger' : 'safe' }}">
                        {{ $tree->Extinto ? 'En peligro de extinción' : 'No está en peligro de extinción' }}
                    </span>
                </p>
                <p><strong>Descripción:</strong> {{ $tree->Descripcion }}</p>
                <p><strong>Principales Usos:</strong> {{ $tree->Principales_Usos }}</p>

                <p><strong>PERIODO DE FLORACION:</strong></p>
                <div class="months-container">
                    @foreach (['ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC'] as $month)
                        <div class="month-square"
                            style="background-color: {{ $tree->{$month . '_Floracion'} ? '#DAD3BE' : '#B7B597' }}">
                            {{ $month }}</div>
                    @endforeach
                </div>

                <p><strong>PERIODO DE FRUTACION:</strong></p>
                <div class="months-container">
                    @foreach (['ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC'] as $month)
                        <div class="month-square"
                            style="background-color: {{ $tree->{$month . '_Frutacion'} ? '#DAD3BE' : '#B7B597' }}">
                            {{ $month }}</div>
                    @endforeach
                </div>

                <p><strong>PRESENCIA EN LAS RESERVAS DE ITAIPU:</strong></p>
                <div class="reserve-container">
                    @foreach (['CA', 'TY', 'PIK', 'ITA', 'YR', 'LIM', 'POZ', 'CAR', 'MBA'] as $reserve)
                        <div class="reserve-square" style="background-color: {{ getColor($tree->{$reserve}) }};">
                            <div class="reserve-name">{{ $reserve }}</div>
                            <div class="reserve-status" style="color: {{ getTextColor($tree->{$reserve}) }};">
                                @if ($tree->{$reserve} == 1)
                                    ALTA
                                @elseif ($tree->{$reserve} == 2)
                                    MEDIA
                                @elseif ($tree->{$reserve} == 3)
                                    NULA
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <p><strong>PRESENCIA EN LOS DEPARTAMENTOS DEL PARAGUAY:</strong></p>
                <div class="department-container">
                    @foreach ([
            'Alto_Paraguay' => 'Alto Paraguay',
            'Alto_Parana' => 'Alto Paraná',
            'Amambay' => 'Amambay',
            'Boqueron' => 'Boquerón',
            'Caaguazu' => 'Caaguazú',
            'Caazapa' => 'Caazapá',
            'Canindeyu' => 'Canindeyú',
            'Central' => 'Central',
            'Concepcion' => 'Concepción',
            'Cordillera' => 'Cordillera',
            'Guaira' => 'Guairá',
            'Itapua' => 'Itapúa',
            'Misiones' => 'Misiones',
            'Neembucu' => 'Ñeembucú',
            'Paraguari' => 'Paraguarí',
            'Presidente_Hayes' => 'Presidente Hayes',
            'San_Pedro' => 'San Pedro',
        ] as $department => $department_name)
                        <p style="color: {{ $tree->{$department} == 1 ? '#6B8A7A' : '#BEBEBE' }};">{{ $department_name }}
                        </p>
                    @endforeach

                </div>


            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a href="{{ route('trees.index') }}"
                    class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                    style="color: #6B8A7A;">Volver</a>
            </div>
        </div>
    </div>
@endsection
@php
    function getColor($value)
    {
        if ($value == 1) {
            return '#A1DD70';
        } elseif ($value == 2) {
            return '#F6EEC9';
        } elseif ($value == 3) {
            return '#EE4E4E';
        } else {
            return '#FFFFFF'; // Color por defecto si no se encuentra el valor
        }
    }

    function getTextColor($value)
    {
        if ($value == 3) {
            return '#FFFFFF'; // Si es NULA, el texto será blanco
        } else {
            return '#799351'; // Para los demás valores
        }
    }
@endphp
