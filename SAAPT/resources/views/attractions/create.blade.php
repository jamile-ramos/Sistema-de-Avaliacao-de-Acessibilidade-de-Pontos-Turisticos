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
                <input type="text" name="city" id="city" >

                <label for="uf" class="short">UF</label>
                <select name="state" id="state">
                    <option value=""></option>
                    @foreach($ufs as $uf)
                    <option value="{{ $uf }}">{{ $uf }}</option>
                    @endforeach
            </select>
            </div>

            <div class="group-form">
                <label for="state">Bairro</label>
                <input type="text" name="state" id="state" >

                <label for="zipCode" class="short">CEP</label>
                <input type="text" name="zipCode" id="zipCode" >
            </div>

            <div class="group-form">
                <textarea name="description" id="description">Descrição</textarea>
            </div>

            <div class="group-form">
                <label for="touristPointType">O ponto turístico é:</label>
                <input type="checkbox" name="touristPointType[]" id="publico" value="publico">
                <label for="publico">Público</label>

                <input type="checkbox" name="touristPointType[]" id="privado" value="privado">
                <label for="privado">Privado</label>
            </div>

            <input type="submit" value="Cadastrar"> 
        </form>
    </div>
</section>

@endsection