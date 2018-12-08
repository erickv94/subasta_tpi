@extends('layouts.plantillaInicial')

@section('content')
<div id="hero-area">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                        <div class="contents">
                            <h1 class="head-title">Bienvenido a Subastas En linea <span class="year">Sivarchadas</span></h1>
                            <p> Es una empresa que permite que otras empresas entren en el mercado de 
                                las subastas en linea .</p>
                            <p>
                            La casa de subastas online de más rápido crecimiento en El Salvador,
                             con gran variedad de artículos singulares. 
                             ¡Visita nuestras subastas y haz tus pujas!
                            </p>
                            
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
                        online en Centroamerica. Contamos con especialización en venta de activos, bienes inmuebles, maquinaria, vehículos
                         y empresas. Disponemos de los mejores contactos y la mejor agenda para poner a tu disposición subastas judiciales online, subastas embargo y venta de bienes oficiales con énfasis empresarial.
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="{{secure_asset('assets/img/about/about.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    

@endsection