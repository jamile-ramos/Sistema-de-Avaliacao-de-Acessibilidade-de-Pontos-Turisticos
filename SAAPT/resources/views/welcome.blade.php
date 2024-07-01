@extends('layouts.main')

@section('title', 'Caminhos Livres')

@section('content')

<main>
    <div id="search-container" class="flex">
        <h1>Descubra pontos turísticos incríveis e acessíveis para você!</h1>
        <form action="/" method="get">
            <input type="text" name="search" id="search" placeholder="Pesquisar ponto turístico">
        </form>
    </div>

    <section>
        <div class="filter-container flex column">
            <p>Selecione os pontos turísticos por categoria de acessibilidade:</p>
            <form action="" method="get" id="filter-form">
                <select name="filter-points" id="filter-points" onchange="document.getElementById('filter-form').submit()">
                    <option value="best" {{ $filterSelect == 'best' ? 'selected' : '' }}>Melhores notas de acessibilidade</option>
                    <option value="auditory" {{ $filterSelect == 'auditory' ? 'selected' : '' }}>Deficiência Auditiva</option>
                    <option value="physical" {{ $filterSelect == 'physical' ? 'selected' : '' }}>Deficiência física ou motora</option>
                    <option value="visual" {{ $filterSelect == 'visual' ? 'selected' : '' }}>Deficiência Visual</option>
                    <option value="mobility" {{ $filterSelect == 'mobility' ? 'selected' : '' }}>Mobilidade reduzida</option>
                </select>

                <div class="btn-filter flex">
                    <button type="submit" name="filter-buttons" value="best" class="{{ $filterButtons == 'best' ? 'selected' : '' }}">Melhores notas de acessibilidade</button>
                    <button type="submit" name="filter-buttons" value="auditory" class="{{ $filterButtons == 'auditory' ? 'selected' : '' }}">Deficiência auditiva</button>
                    <button type="submit" name="filter-buttons" value="physical" class="{{ $filterButtons == 'physical' ? 'selected' : '' }}">Deficiência física ou motora</button>
                    <button type="submit" name="filter-buttons" value="visual" class="{{ $filterButtons == 'visual' ? 'selected' : '' }}">Deficiência visual</button>
                    <button type="submit" name="filter-buttons" value="mobility" class="{{ $filterButtons == 'mobility' ? 'selected' : '' }}">Mobilidade reduzida</button>
                </div>

            </form>
        </div>
    </section>

    <section>
        <div class="container-card">
            @foreach($points as $point)
            <div class="card">
                <div class="title-card flex">
                    <p>{{ $point->name }}</p>
                </div>
                <div class="group-touristPoint">
                    <div class="container-img">
                        <div id="img-card"></div>
                    </div>
                    <div class="info">
                        <div class="bar-all flex">
                            <div class="group-bar">
                                <p>Acessibilidade:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->generalNotes }}"></div>
                                    </div>
                                    <div class="number-percentage">{{ number_format($point->generalNotes, 1) }}%</div>
                                </div>
                            </div>
                            <div class="group-bar">
                                <p>Auditiva:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->auditoryNote }}"></div>
                                    </div>
                                    <div class="number-percentage">{{ number_format($point->auditoryNote,1) }}%</div>
                                </div>
                            </div>
                            <div class="group-bar">
                                <p>Visual:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->visualNote }}"></div>
                                    </div>
                                    <div class="number-percentage">{{ number_format($point->visualNote, 1) }}%</div>
                                </div>
                            </div>
                            <div class="group-bar">
                                <p>Física e Motora:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->physicalNote }}"></div>
                                    </div>
                                    <div class="number-percentage">{{ number_format($point->physicalNote,1) }}%</div>
                                </div>
                            </div>
                            <div class="group-bar">
                                <p>Mobilidade Reduzida:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->mobilityNote }}"></div>
                                    </div>
                                    <div class="number-percentage">{{ number_format($point->mobilityNote,1) }}%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons flex">
                    <button><a href="#">Avaliar</a></button>
                    <button><a href="/touristPoint/show/{{ $point->id }}">Mais informações</a></button>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section>
        <div class="rate-now">
            <p>Ajude a construir um turismo mais inclusivo, avaliando os pontos turísticos que você visita!
            </p>
            <button class="btn"><ion-icon name="thumbs-up-outline"></ion-icon>Avalie já!</button>
        </div>
    </section>

</main>

@endsection