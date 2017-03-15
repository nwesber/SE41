<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{ asset('css/home/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home/blogCard.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
        <div class="container">

            <div class="blog-card">
                <div class="photo photo1"></div>
                <ul class="details">
                    <li class="author"><a href="#">John Doe</a></li>
                    <li class="date">Aug. 24, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="description">
                    <h1>Learning to Code</h1>
                    <h2>Opening a door to the future</h2>
                    <p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="photo photo1"></div>
                <ul class="details">
                    <li class="author"><a href="#">John Doe</a></li>
                    <li class="date">Aug. 24, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="description">
                    <h1>Learning to Code</h1>
                    <h2>Opening a door to the future</h2>
                    <p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="photo photo1"></div>
                <ul class="details">
                    <li class="author"><a href="#">John Doe</a></li>
                    <li class="date">Aug. 24, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="description">
                    <h1>Learning to Code</h1>
                    <h2>Opening a door to the future</h2>
                    <p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="photo photo1"></div>
                <ul class="details">
                    <li class="author"><a href="#">John Doe</a></li>
                    <li class="date">Aug. 24, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="description">
                    <h1>Learning to Code</h1>
                    <h2>Opening a door to the future</h2>
                    <p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="photo photo1"></div>
                <ul class="details">
                    <li class="author"><a href="#">John Doe</a></li>
                    <li class="date">Aug. 24, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="description">
                    <h1>Learning to Code</h1>
                    <h2>Opening a door to the future</h2>
                    <p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="photo photo1"></div>
                <ul class="details">
                    <li class="author"><a href="#">John Doe</a></li>
                    <li class="date">Aug. 24, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="description">
                    <h1>Learning to Code</h1>
                    <h2>Opening a door to the future</h2>
                    <p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

        </div>
    </body>
</html>
