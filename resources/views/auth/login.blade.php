<x-layout.auth title="Acesse sua conta" pageTitle="Login">
  <x-slot:subtitle>
    Ou
    <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500"> crie uma nova
    </a>
  </x-slot:subtitle>
  <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
    @csrf
    <input type="hidden" name="remember" value="true">
    <div class="rounded-md shadow-sm">
      <x-layout.auth.input id="email" name="email" label="E-mail" required type="email" autocomplete="email"
        class="rounded-t-md" />
      <x-layout.auth.input id="password" name="password" label="Senha" type="password" required class="rounded-b-md" />
    </div>

    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <input id="remember-me" name="remember-me" type="checkbox"
          class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
        <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Lembre de mim </label>
      </div>

      <div class="text-sm">
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Esqueceu sua senha? </a>
      </div>
    </div>

    <div>
      <x-layout.auth.button icon="heroicon-s-lock-closed">Entrar</x-layout.auth.button>
    </div>
  </form>
</x-layout.auth>
