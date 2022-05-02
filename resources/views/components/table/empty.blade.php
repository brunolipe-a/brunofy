@props([
    'description' => null,
    'heading' => 'Sem registros',
    'icon' => 'heroicon-o-x',
])

<x-table.td {{ $attributes }}>
  <div
    {{ $attributes->class([
        'flex flex-1 flex-col items-center justify-center p-6 mx-auto space-y-6 text-center bg-white dark:bg-gray-800',
    ]) }}>
    <div @class([
        'flex items-center justify-center w-16 h-16 text-indigo-500 rounded-full bg-indigo-50 dark:bg-gray-700',
    ])>
      <x-dynamic-component :component="$icon" class="h-6 w-6" />
    </div>

    <div class="max-w-xs space-y-1">
      <h2 {{ $attributes->class(['text-xl font-bold tracking-tight dark:text-white']) }}>
        {{ $heading }}
      </h2>

      @if ($description)
        <p {{ $attributes->class(['text-sm font-medium text-gray-500  dark:text-gray-400']) }}>
          {{ $description }}
        </p>
      @endif
    </div>
  </div>
</x-table.td>
