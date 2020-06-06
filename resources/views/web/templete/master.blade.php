<!DOCTYPE html>
<html lang="en">


<head>
    <title>SACRED HEART JUNIOR COLLEGE</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SACRED HEART JUNIOR COLLEGE">
    <meta name="keyword" content="SACRED HEART JUNIOR COLLEGE">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{asset('web/images/logo.png')}}" type="image/x-icon">
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
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
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
       

        

  