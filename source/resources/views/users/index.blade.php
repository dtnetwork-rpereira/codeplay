<x-app-layout title="Users">
    Users

    @forelse($users as $user)
        <h2>#{{ $user->id }} {{ $user->username }}</h2>
    @empty
        <h1>Sem nenhum usuário!</h1>
    @endforelse
</x-app-layout>
