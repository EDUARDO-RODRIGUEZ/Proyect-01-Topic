<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Bootstrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>App Register</title>

</head>

<body>

    <div class="container p-2">

        <div class="row">

            <div class="col-md-4 mx-auto">

                <div class="card shadow">

                    <div class="card-header bg-dark">
                        <h2 class="text-center text-white">Register</h2>
                    </div>

                    <div class="card-body">

                        <form action="{{route('usuario.save')}}" method="POST">

                            @csrf

                            <div class="my-2">
                                <input class="form-control" type="text" name="name" placeholder="name..." autocomplete="off"/>
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>

                            <div class="my-2">
                                <input class="form-control" type="email" name="email" placeholder="ed@ed.com"  autocomplete="off" />
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            </div>

                            <div class="my-2">
                                <input class="form-control" type="password" name="password" placeholder="********"  autocomplete="off" />
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                            </div>

                            <div class="my-2">
                                <button class="btn btn-dark w-100" type="submit">save</button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
</body>

</html>