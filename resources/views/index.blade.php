@extends('layouts.app')
@section('head')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <h1 class="title">Agrega un Legislador!</h1>
    <form id="form" method="post" action="{{route('store')}}">
        @csrf
        <div class=row>
            <div class="input-group col-lg-6 col-md-12 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"/>
                    </svg></span>
                </div>
                <input type="text" id="username" name="name" class="form-control" placeholder="Ingresar el nombre del legislador..." aria-label="name">
                <p id="errorName"></p>
            </div>
            <div class="input-group col mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"/>
                    </svg></span>
                </div>
                <input type="text" id=surname name="surname" class="form-control" placeholder="Ingresar el apellido del legislador..." aria-label="surname">
                <p id="errorSurname"></p>
            </div>
        </div>
        <div class="row">
            <div class="input-group col-lg-6 col-md-12 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd"/>
                    <path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z"/>
                    </svg></span>
                </div>
                <input type="text" id=email name="email" class="form-control" placeholder="Ingresar el email del legislador..." aria-label="email">
                <p id="errorEmail"></p>
            </div>
            <div class="input-group col mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11 1H5a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1V2a1 1 0 00-1-1zM5 0a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V2a2 2 0 00-2-2H5z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M8 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                    </svg></span>
                </div>
                <input type="number" id="cellphone" name="cellphone" class="form-control" placeholder="Ingresar el telefono del legislador..." aria-label="cellphone">
                <p id="errorCellphone"></p>
            </div>
        </div>
        <div class="row"> 
            <div class="input-group col-lg-6 col-md-12 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-building" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15.285.089A.5.5 0 0115.5.5v15a.5.5 0 01-.5.5h-3a.5.5 0 01-.5-.5V14h-1v1.5a.5.5 0 01-.5.5H1a.5.5 0 01-.5-.5v-6a.5.5 0 01.418-.493l5.582-.93V3.5a.5.5 0 01.324-.468l8-3a.5.5 0 01.46.057zM7.5 3.846V8.5a.5.5 0 01-.418.493l-5.582.93V15h8v-1.5a.5.5 0 01.5-.5h2a.5.5 0 01.5.5V15h2V1.222l-7 2.624z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M6.5 15.5v-7h1v7h-1z" clip-rule="evenodd"/>
                    <path d="M2.5 11h1v1h-1v-1zm2 0h1v1h-1v-1zm-2 2h1v1h-1v-1zm2 0h1v1h-1v-1zm6-10h1v1h-1V3zm2 0h1v1h-1V3zm-4 2h1v1h-1V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm-2 2h1v1h-1V7zm2 0h1v1h-1V7zm-4 0h1v1h-1V7zm0 2h1v1h-1V9zm2 0h1v1h-1V9zm2 0h1v1h-1V9zm-4 2h1v1h-1v-1zm2 0h1v1h-1v-1zm2 0h1v1h-1v-1z"/>
                    </svg></span>
                </div>
                <input type="text" name="address" class="form-control" placeholder="Ingresar la direccion del legislador..." aria-label="address">
            </div>
            <div class="input-group col mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-geo" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 4a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path d="M7.5 4h1v9a.5.5 0 01-1 0V4z"/>
                    <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 01-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 11.212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 01.595.383z" clip-rule="evenodd"/>
                    </svg></span>
                </div>
                <input type="text" id="country" name="country" class="form-control" placeholder="Ingresar el pais del legislador..." aria-label="country">
                <p id="errorCountry"></p>
            </div>
        </div>
        <div class="row">
            <div class="input-group col-lg-6 col-md-12 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-archive" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5v7.5c0 .864.642 1.5 1.357 1.5h9.286c.715 0 1.357-.636 1.357-1.5V5h1v7.5c0 1.345-1.021 2.5-2.357 2.5H3.357C2.021 15 1 13.845 1 12.5V5h1z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M5.5 7.5A.5.5 0 016 7h4a.5.5 0 010 1H6a.5.5 0 01-.5-.5zM15 2H1v2h14V2zM1 1a1 1 0 00-1 1v2a1 1 0 001 1h14a1 1 0 001-1V2a1 1 0 00-1-1H1z" clip-rule="evenodd"/>
                    </svg></span>
                </div>
                <input type="number" id="votes" name="votes" class="form-control" placeholder="Ingresar la cantidad de votos del legislador..." aria-label="votes">
                <p id="errorVotes"></p>
            </div>
            <div class="input-group col mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-people" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 00.014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 00.022.004zm7.973.056v-.002.002zM11 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0zM6.936 9.28a5.88 5.88 0 00-1.23-.247A7.35 7.35 0 005 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 015 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 116 0 3 3 0 01-6 0zm3-2a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd"/>
                    </svg></span>
                </div>
                <select id="party" class="form-control">
                    <option value=0 selected>Elegir partido politico</option>
                    <option value="Azul">Azul</option>
                    <option value="Rojo">Rojo</option>
                    <option value="Verde">Verde</option>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="input-group col-lg-6 col-md-12 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><svg class="bi bi-calendar" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                    </svg></span>
                </div>
                <input type="date" id='starting' name="starting" class="form-control" aria-label="starting" required>
            </div>
                <div class="mb-3 col">
                <button type="submit" class="btn btn-dark">Agregar legislador</button>
                </div>
        </div>
        <p> Ingresa la fecha de inicio del legislador</p>

      </form>
@endsection

@section('scripts')
<script src ="{{asset('js/index.js')}}"></script>

@endsection