@extends('layouts.default')
@section('titre', 'Page chien')
@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 ftco-animate">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil</a></span> <span>Utilisateurs</span></p>
                    <h1 class="mb-3">Utilisateurs</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<ul>
    @foreach($utilisateurs as $utilisateur)
    <li>{{ $utilisateur->email }}</li>
    @endforeach
</ul>
@stop
