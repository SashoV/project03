<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.navbar')

    <div class="container">
        @include('layouts.info')
        <div class="jumbotron">
            <h2 class="text-center"><strong>Приклучи се на 1350 ентузијасти и учи @if (Request::route()->named('home'))
                    дигитални вештини. @else {{ $category->name }}. @endif Бесплатно</strong>
            </h2>
            <form action="{{ route('storeEmail') }}" method="post" id="storeEmail">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <input type="text" class="hidden" name="category_id" @if (Request::route()->named('home'))
                        value="" @endif value="{{ $category->id }}">
                        <div class="input-group">
                            <input type="email" class="form-control custom-input" placeholder="Email Adress"
                                name="email" required>
                            <span class="input-group-btn">
                                <button class="btn btn-default custom-input-btn" type="submit">Пријави се</button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                </div>
            </form>
            <div class="text-center">
                <small>Можеш да се исклучиш од листата на маилови во секое време!</small>
            </div>
        </div>
    </div>


    @yield('content')


    @include('layouts.modal')
    @include('layouts.footer')




    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    {{-- <script src="js/main.js"></script> --}}
</body>

</html>