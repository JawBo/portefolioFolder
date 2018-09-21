<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <!-- <link href="https://fonts.googleapis.com/css?fam   ily=Nunito:200,600" rel="stylesheet" type="text/css"> -->
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="container">
            <span>
                <a href="http://">ACCUEIL</a>
            </span>
            

            <button>Download Resume</button>

        </nav>
        <section class="aboutArea">
            <div>
                <h1>Jawâd Bouali</h1>
                <br>
                <span>Web Developer - Photographer</span>
            </div>
        </section>
        
    </header>
    <div class="apropos">
        <div>
        <img src="{{url('img/pic.jpeg')}}" alt="">
        </div>
    </div>
</body>
</html>