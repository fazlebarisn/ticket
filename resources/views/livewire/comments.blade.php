<div class="w-1/2 m-auto">
    <h1 class="text-3xl mt-4">Comments</h1>
    @error('newComment')
        <span class="text-red-600">nnnnn</span>
    @enderror
    <form class="my-4 flex" wire:submit.prevent="addComment">

        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind.">

        <div class="py-2">
            <button class="p-2 bg-blue-500 w-20 rounded shadow text-white" type="submit">Add</button>
        </div>

    </form>
    @foreach ($comments as $comment)
        <div class="rounded border shadow p-3 my-2">

            <div class="flex justify-start my-2">
                <p class="font-bold text-lg">{{ $comment->user->name }}</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{ $comment->created_at->diffForHumans() }}</p>
            </div>

            <p class="text-gray-800">{{ $comment->body }}</p>

        </div>
    @endforeach  

</div>
