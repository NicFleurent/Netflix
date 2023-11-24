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
 
          @role('enfant')
          @if(count($filmsToutPublic))
              @foreach($filmsToutPublic as $film)
                <li>
                  <div class="movie-card">
    
                    <a href="{{route('films.show', [$film])}}">
                      <figure class="card-banner">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">

                        <div class="pop-over-description">
                          <span>{{$film->resume}}</span>
                        </div>
                      </figure>
                    </a>
    
                    <div class="title-wrapper">
                      <a href="{{route('films.show', [$film])}}">
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

                    @role('admin')
                    <div class="lien-edit">
                      <a href="{{route('films.edit', [$film])}}">
                        <ion-icon name="construct-outline"></ion-icon>
                        <data>Mettre à jour</data>
                      </a>
                    </div>
                    @endrole

                    <div class="type-contenu">{{$film->type}}</div>
    
                  </div>
                </li>
              @endforeach
            @else
                <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
            @endif
          @else
            @if(count($filmsDernieresSorties))
              @foreach($filmsDernieresSorties as $film)
                <li>
                  <div class="movie-card">
    
                    <a href="{{route('films.show', [$film])}}">
                      <figure class="card-banner">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">

                        <div class="pop-over-description">
                          <span>{{$film->resume}}</span>
                        </div>
                      </figure>
                    </a>
    
                    <div class="title-wrapper">
                      <a href="{{route('films.show', [$film])}}">
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

                    @role('admin')
                    <div class="lien-edit">
                      <a href="{{route('films.edit', [$film])}}">
                        <ion-icon name="construct-outline"></ion-icon>
                        <data>Mettre à jour</data>
                      </a>
                    </div>
                    @endrole

                    <div class="type-contenu">{{$film->type}}</div>
    
                  </div>
                </li>
              @endforeach
            @else
                <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
            @endif
          @endrole
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

            @role('enfant')
            @if(count($filmsMeilleurEnfant))
                @foreach($filmsMeilleurEnfant as $film)
                  <li>
                    <div class="movie-card">

                      <a href="{{route('films.show', [$film])}}">
                        <figure class="card-banner">
                          <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                        
                          <div class="pop-over-description">
                            <span>{{$film->resume}}</span>
                          </div>
                        </figure>
                      </a>

                      <div class="title-wrapper">
                        <a href="{{route('films.show', [$film])}}">
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
                    
                      @role('admin')
                      <div class="lien-edit">
                        <a href="{{route('films.edit', [$film])}}">
                          <ion-icon name="construct-outline"></ion-icon>
                          <data>Mettre à jour</data>
                        </a>
                      </div>
                      @endrole

                      <div class="type-contenu">{{$film->type}}</div>

                    </div>
                  </li>
                @endforeach
              @else
                <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
              @endif
            @else
              @if(count($filmsMeilleur))
                @foreach($filmsMeilleur as $film)
                  <li>
                    <div class="movie-card">

                      <a href="{{route('films.show', [$film])}}">
                        <figure class="card-banner">
                          <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                        
                          <div class="pop-over-description">
                            <span>{{$film->resume}}</span>
                          </div>
                        </figure>
                      </a>

                      <div class="title-wrapper">
                        <a href="{{route('films.show', [$film])}}">
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
                    
                      @role('admin')
                      <div class="lien-edit">
                        <a href="{{route('films.edit', [$film])}}">
                          <ion-icon name="construct-outline"></ion-icon>
                          <data>Mettre à jour</data>
                        </a>
                      </div>
                      @endrole

                      <div class="type-contenu">{{$film->type}}</div>

                    </div>
                  </li>
                @endforeach
              @else
                <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
              @endif
            @endrole
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

            @role('enfant')
              @if(count($filmsCourtEnfant))
                @foreach($filmsCourtEnfant as $film)
                  <li>
                    <div class="movie-card">

                      <a href="{{route('films.show', [$film])}}">
                        <figure class="card-banner">
                          <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                        
                          <div class="pop-over-description">
                            <span>{{$film->resume}}</span>
                          </div>
                        </figure>
                      </a>

                      <div class="title-wrapper">
                        <a href="{{route('films.show', [$film])}}">
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
                    
                      @role('admin')
                      <div class="lien-edit">
                        <a href="{{route('films.edit', [$film])}}">
                          <ion-icon name="construct-outline"></ion-icon>
                          <data>Mettre à jour</data>
                        </a>
                      </div>
                      @endrole

                      <div class="type-contenu">{{$film->type}}</div>

                    </div>
                  </li>
                @endforeach
              @else
                <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
              @endif
            @else
              @if(count($filmsCourt))
                @foreach($filmsCourt as $film)
                  <li>
                    <div class="movie-card">

                      <a href="{{route('films.show', [$film])}}">
                        <figure class="card-banner">
                          <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                        
                          <div class="pop-over-description">
                            <span>{{$film->resume}}</span>
                          </div>
                        </figure>
                      </a>

                      <div class="title-wrapper">
                        <a href="{{route('films.show', [$film])}}">
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
                    
                      @role('admin')
                      <div class="lien-edit">
                        <a href="{{route('films.edit', [$film])}}">
                          <ion-icon name="construct-outline"></ion-icon>
                          <data>Mettre à jour</data>
                        </a>
                      </div>
                      @endrole

                      <div class="type-contenu">{{$film->type}}</div>

                    </div>
                  </li>
                @endforeach
              @else
                <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
              @endif
            @endrole

          </ul>

        </div>
      </section>
 
      <!-- #Comédie -->
      <section class="tv-series">
        <div class="container">
 
          <h2 class="h2 section-title">Nos meilleures comédies</h2>
 
          <ul class="movies-list">
 
          @role('enfant')
            @if(count($filmsComedieEnfant))
                @foreach($filmsComedieEnfant as $film)
                  <li>
                    <div class="movie-card">

                      <a href="{{route('films.show', [$film])}}">
                        <figure class="card-banner">
                          <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                        
                          <div class="pop-over-description">
                            <span>{{$film->resume}}</span>
                          </div>
                        </figure>
                      </a>

                      <div class="title-wrapper">
                        <a href="{{route('films.show', [$film])}}">
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
                    
                      @role('admin')
                      <div class="lien-edit">
                        <a href="{{route('films.edit', [$film])}}">
                          <ion-icon name="construct-outline"></ion-icon>
                          <data>Mettre à jour</data>
                        </a>
                      </div>
                      @endrole

                      <div class="type-contenu">{{$film->type}}</div>

                    </div>
                  </li>
                @endforeach
              @else
                <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
              @endif
          @else
            @if(count($filmsComedie))
                @foreach($filmsComedie as $film)
                  <li>
                    <div class="movie-card">

                      <a href="{{route('films.show', [$film])}}">
                        <figure class="card-banner">
                          <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                        
                          <div class="pop-over-description">
                            <span>{{$film->resume}}</span>
                          </div>
                        </figure>
                      </a>

                      <div class="title-wrapper">
                        <a href="{{route('films.show', [$film])}}">
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
                    
                      @role('admin')
                      <div class="lien-edit">
                        <a href="{{route('films.edit', [$film])}}">
                          <ion-icon name="construct-outline"></ion-icon>
                          <data>Mettre à jour</data>
                        </a>
                      </div>
                      @endrole

                      <div class="type-contenu">{{$film->type}}</div>

                    </div>
                  </li>
                @endforeach
              @else
                <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
              @endif
            @endrole
 
          </ul>
 
        </div>
      </section>
      
      @notenfant('enfant')
        <!-- #Famille -->
        <section class="upcoming section-contenu">
          <div class="container">
  
            <div class="flex-wrapper">
  
              <div class="title-wrapper">
                <h2 class="h2 section-title">Pour toute la famille</h2>
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
  
            @if(count($filmsToutPublic))
              @foreach($filmsToutPublic as $film)
                <li>
                  <div class="movie-card">
    
                    <a href="{{route('films.show', [$film])}}">
                      <figure class="card-banner">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">

                        <div class="pop-over-description">
                          <span>{{$film->resume}}</span>
                        </div>
                      </figure>
                    </a>
    
                    <div class="title-wrapper">
                      <a href="{{route('films.show', [$film])}}">
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

                    @role('admin')
                    <div class="lien-edit">
                      <a href="{{route('films.edit', [$film])}}">
                        <ion-icon name="construct-outline"></ion-icon>
                        <data>Mettre à jour</data>
                      </a>
                    </div>
                    @endrole

                    <div class="type-contenu">{{$film->type}}</div>
    
                  </div>
                </li>
              @endforeach
            @else
                  <h3 class="section-sans-film">Il n'y a pas de film dans cette section présentement</h3>
            @endif

            </ul>
  
          </div>
        </section>
      @endnotenfant

    </article>
  </main>
@endsection
