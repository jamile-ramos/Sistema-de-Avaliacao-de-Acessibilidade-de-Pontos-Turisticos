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
            <p>Pontos turísticos acessíveis para pessoa com</p>
            <form action="/" method="get">
                <select name="pontos-turisticos" id="pontos-turisticos">
                    <option value="todos">Todos</option>
                    <option value="auditiva">Deficiência Auditiva</option>
                    <option value="fisica">Deficiência física ou motora</option>
                    <option value="visual">Deficiência Visual</option>
                    <option value="mobReduzida">Mobilidade reduzida</option>
                </select>

                <div class="btn-filter flex">
                    <button type="submit" name="filter" value="todos">Todos</button>
                    <button type="submit" name="filter" value="auditiva">Deficiência auditiva</button>
                    <button type="submit" name="filter" value="fisica">Deficiência física ou motora</button>
                    <button type="submit" name="filter" value="visual">Deficiência visual</button>
                    <button type="submit" name="filter" value="mobReduzida">Mobilidade reduzida</button>
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
                                    <div class="number-percentage">{{ $point->generalNotes }}%</div>
                                </div>
                            </div>
                            <div class="group-bar">
                                <p>Auditiva:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->auditoryNote }}" ></div>
                                    </div>
                                    <div class="number-percentage">{{ $point->auditoryNote }}%</div>
                                </div>
                            </div>
                            <div class="group-bar">
                                <p>Visual:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->visualNote }}"></div>
                                    </div>
                                    <div class="number-percentage">{{ $point->visualNote }}%</div>
                                </div>
                            </div>
                            <div class="group-bar">
                                <p>Física e Motora:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->physicalNote }}" ></div>
                                    </div>
                                    <div class="number-percentage">{{ $point->physicalNote }}%</div>
                                </div>
                            </div>
                            <div class="group-bar">
                                <p>Mobilidade Reduzida:</p>
                                <div class="group-number">
                                    <div class="bar">
                                        <div class="percentage" data-value="{{ $point->mobilityNote }}" ></div>
                                    </div>
                                    <div class="number-percentage">{{ $point->mobilityNote }}%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons flex">
                    <button>Avaliar</button>
                    <button>Mais informações</button>
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