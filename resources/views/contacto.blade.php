@extends('layouts.plantillaInicial')

@section('content')
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper">
          <h2 class="product-title">Contact Us</h2>
          <ol class="breadcrumb">
            <li><a href="/">Home /</a></li>
            <li class="current">Contactanos</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  </div>


<section id="google-map-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.038758989769!2d-89.2056576848161!3d13.716102390370601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6330843530ff0b%3A0xd2e3ab336929e47f!2sUniversidad+de+El+Salvador!5e0!3m2!1ses-419!2ssv!4v1544165703167"></object>
        
      </div>
    </div>
  </div>
</section>


<section id="content" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-xs-12">

        <form id="contactForm" class="contact-form" data-toggle="validator">
          <h2 class="contact-title">
            Envienos su mensaje
          </h2>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Completo" required data-error="Ingrese su nombre">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Ingrese su email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="msg_subject" name="subject" placeholder="Edad" required data-error="Ingrese su edad">
                    <div class="help-block with-errors"></div>
                  </div>
            </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Mensaje" rows="7" data-error="Write your message" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" id="submit" class="btn btn-common">Enviar</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12">
      <div class="information mb-4">
        <h3>Dirección</h3>
        <div class="contact-datails">
          <p>Final 25 Avenida Norte, San Salvador
            Universidad de El Salvador, Dirección</p>
        </div>
      </div>
      <div class="information">
        <h3>Dirección de Contacto</h3>
        <div class="contact-datails">
          <ul class="list-unstyled info">
            <li><span>Dirección : </span><p> Final 25 Avenida Norte, San Salvador Universidad de El Salvador, Dirección</p></li>
            <li><span>Email : </span><p>sivarcachadas@gmail.com</p></li>
            <li><span>Phone : </span><p>+503 2277 8899</p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
    

@endsection