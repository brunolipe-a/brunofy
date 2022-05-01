<x-layout.admin pageTitle="Artistas">
  <table>
    <thead>
      <th>Nome</th>
      <th>Avatar</th>
    </thead>
    <tbody>
      @foreach ($artists as $artist)
        <tr>
          <td>{{ $artist->name }}</td>
          <td>{{ $artist->avatar }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {{ $artists->links() }}
</x-layout.admin>
