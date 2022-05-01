@props(['icon'])

<button type="submit"
  class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
  <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-indigo-500 group-hover:text-indigo-400">
    <x-dynamic-component component="{{ $icon }}" class="h-5 w-5" />
  </span>
  {{ $slot }}
</button>
