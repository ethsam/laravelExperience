@extends('layouts.default')
@section('titre', 'Page de Test')

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center">
                <div class="col-md-7 col-sm-12 ftco-animate">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil</a></span> <span>Inscription</span></p>
                    <h1 class="mb-3">Inscription</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form class="form-horizontal" action='/inscription' method="POST">
                    {{ csrf_field() }}
                    <fieldset>
                        <div id="legend">
                            <legend class="">Register</legend>
                        </div>
                        <div class="control-group">
                            <!-- Username -->
                            <label class="control-label" for="username">Username</label>
                            <div class="controls">
                                <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- E-mail -->
                            <label class="control-label" for="email">E-mail</label>
                            <div class="controls">
                                <input type="text" id="email" name="email" placeholder="" class="input-xlarge" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                <p>{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" id="password" name="password" placeholder="" class="input-xlarge" value="{{ old('password') }}>
                                @if($errors->has('password'))
                                <p>{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Password -->
                            <label class="control-label" for="password_confirm">Password (Confirm)</label>
                            <div class="controls">
                                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                                <p class="help-block">Please confirm password</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success">Register</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
@stop
