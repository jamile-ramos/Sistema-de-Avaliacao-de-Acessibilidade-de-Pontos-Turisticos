@extends('layouts.main')

@section('title', 'Cadastrar ponto turístico')

@section('content')

<section class="register-container flex">
    <div class="register-form">
        <h1>Cadastrar Ponto Turístico</h1>
        <form action="/touristPoint" method="POST">
            @csrf
            <div class="group-form">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required>

                <label for="category">Categoria</label>
                <select name="category" id="category">
                    <option value=""></option>
                    <option value="0">Monumentos e Edifícios Históricos</option>
                    <option value="1">Museus e Galerias de Arte</option>
                    <option value="2">Parques e Jardins</option>
                    <option value="3">Praias e Áreas Costeiras</option>
                </select>
            </div>

            <div class="group-form">
                <label for="city">Cidade</label>
                <input type="text" name="city" id="city">

                <div class="short">
                    <label for="state">UF</label>
                    <select name="state" id="state">
                        <option value=""></option>
                        @foreach($ufs as $uf)
                        <option value="{{ $uf }}">{{ $uf }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="group-form adress">

                <label for="street">Rua</label>
                <input type="text" name="street" id="street">

                <label for="district">Bairro</label>
                <input type="text" name="district" id="district">

                <label for="zipCode">CEP</label>
                <input type="text" name="zipCode" id="zipCode" maxlength="8" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>

            <div class="group-form">
                <textarea name="description" id="description" placeholder="Descreva o ponto turístico..." required></textarea>
            </div>

            <div class="group-form-radio">
                <label for="touristPointType">O ponto turístico é:</label>
                <div class="type">
                    <input type="radio" name="touristPointType" id="publico" value="0">
                    <label for="publico">Público</label>
                </div>

                <div class="type">
                    <input type="radio" name="accessType" id="privado" value="1">
                    <label for="privado">Privado</label>
                </div>
            </div>

            <div class="btn-register flex">
                <button type="submit" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>
</section>

@endsection