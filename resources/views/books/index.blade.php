<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Metodo create (para crear datos) en el contenedor div de abajo con un form. -->
    <div>
        <form action="{{route('books.store')}}" method="post">
            @csrf
            <input type="text" name="nombre" id="">
            <input type="date" name="fecha" id="">
            <input type="text" name="edicion" id="">
            <input type="number" name="precio" id="">
            <button type="submit">Guardar</button>
        </form>
    </div>

<!-- Metodo index en el contenedor div de abajo. -->
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Edición</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <th>{{$book->name}}</th>
                    <th>{{$book->year}}</th>
                    <th>{{$book->edition}}</th>
                    <th>{{$book->price}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>