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

                <p>
                    <strong>PERIODO DE FLORACIÓN:</strong>
                    <span class="info-icon" data-toggle="tooltip" data-placement="top" title="Información adicional">
                        <i class="bi bi-info-circle-fill"></i>
                    </span>
                </p>
                <div class="additional-info" style="display: none;">
                    <p style="color: #6B8A7A;">Los bloques en tonos claros son los meses de floración.</p>
                </div>
                <div class="months-container">
                    @foreach (['ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC'] as $month)
                        <div class="month-square"
                            style="background-color: {{ $tree->{$month . '_Floracion'} ? '#DAD3BE' : '#B7B597' }}">
                            {{ $month }}</div>
                    @endforeach
                </div>

                <p>
                    <strong>PERIODO DE FRUTACIÓN:</strong>
                    <span class="info-icon" data-toggle="tooltip" data-placement="top" title="Información adicional">
                        <i class="bi bi-info-circle-fill"></i>
                    </span>
                </p>
                <div class="additional-info" style="display: none;">
                    <p style="color: #6B8A7A;">Los bloques en tonos claros son los meses de frutación.</p>
                </div>
                <div class="months-container">
                    @foreach (['ENE', 'FEB', 'MAR', 'ABR', 'MAY', 'JUN', 'JUL', 'AGO', 'SEP', 'OCT', 'NOV', 'DIC'] as $month)
                        <div class="month-square"
                            style="background-color: {{ $tree->{$month . '_Frutacion'} ? '#DAD3BE' : '#B7B597' }}">
                            {{ $month }}</div>
                    @endforeach
                </div>

                <p><strong>PRESENCIA EN LAS RESERVAS DE ITAIPU:</strong><span class="info-icon" data-toggle="tooltip"
                        data-placement="top" title="Información adicional">
                        <i class="bi bi-info-circle-fill"></i>
                    </span>
                </p>
                <div class="additional-info" style="display: none;">
                    <p style="color: #6B8A7A;">Abreviaturas empleadas: Centro Ambiental (CA), Tati Yupi (TY), Pikyry (PIK),
                        Itabo (ITA), Yvyty Rokai (YR), Limoy (LIM), Pozuelo (POZ), Carapa (CAR) y Mbaracayu (MBA).</p>
                </div>
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
                <div class="paraguay-map">
                    <div><img src="{{ asset('img/PY_MAPA.jpg') }}" alt="Mapa de Paraguay" style="width: 100%;">
                        @foreach ([
            'Alto_Paraguay' => 'dot-1',
            'Boqueron' => 'dot-2',
            'Presidente_Hayes' => 'dot-3',
            'Concepcion' => 'dot-4',
            'Amambay' => 'dot-5',
            'Canindeyu' => 'dot-6',
            'San_Pedro' => 'dot-7',
            'Alto_Parana' => 'dot-8',
            'Caaguazu' => 'dot-9',
            'Cordillera' => 'dot-10',
            'Central' => 'dot-11',
            'Paraguari' => 'dot-12',
            'Guaira' => 'dot-13',
            'Neembucu' => 'dot-14',
            'Misiones' => 'dot-15',
            'Caazapa' => 'dot-16',
            'Itapua' => 'dot-17',
        ] as $department => $dot_class)
                            @if ($tree->{$department} == 1)
                                <div class="{{ $dot_class }}"></div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mdl-card__actions mdl-card--border">
                <a href="{{ route('trees.index') }}"
                    class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                    style="color: #6B8A7A;">Volver</a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Inicializa el tooltip de Bootstrap
            $('[data-toggle="tooltip"]').tooltip();

            // Maneja el clic en el icono de información
            $('.info-icon').click(function() {
                // Encuentra el contenedor del contenido adicional más cercano
                var additionalInfo = $(this).closest('p').next('.additional-info');

                // Alternar la visibilidad del contenido adicional
                additionalInfo.toggle();
            });
        });
    </script>

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
            return '#FFFFFF';
        }
    }

    function getTextColor($value)
    {
        if ($value == 3) {
            return '#FFFFFF';
        } else {
            return '#799351';
        }
    }
@endphp
