<x-layout.auth title="Crie sua conta" pageTitle="Registrar">
  <x-slot:subtitle>
    Ou
    <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500"> já tem sua conta?
    </a>
  </x-slot:subtitle>
  <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
    @csrf
    <input type="hidden" name="remember" value="true">
    <div class="rounded-md shadow-sm">
      <x-layout.auth.input id="name" name="name" label="Nome" class="rounded-t-md border" required autocomplete="name" />
      <x-layout.auth.input id="email" name="email" label="E-mail" required type="email" autocomplete="email" />
      <x-layout.auth.input id="password" name="password" label="Senha" type="password" required />
      <x-layout.auth.input id="password_confirmation" name="password_confirmation" type="password"
        label="Confirmação da senha" class="rounded-b-md border" required />
    </div>
    <div>
      <x-layout.auth.button icon="heroicon-s-user-add">Criar</x-layout.auth.button>
    </div>
  </form>
</x-layout.auth>
