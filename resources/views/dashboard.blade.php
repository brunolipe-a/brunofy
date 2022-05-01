<x-layout.app pageTitle="Dashboard">
  <h1 class="text-2xl font-bold">Bem-vindo {{ auth()->user()->name }}</h1>
  <form action="{{ route('logout') }}"
        method="POST">
    @csrf
    <button type="submit">Logout</button>
  </form>
</x-layout.app>
