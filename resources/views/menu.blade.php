@extends('layouts.medac')

@section('titulo')
    <h1>MENU</h1>
@endsection

@section('indice')
    <h2>Inicio > Menu</h2>
@endsection

@section('header')
    <header class="menus">
    @endsection

    @section('contenido')
        <div class="container">
            <div id="menu" class="row">
                <div id="animacion" class="col-sm-3 mb-3">
                    <fieldset>
                        <img src="img/Menu 1.png" class="img-fluid" alt="Menu 1" />
                    </fieldset>
                </div>
                <div class="col-sm-9 text-center">
                    <h3 id="menu-titulo">Pulpo de roca con miel de membrillo</h3>
                    <p>
                        Unas patas de pulpo pasadas por la parrilla, servidas sobre <br>
                        un puré de patata con pimentón y acompañadas de una original <br>
                        miel de membrillo. Es un plato que funciona muy bien con ese toque <br>
                        dulce de la miel, pero tambien se puede pedir solo a la parrilla.
                    </p>
                </div>
            </div>

            <div id="lista"></div>

            <div id="menu" class="row">
                <div id="animacion" class="col-sm-3 mb-3">
                    <fieldset>
                        <img src="img/Menu 2.png" class="img-fluid" alt="Menu 2" />
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3 id="menu-titulo">Gazpacho de frutas</h3>
                    <p>
                        Un refrescante gazpacho de frutas con una elaboración que combina, <br>
                        fresas, cerezas, mejillones y navajas, conjuntadas perfectamente <br>
                        para servir como entrante.
                    </p>
                </div>
            </div>

            <div id="lista"></div>

            <div id="menu" class="row">
                <div id="animacion" class="col-sm-3 mb-3">
                    <fieldset>
                        <img src="img/Menu 3.png" class="img-fluid" alt="Menu 3" />
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3 id="menu-titulo">Gambas marinadas</h3>
                    <p>
                        Un carpaccio de gambas marinadas, perfectamente aliñadas y <br>
                        con una preciosa presentación.
                    </p>
                </div>
            </div>

            <div id="lista"></div>

            <div id="menu" class="row">
                <div id="animacion" class="col-sm-3 mb-3">
                    <fieldset>
                        <img src="img/Menu 4.png" class="img-fluid" alt="Menu 4" />
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3 id="menu-titulo">Steak tartar</h3>
                    <p>
                        Steak tartar, preparado al gusto del cliente y terminado de <br>
                        mezclar a la vista y en la mesa es realmente inolvidable.
                    </p>
                </div>
            </div>

            <div id="lista"></div>

            <div id="menu" class="row">
                <div id="animacion" class="col-sm-3 mb-3">
                    <fieldset>
                        <img src="img/Menu 5.png" class="img-fluid" alt="Menu 5" />
                    </fieldset>
                </div>
                <div class="col text-center">
                    <h3 id="menu-titulo">Arroz de costilla de cerdo y ali oli de tomillo</h3>
                    <p>
                        Un arroz meloso, con trocitos de costilla de cerdo de <br>
                        textura impresionante, crujiente en el exterior y cremosa <br>
                        dentro, una salsa potente y unas verduras mini para acompañar, <br>
                        hacen de este bocado una auténtica delicia.
                    </p>
                </div>
            </div>
        </div>
    @endsection
