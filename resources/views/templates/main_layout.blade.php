<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @if(!empty($datatables))
    <link rel="stylesheet" href="{{asset('assets/datatables/datatables.min.css')}}" type="text.css">
    <script src="{{asset('assets/datatables/jquery/jquery.min.js')}}"></script>
    @endif
    <title>{{$title}}</title>
</head>

<body>
    @include('nav')

    @yield('content')

    @include('footer')
    <script src="{{asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
    @if(!empty($datatables))
    <script src="{{asset('assets/datatables/datatables.min.js')}}"></script>
    @endif
</body>

</html>
