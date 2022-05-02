@props(['title', 'subtitle' => null])

<x-layout.app {{ $attributes }}>
  <x-layout.auth.error-message />
  <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
          alt="Workflow">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 dark:text-gray-100">{{ $title }}</h2>
        <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-300">
          {{ $subtitle }}
        </p>
      </div>
      {{ $slot }}
    </div>
  </div>
</x-layout.app>
