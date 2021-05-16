<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <title>Artemisa | @yield('title', 'Default')</title>
    </head>

    <style>
        body{
            text-align:center;
        }

        .pat{
            display: block;
        }

        .content{
            width:80%;
            margin: 0 auto;
            margin-left: 20px;
        }

        #information{
            margin-top:20px;
            display:flex;
            justify-content:center;
        }

        #filters{
            display:flex;
        }

    </style>

    <body>
        <section class="content" id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Artemisa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/museums">Museums</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/authors">Authors</a>
                        </li> 
                        @if (Auth::user()->type == "admin")
  
                    <li class="nav-item">
                        <div class="form-group">
                                <select class="form-control" style="width:140px !important; margin-left: 10px" >
                                    <option value="" selected disabled hidden>Administration</option>
                                    <optgroup label="Swedish Cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                    </optgroup>
                                    <optgroup label="German Cars">
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </optgroup>
                                </select>
                        </div>


                    </li>
                        @endif
                    </ul>

                    <form class="d-flex">
                        <section class="content" id="filters">
                                @yield("filters")
                                @if (Auth::check())
                            <div style="margin-left:30px">
                                <div class="flex-shrink-0 dropdown">
                                    <a href="/home" class="d-block link-dark text-decoration-none show" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">             
                                        <img src="{{Auth::user()->imgRoute}}" alt="mdo" width="32" height="32" class="rounded-circle">
                                    </a>                
                                    <p>{{Auth::user()->name}}</p>
                                </div>
                            </div>
                        @endif
                        </section>
                    </form>

                    </div>
                </div>
            </nav>

        </section>

        <section class="content" id="information">
            @yield("information")
        </section>

        <section class="content" id="footer">
            @yield("footer")
        </section>
    <body>
</html>
