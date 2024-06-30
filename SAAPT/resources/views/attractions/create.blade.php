@extends('layouts.main')

@section('title', 'Cadastrar ponto turístico')

@section('content')

<section class="register-container flex">
    <div class="register-form">
        <h1>Cadastrar Ponto Turístico</h1>
        <form action="">
            <div class="group-form">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="group-form">
                <label for="city">Cidade</label>
                <input type="text" name="city" id="city">

                <div class="short">
                    <label for="uf">UF</label>
                    <select name="state" id="state">
                        <option value=""></option>
                        @foreach($ufs as $uf)
                        <option value="{{ $uf }}">{{ $uf }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="group-form">
                <label for="state">Bairro</label>
                <input type="text" name="state" id="state">

                <div class="short">
                    <label for="zipCode">CEP</label>
                    <input type="text" name="zipCode" id="zipCode">
                </div>
            </div>

            <div class="group-form">
                <textarea name="description" id="description">Descrição</textarea>
            </div>

            <div class="group-form-check">
                <label for="touristPointType">O ponto turístico é:</label>
                <input type="checkbox" name="touristPointType[]" id="publico" value="publico">
                <label for="publico">Público</label>

                <input type="checkbox" name="touristPointType[]" id="privado" value="privado">
                <label for="privado">Privado</label>
            </div>

            <div class="btn-register flex">
                <button type="submit" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>
</section>

@endsection