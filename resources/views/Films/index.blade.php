@extends('layouts.app')

@section('title', 'Netflix')

@section('contenu')
<main>
    <article>
      <!-- #UPCOMING -->
      <section class="upcoming section-contenu">
        <div class="container">
 
          <div class="flex-wrapper">
 
            <div class="title-wrapper">
              <h2 class="h2 section-title">Dernières Sorties</h2>
            </div>
 
            <ul class="filter-list">
 
              <li>
                <button class="filter-btn">Tous</button>
              </li>
 
              <li>
                <button class="filter-btn">Films</button>
              </li>
 
              <li>
                <button class="filter-btn">Séries TV</button>
              </li>
 
              <li>
                <button class="filter-btn">Anime</button>
              </li>
 
            </ul>
 
          </div>
 
          <ul class="movies-list has-scrollbar">
 
          @if(count($filmsDernieresSorties))
            @foreach($filmsDernieresSorties as $film)
              <li>
                <div class="movie-card">
  
                  <a href="{{route('film.show', [$film])}}">
                    <figure class="card-banner">
                      <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">

                      <div class="pop-over-description">
                        <span>{{$film->resume}}</span>
                      </div>
                    </figure>
                  </a>
  
                  <div class="title-wrapper">
                    <a href="{{route('film.show', [$film])}}">
                      <h3 class="card-title">{{$film->titre}}</h3>
                    </a>
  
                    <time datetime="{{$film->annee_sortie}}">{{$film->annee_sortie}}</time>
                  </div>
  
                  <div class="card-meta">
                    <div class="duration">
                      <ion-icon name="time-outline"></ion-icon>
  
                      <time datetime="PT{{$film->annee_sortie}}M">{{$film->duree}} min</time>
                    </div>
  
                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
  
                      <data>{{$film->cote}}</data>
                    </div>
                  </div>

                  <div class="type-contenu">{{$film->type}}</div>
  
                </div>
              </li>
            @endforeach
          @else
            <p>Il n'y a pas de film</p>
          @endif

          </ul>
 
        </div>
      </section>
 
      <!-- #Top Rated Movie-->
      <section class="top-rated section-contenu">
        <div class="container">

          <h2 class="h2 section-title">Les meilleurs films</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn">Tous</button>
            </li>

            <li>
              <button class="filter-btn">Films</button>
            </li>

            <li>
              <button class="filter-btn">Séries TV</button>
            </li>

            <li>
              <button class="filter-btn">Anime</button>
            </li>

          </ul>

          <ul class="movies-list">

            @if(count($filmsMeilleur))
              @foreach($filmsMeilleur as $film)
                <li>
                  <div class="movie-card">

                    <a href="{{route('film.show', [$film])}}">
                      <figure class="card-banner">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                      
                        <div class="pop-over-description">
                          <span>{{$film->resume}}</span>
                        </div>
                      </figure>
                    </a>

                    <div class="title-wrapper">
                      <a href="{{route('film.show', [$film])}}">
                        <h3 class="card-title">{{$film->titre}}</h3>
                      </a>

                      <time datetime="{{$film->annee_sortie}}">{{$film->annee_sortie}}</time>
                    </div>

                    <div class="card-meta">
                      <div class="duration">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="PT{{$film->duree}}M">{{$film->duree}} min</time>
                      </div>

                      <div class="rating">
                        <ion-icon name="star"></ion-icon>

                        <data>{{$film->cote}}</data>
                      </div>
                    </div>

                    <div class="type-contenu">{{$film->type}}</div>

                  </div>
                </li>
              @endforeach
            @else
              <p>Il n'y a pas de film</p>
            @endif

          </ul>

        </div>
      </section>

       <!-- #Film Court-->
       <section class="top-rated section-contenu">
        <div class="container">

          <h2 class="h2 section-title">Vous avez peu de temps?</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn">Tous</button>
            </li>

            <li>
              <button class="filter-btn">Films</button>
            </li>

            <li>
              <button class="filter-btn">Séries TV</button>
            </li>

            <li>
              <button class="filter-btn">Anime</button>
            </li>

          </ul>

          <ul class="movies-list">

            @if(count($filmsCourt))
              @foreach($filmsCourt as $film)
                <li>
                  <div class="movie-card">

                    <a href="{{route('film.show', [$film])}}">
                      <figure class="card-banner">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                      
                        <div class="pop-over-description">
                          <span>{{$film->resume}}</span>
                        </div>
                      </figure>
                    </a>

                    <div class="title-wrapper">
                      <a href="{{route('film.show', [$film])}}">
                        <h3 class="card-title">{{$film->titre}}</h3>
                      </a>

                      <time datetime="{{$film->annee_sortie}}">{{$film->annee_sortie}}</time>
                    </div>

                    <div class="card-meta">
                      <div class="duration">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="PT{{$film->duree}}M">{{$film->duree}} min</time>
                      </div>

                      <div class="rating">
                        <ion-icon name="star"></ion-icon>

                        <data>{{$film->cote}}</data>
                      </div>
                    </div>

                    <div class="type-contenu">{{$film->type}}</div>

                  </div>
                </li>
              @endforeach
            @else
              <p>Il n'y a pas de film</p>
            @endif

          </ul>

        </div>
      </section>
 
      <!-- #Comédie -->
      <section class="tv-series">
        <div class="container">
 
          <h2 class="h2 section-title">Nos meilleures comédies</h2>
 
          <ul class="movies-list">
 
          @if(count($filmsComedie))
              @foreach($filmsComedie as $film)
                <li>
                  <div class="movie-card">

                    <a href="{{route('film.show', [$film])}}">
                      <figure class="card-banner">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                      
                        <div class="pop-over-description">
                          <span>{{$film->resume}}</span>
                        </div>
                      </figure>
                    </a>

                    <div class="title-wrapper">
                      <a href="{{route('film.show', [$film])}}">
                        <h3 class="card-title">{{$film->titre}}</h3>
                      </a>

                      <time datetime="{{$film->annee_sortie}}">{{$film->annee_sortie}}</time>
                    </div>

                    <div class="card-meta">
                      <div class="duration">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="PT{{$film->duree}}M">{{$film->duree}} min</time>
                      </div>

                      <div class="rating">
                        <ion-icon name="star"></ion-icon>

                        <data>{{$film->cote}}</data>
                      </div>
                    </div>

                    <div class="type-contenu">{{$film->type}}</div>

                  </div>
                </li>
              @endforeach
            @else
              <p>Il n'y a pas de film</p>
            @endif
 
          </ul>
 
        </div>
      </section>
 
      <!-- #Famille-->
      <section id="famille" class="top-rated section-contenu">
        <div class="container">

          <h2 class="h2 section-title">Pour toute la famille</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn">Tous</button>
            </li>

            <li>
              <button class="filter-btn">Films</button>
            </li>

            <li>
              <button class="filter-btn">Séries TV</button>
            </li>

            <li>
              <button class="filter-btn">Anime</button>
            </li>

          </ul>

          <ul class="movies-list">

            @if(count($filmsToutPublic))
              @foreach($filmsToutPublic as $film)
                <li>
                  <div class="movie-card">

                    <a href="{{route('film.show', [$film])}}">
                      <figure class="card-banner">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                      
                        <div class="pop-over-description">
                          <span>{{$film->resume}}</span>
                        </div>
                      </figure>
                    </a>

                    <div class="title-wrapper">
                      <a href="{{route('film.show', [$film])}}">
                        <h3 class="card-title">{{$film->titre}}</h3>
                      </a>

                      <time datetime="{{$film->annee_sortie}}">{{$film->annee_sortie}}</time>
                    </div>

                    <div class="card-meta">
                      <div class="duration">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="PT{{$film->duree}}M">{{$film->duree}} min</time>
                      </div>

                      <div class="rating">
                        <ion-icon name="star"></ion-icon>

                        <data>{{$film->cote}}</data>
                      </div>
                    </div>

                    <div class="type-contenu">{{$film->type}}</div>

                  </div>
                </li>
              @endforeach
            @else
              <p>Il n'y a pas de film</p>
            @endif

          </ul>

        </div>
      </section>

    </article>
  </main>
@endsection
