@props(['id', 'label', 'name'])

@php
$classes = ['appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 dark:text-gray-300 dark:bg-gray-800 dark:border-gray-700 sm:text-sm', 'border-red-500 placeholder-red-500 dark:border-red-600' => $errors->has($name)];
@endphp

<div>
  <label for="{{ $id }}" class="sr-only">{{ $label }}</label>
  <input id="{{ $id }}" name="{{ $name }}" {{ $attributes->class($classes) }}
    placeholder="{{ $label }}">
</div>
