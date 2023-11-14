<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- favicon-->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- custom css link-->
    <link rel="stylesheet" href="{{ asset('css/films.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toast.css') }}">
    @yield('css')
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

    <!-- #HEADER -->

    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="/" class="logo">
                <img src="{{ asset('img/logo.svg') }}" alt="Filmlane logo">
            </a>

            <div class="header-actions">

                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <button class="btn btn-primary">Sign in</button>

            </div>

            <button class="menu-open-btn" data-menu-open-btn>
                <ion-icon name="reorder-two"></ion-icon>
            </button>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="/" class="logo">
                        <img src="{{ asset('img/logo.svg') }}" alt="Filmlane logo">
                    </a>

                    <button class="menu-close-btn" data-menu-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="{{ route('films.index') }}" class="navbar-link">Films</a>
                    </li>

                    <li>
                        <a href="{{ route('personnes.index') }}" class="navbar-link">Personnes</a>
                    </li>

                    <li>
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn navbar-link">Admin</button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="{{ route('films.create') }}">Ajouter un contenu</a>
                                <a href="{{ route('personnes.create') }}">Ajouter une personne</a>
                                <a href="{{ route('films.createActeurFilm') }}">Ajouter une relation</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <div class="section-bouton-singin">
                    <button class="btn btn-primary">Sign in</button>
                </div>

            </nav>

        </div>
    </header>

    @yield('contenu')

    <!-- #FOOTER -->

    <footer class="footer">

        <div class="footer-top">
            <div class="container">

                <div class="footer-brand-wrapper">

                    <a href="/" class="logo">
                        <img src="{{ asset('img/logo.svg') }}" alt="Filmlane logo">
                    </a>

                    <ul class="footer-list">

                        <li>
                            <a href="{{ route('personnes.index') }}" class="footer-link">Films</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Personnes</a>
                        </li>

                    </ul>

                </div>

                <div class="divider"></div>

                <div class="quicklink-wrapper">

                    <ul class="quicklink-list">

                        <li>
                            <a href="#" class="quicklink-link">Faq</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Help center</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Terms of use</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Privacy</a>
                        </li>

                    </ul>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved
                </p>
                <p class="copyright">
                    Réalisé par <a href="#">Nicolas Fleurent et Mirolie Théroux</a>. 
                </p>

                <img src="{{ asset('img/footer-bottom-img.png') }}" alt="Online banking companies logo"
                    class="footer-bottom-img">

            </div>
        </div>

    </footer>

    <!-- #GO TO TOP -->

    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
    </a>

    {{-- TOAST RÉUSSI --}}
    @if(session('message'))
    <div class="toast ">
        <div class="toast-content">
            <ion-icon name="checkmark-circle-outline"></ion-icon>
            <div class="message">
                <span class="text text-1">Réussi</span>
                <span class="text text-2">{{session('message')}}</span>
            </div>
        </div>
        <div class="progress "></div>
    </div>
    @elseif(isset($errors) && $errors->any())
    {{-- TOAST ERREUR --}}
    <div class="toast">
        <div class="toast-content">
            <ion-icon class="text-erreur" name="close-circle-outline"></ion-icon>
            <div class="message">
                <span class="text text-1 text-erreur">Erreur</span>
                @foreach($errors->all() as $error)
                <span class="text text-2">{{$error}}</span>
                @endforeach
            </div>
        </div>
        <div class="progress progress-erreur"></div>
    </div>
    @endif

    <!-- custom js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- ionicon link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Nos scripts -->
    <script src="{{ asset('js/films.js') }}"></script>

    <!-- Scripts modal -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/toast.js') }}"></script>
    
 


</body>

</html>
