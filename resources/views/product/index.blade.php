
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" ">
    <title>Productos</title>
</head>
<body>
<h1>Listado de Compañias</h1>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <table CLASS="table table-success table-hover table-striped table-bordered">
                <thead>
                <tr class="text-center">
                    <th class="col-1" scope="col">ID</th>
                    <th class="col-3" scope="col">EMPRESA</th>
                    <th class="col-1" scope="col">NIT</th>
                    <th class="col-6" scope="col">DIRECCION</th>
                    <th class="col-1" scope="col">LOGO</th>
                </tr>
                </thead>
                    <tbody>
                        @foreach($products as $empresa)
                            <tr>

                                <td> {{ $empresa->id }} </td>
                                <td> {{ $empresa->name }} </td>
                                <td> {{ $empresa->nit }} </td>
                                <td> {{ $empresa->address }} </td>
                                <td><img class="img-fluid img-thumbnail" src="{{ $empresa->logo }}" alt=""> </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
</div>
</body>
</html>
