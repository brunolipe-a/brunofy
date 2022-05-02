@props(['pagination' => null, 'thead' => null, 'tbody' => null, 'hasPagination' => false])

<div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
  <div class="border border-gray-200 bg-white align-middle shadow dark:border-gray-700 dark:bg-gray-800 sm:rounded-lg">
    <x-table.search />
    <div class="overflow-x-auto py-1">
      <table {{ $attributes->class('min-w-full') }}>
        <thead>
          {{ $thead }}
        </thead>
        <tbody class="bg-white dark:bg-gray-800">
          {{ $tbody }}
        </tbody>
      </table>
    </div>
    @if ($hasPagination)
      <div class="flex items-center justify-between bg-white px-4 py-3 dark:bg-gray-800 sm:rounded-b-lg sm:px-6">
        {{ $pagination }}
      </div>
    @endif
  </div>
</div>
