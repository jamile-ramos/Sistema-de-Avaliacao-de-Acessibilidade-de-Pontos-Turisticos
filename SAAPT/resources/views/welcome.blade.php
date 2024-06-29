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
            <div class="card">
                <div class="container-img">
                    <div id="img-card"></div>
                </div>
                <div class="info">
                    <p>Parque da cidade Guanambi</p>
                    <div class="bar-all flex">
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                    </div>
                </div>
                <div class="buttons flex">
                    <button>Avaliar</button>
                    <button>Mais informações</button>
                </div>
            </div>

            <div class="card">
                <div class="container-img">
                    <div id="img-card"></div>
                </div>
                <div class="info">
                    <p>Parque da cidade Guanambi</p>
                    <div class="bar-all flex">
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                        <div class="bar">
                            <div class="percentage"></div>
                        </div>
                    </div>
                </div>
                <div class="buttons flex">
                    <button>Avaliar</button>
                    <button>Mais informações</button>
                </div>
            </div>
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