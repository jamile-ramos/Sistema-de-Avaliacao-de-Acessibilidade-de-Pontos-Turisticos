@extends('layouts.main')

@section('title', 'Caminhos Livres')

@section('content')

<main>
    @if(session('msg'))
    <div class="msg">
        <p>{{ session('msg') }}</p>
    </div>
    @endif
    @if(session('msg-erro'))
    <div class="msg-erro">
        <p>{{ session('msg-erro') }}</p>
    </div>
    @endif
    <div id="search-container" class="flex">
        <h1>Descubra pontos turísticos incríveis e acessíveis para você!</h1>
        <form action="/" method="get">
            <input type="text" name="search" id="search" placeholder="Pesquisar ponto turístico">
        </form>
    </div>

    <section>
        <div class="filter-container flex column">
            <form action="" method="get" id="filter-form">
                <select name="filter-points" id="filter-points" onchange="document.getElementById('filter-form').submit()">
                    <option value="best" {{ $filterSelect == 'best' ? 'selected' : '' }}>Melhores notas de acessibilidade</option>
                    <option value="0" {{ $filterSelect == '0' ? 'selected' : '' }}>Atrações Culturais</option>
                    <option value="1" {{ $filterSelect == '1' ? 'selected' : '' }}>Atrações Gastronômicas</option>
                    <option value="2" {{ $filterSelect == '2' ? 'selected' : '' }}>Parques e Áreas Verdes</option>
                    <option value="3" {{ $filterSelect == '3' ? 'selected' : '' }}>Praias e Áreas Costeiras</option>
                </select>

                <div class="btn-filter flex">
                    <button type="submit" name="filter-buttons" value='best' class="{{ $filterButtons == 'best' ? 'selected' : '' }}">Melhores notas de acessibilidade</button>
                    <button type="submit" name="filter-buttons" value='0' class="{{ $filterButtons == '0' ? 'selected' : '' }}">Atrações Culturais</button>
                    <button type="submit" name="filter-buttons" value='1' class="{{ $filterButtons == '1' ? 'selected' : '' }}">Atrações Gastronômicas</button>
                    <button type="submit" name="filter-buttons" value='2' class="{{ $filterButtons == '2' ? 'selected' : '' }}">Parques e Áreas Verdes</button>
                    <button type="submit" name="filter-buttons" value='3' class="{{ $filterButtons == '3' ? 'selected' : '' }}">Praias e Áreas Costeiras</button>
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
                        <div class="img-card" data-image="{{ $point->image }}"></div>
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
                    <a href="#">Avaliar</a>
                    <a href="/touristPoint/show/{{ $point->id }}">Mais informações</a>
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