<x-layout.admin pageTitle="Artistas">

  <x-table class="text-sm" :has-pagination="$artists->hasPages()">
    <x-slot:thead>
      <tr>
        <x-table.th>Nome</x-table.th>
        <x-table.th>Avatar</x-table.th>
        <x-table.th></x-table.th>
      </tr>
    </x-slot:thead>
    <x-slot:tbody>
      @forelse ($artists as $artist)
        <tr>
          <x-table.td>{{ $artist->name }}</x-table.td>
          <x-table.td>
            <img src="{{ $artist->avatar }}" class="h-10 w-10 rounded-full object-cover" />
          </x-table.td>
          <x-table.td class="space-x-4 text-right font-medium">
            <a href="#"
              class="text-indigo-600 hover:text-indigo-700 focus:underline focus:outline-none dark:text-indigo-500">Editar</a>
            <a href="#"
              class="text-red-600 hover:text-red-700 focus:underline focus:outline-none dark:text-red-500">Deletar</a>
          </x-table.td>
        </tr>
      @empty
        <x-table.empty colspan="3" />
      @endforelse
    </x-slot:tbody>

    <x-slot:pagination>
      {{ $artists->withQueryString()->onEachSide(1)->links() }}
    </x-slot:pagination>
  </x-table>
</x-layout.admin>
