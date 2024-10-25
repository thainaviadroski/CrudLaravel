<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Crud with Laravel</title>
</head>

<body>

    <header>
        @include('layout/navbar')
    </header>

    <main class="container mt-5">
        <h2>Cadastro de usuário:</h2>

        @if($errors->any())
        @foreach($errors->all() as $err )
        <div class="alert alert-danger">
            {{ $err }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('user.save') }}" method="POST">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="fullName" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="fullName" name="name" aria-describedby="fullName" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="email1" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Savar</button>
        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>
