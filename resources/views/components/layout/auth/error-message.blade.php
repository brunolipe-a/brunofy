@if ($errors->any())
  <div class="absolute w-full bg-red-100 p-4 text-sm text-red-700 dark:bg-red-200 dark:text-red-800" role="alert">
    <div class="flex gap-4">
      <x-heroicon-s-x-circle class="w-5 text-red-400" />
      <span>
        Existem {{ $errors->count() }} erros na sua requisição
      </span>
    </div>
    <ul class="ml-[53px] mt-2 list-disc">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
