<div class="m-2 flex justify-end">
  <form action="{{ request()->fullUrl() }}">
    @foreach (request()->query() as $query => $value)
      @if (!in_array($query, ['page', '_token', 'search']))
        <input type="hidden" name="{{ $query }}" value="{{ $value }}">
      @endif
    @endforeach

    <div class="flex items-stretch -space-x-px">
      <input type="text"
        class="block w-full rounded-l-md border-gray-300 text-sm shadow-sm dark:border-gray-600 dark:bg-gray-700"
        name="search" placeholder="Pesquisar..." value="{{ request()->query('search') }}" />
      <button
        class="rounded-r-md border border-l-0 border-gray-300 px-2 text-indigo-500 shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-indigo-400"
        type="submit">
        <x-heroicon-s-search class="h-5 w-5" />
      </button>
    </div>
  </form>
</div>
