<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Iniciar sesión</title>
</head>
<body>
    <center>
    <form style="width: 20rem; margin-top:15rem; border-radius:1rem" class="bg-primary-subtle p-3" method="POST" action="/login">
        @csrf
        <div class="mb-3"> 
            <label class="form-label" for="text"> Usuario</label>
            <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Contraseña</label>
            <input class="form-control" type="password" id="password" name="password" required>
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Iniciar sesión</button>
        </div>

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    </center>
</body>
</html>
