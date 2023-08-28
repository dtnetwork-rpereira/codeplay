<x-layout title="Posts">
    <a href="{{ route('posts.create') }}">New Post!</a>

    <div class="flex flex-col gap-4">
        @forelse($posts as $post)
        <x-generic.card>
            <div class="p-2 flex justify-between">
                <div>
                    <p>{{ $post->title }}</p>
                    <p>{{ $post->content}}</p>
                </div>

                <div class="flex">
                    <a href="{{ route('posts.edit', $post->id) }}">
                        <x-generic.button.edit />
                    </a>
                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <x-generic.button.remove />
                        </button>
                    </form>
                </div>
            </div>
        </x-generic.card>
        @empty
        <h1>Sem postagens por enquanto!</h1>
        @endforelse
    </div>
</x-layout>