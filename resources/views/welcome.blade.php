@extends('layouts.plantillaInicial')

@section('content')
<div id="hero-area">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                        <div class="contents">
                            <h1 class="head-title">Bienvenido a Subastas En linea <span class="year">Sivarchadas</span></h1>
                            <p>Debe estar registrado para poder comprar un producto pero puede revisar la lista de productos</p>
                            <div class="search-bar">
                                <div class="search-inner">
                                    <form class="search-form">
                                        <div class="form-group">
                                            <input type="text" name="customword" class="form-control" placeholder="What are you looking for?">
                                        </div>
                                            <div class="form-group inputwithicon">
                                                <div class="select">
                                                    <select>
                                                        <option value="none">Locación</option>
                                                        <option value="none">Sonsonate</option>
                                                        <option value="none">San Salvador</option>
                                                        <option value="none">Santa Ana</option>
                                                        <option value="none">San Miguel</option>
                                                    </select>
                                                </div>
                                                 <i class="lni-target"></i>
                                            </div>
                                            <div class="form-group inputwithicon">
                                                    <div class="select">
                                                        <select>
                                                            <option value="none">Seleccione Categoria</option>
                                                            <option value="none">Carro</option>
                                                            <option value="none">Muebles</option>
                                                            <option value="none">Pinturas</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <i class="lni-menu"></i>
                                            </div>
                                            <button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="about-wrapper">
                        <h2 class="intro-title">Quienes Somos</h2>
                        <p class="intro-desc">
                        Es una empresa que permite a los usuarios comprar con las reglas de subasta en el área de El Salvador,
                         haciendo uso de las tecnologías relativas al desarrollo
                         y permitiendo la semántica del contenido para el desarrollo y posicionamiento.
                        </p>
                        <p class="intro-desc">
                        Somos expertos en servicios de intermediación y facilitación de ventas de productos por medio de subastas 
                        online en España. Contamos con especialización en venta de activos, bienes inmuebles, maquinaria, vehículos
                         y empresas. Disponemos de los mejores contactos y la mejor agenda para poner a tu disposición subastas judiciales online, subastas embargo y venta de bienes oficiales con énfasis empresarial.
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="{{asset('assets/img/about/about.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    

@endsection