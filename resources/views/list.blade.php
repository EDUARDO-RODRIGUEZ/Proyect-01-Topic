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

    <div class="container">

        <h2>Lista de usuarios</h2>

        <div class="row">

            <div class="col-md-6">

                <table class="table table-striped">

                    <thead>

                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($usuarios as $usuario)

                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                        </tr>
                            
                        @empty
                        
                        <tr>
                            <td colspan="3">No existen usuarios</td>
                        </tr>
                            
                        @endforelse

                    </tbody>

                </table>

            </div>
        </div>

    </div>
    
</body>

</html>