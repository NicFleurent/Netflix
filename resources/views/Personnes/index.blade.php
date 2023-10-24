@extends('layouts.app')

@section('title', 'Netflix')

@section('contenu')
    <main>
        <article>
            <!-- PERSONNES -->
            <section class="upcoming">
                <div class="container">
                    <div class="flex-wrapper">
                        <div class="title-wrapper">
                            <h2 class="h2 section-title">Acteurs</h2>
                        </div>


                    </div>
                    <ul class="movies-list  has-scrollbar">

                        @if (count($personnes))
                            @foreach ($personnes as $personne)
                                <li>
                                    <div class="movie-card">

                                        <img  class="img" src="{{$personne->lien_photo}}" alt="The Northman movie poster">

                                        <div class="title-wrapper">
                                            <h3 class="card-title">{{ $personne->nom }}</h3>
                                            <span>{{$personne->date_naissance}}</span>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT137M">137 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>8.5</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            @endforeach
                        @else
                        @endif
                        <p> Pas d'acteurs </p>
                    </ul>

                </div>
            </section>

            <!-- #SERVICE -->

            <section class="service">
                <div class="container">

                    <div class="service-banner">
                        <figure>
                            <img src="img/service-banner.jpg" alt="HD 4k resolution! only $3.99">
                        </figure>

                        <a href="img/service-banner.jpg" download class="service-btn">
                            <span>Download</span>

                            <ion-icon name="download-outline"></ion-icon>
                        </a>
                    </div>

                    <div class="service-content">

                        <p class="service-subtitle">Our Services</p>

                        <h2 class="h2 service-title">Download Your Shows Watch Offline.</h2>

                        <p class="service-text">
                            Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                            variations of
                            passages of lorem
                            Ipsum available, but the majority have suffered alteration in some injected humour.
                        </p>

                        <ul class="service-list">

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="tv"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Enjoy on Your TV.</h3>

                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="videocam"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Watch Everywhere.</h3>

                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                                        </p>
                                    </div>

                                </div>
                            </li>

                        </ul>

                    </div>

                </div>
            </section>



            <!-- #CTA -->
            <section class="cta">
                <div class="container">
                    <div class="title-wrapper">
                        <h2 class="cta-title">Trial start first 30 days.</h2>

                        <p class="cta-text">
                            Enter your email to create or restart your membership.
                        </p>
                    </div>

                    <form action="" class="cta-form">
                        <input type="email" name="email" required placeholder="Enter your email" class="email-field">

                        <button type="submit" class="cta-form-btn">Get started</button>
                    </form>

                </div>
            </section>

        </article>
    </main>
@endsection
