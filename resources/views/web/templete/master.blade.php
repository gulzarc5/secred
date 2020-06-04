<!DOCTYPE html>
<html lang="en">


<head>
    <title>Education Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{asset('web/images/fav.ico')}}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{asset('web/css/materialize.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{asset('web/css/style-mob.css')}}" rel="stylesheet" />
</head>

    <body>
        <section>
            {{-- HEADER --}}
            @include('web.include.header')

            {{-- CONTENT --}}
            @yield('content')

            {{-- FOOTER --}}
            @include('web.include.footer')

            @yield('script')
        </section>    
    </body>
</html>
       

        

  