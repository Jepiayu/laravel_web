
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar libro</title>
</head>
<body>

    <h1>Editar libro</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input
                type="text"
                name="nombre"
                id="nombre"
                value="{{ old('nombre', $book->name) }}"
                required
            >
        </div>

        <div>
            <label for="fecha">Fecha:</label>
            <input
                type="date"
                name="fecha"
                id="fecha"
                value="{{ old('fecha', $book->year) }}"
                required
            >
        </div>

        <div>
            <label for="edicion">Edición:</label>
            <input
                type="text"
                name="edicion"
                id="edicion"
                value="{{ old('edicion', $book->edition) }}"
                required
            >
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input
                type="number"
                name="precio"
                id="precio"
                step="0.01"
                min="0"
                value="{{ old('precio', $book->price) }}"
                required
            >
        </div>

        <button type="submit">Actualizar libro</button>

        <a href="{{ route('books.index') }}">Cancelar</a>
    </form>

</body>
</html>
