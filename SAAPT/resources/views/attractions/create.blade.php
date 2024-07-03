@extends('layouts.main')

@section('title', 'Cadastrar ponto turístico')

@section('content')

<section class="register-container flex">
    <div class="register-form">
        <h1>Cadastrar Ponto Turístico</h1>
        <form action="/touristPoint" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="group-form-two flex">
                <div class="group-form">
                    <ion-icon name="trail-sign-outline"></ion-icon>
                    <input type="text" name="name" id="name" placeholder="Nome" required>
                </div>

                <div class="group-form">
                    <ion-icon name="golf-outline"></ion-icon>
                    <label for="category">Categoria</label>
                    <select name="category" id="category">
                        <option value=""></option>
                        <option value="0">Patrimônios Culturais</option>
                        <option value="1">Atrações gastronômicas</option>
                        <option value="2">Parques e Áreas verdes</option>
                        <option value="3">Praias e Áreas Costeiras</option>
                    </select>
                </div>
            </div>

            <div class="group-form-two flex">
                <div class="group-form">
                    <ion-icon name="location-outline"></ion-icon>
                    <input type="text" name="city" id="city" placeholder="Cidade">
                </div>
                <div class="group-form">
                    <div class="short flex">
                        <ion-icon name="compass-outline"></ion-icon>
                        <label for="state">UF</label>
                        <select name="state" id="state">
                            <option value=""></option>
                            @foreach($ufs as $uf)
                            <option value="{{ $uf }}">{{ $uf }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="adress flex">
                <div class="group-form">
                    <ion-icon name="pause-outline"></ion-icon>
                    <input type="text" name="street" id="street" placeholder="Rua">
                </div>
                <div class="group-form">
                    <ion-icon name="pin-outline"></ion-icon>
                    <input type="text" name="district" id="district" placeholder="Bairro">
                </div>
                <div class="group-form">
                    <ion-icon name="locate-outline"></ion-icon>
                    <input type="text" name="zipCode" id="zipCode" maxlength="8" placeholder="CEP" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>
            </div>

            <div class="description">
                <textarea name="description" id="description" placeholder="Descreva o ponto turístico..." required></textarea>
            </div>

            <div class="group-form-choose">
                <label for="image">Escolha a imagem do ponto turístico</label>
                <input type="file" name="image" id="image" required> 
            </div>

            <div class="group-form-choose">
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

            <div class="group-form-choose">
                <label for="touristPointType">Você é proprietário do ponto turístico?</label>
                <div class="type">
                    <input type="hidden" name="owner" value="1">
                    <input type="checkbox" name="owner" id="owner" value="0">
                    <label for="owner">Sim</label>
                </div>
            </div>

            <div class="btn-register flex">
                <button type="submit" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>
</section>

@endsection