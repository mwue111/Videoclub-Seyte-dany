<table>
    <thead>
        <th>Título</th>
        <th>Año</th>
        <th>Duración</th>
        <th>Sinopsis</th>
        <th>Género</th>
        <th>Director</th>
        <th>Póster</th>
        <th colspan="2">Acciones</th>
    </thead>
    <tbody>
        @forelse($movies as $movie)
        <tr>
            <td>
                <a href="{{ route('peliculas.show', $movie) }}" target="_blank">
                    {{ $movie->title }}
                </a>
            </td>
            <td> {{ $movie->year }}</td>
            <td> {{ $movie->runtime }}</td>
            <td> {{ $movie->plot }}</td>
            <td> {{ $movie->genre }}</td>
            <td> {{ $movie->director }}</td>
            <td>
                <img src="{{ asset('storage/' . $movie->poster ) }}" alt="Poster de la película {{ $movie->title }}" style="width:10%"/>
            </td>
            <td>
                <a href="{{ route('peliculas.edit', $movie) }}" target="_blank">
                    Editar
                </a>
            </td>
            <td>
                <form action="{{ route('peliculas.destroy', $movie) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @empty

            <p>No hay películas aún.</p>

        @endforelse
    </tbody>
</table>


<a href="{{ route('peliculas.create') }}">Añadir película</a>
