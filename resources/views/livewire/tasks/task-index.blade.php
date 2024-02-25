<div>
    <div class="text-center mb-10">
        <input type="text" wire:model.blur="name"
            class="rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <button class="h-10 px-6 font-semibold rounded-md bg-black text-white" type="submit" wire:click='store'>
            add new task
        </button>
        <span x-text="$wire.name.length"></span>
    </div>
    <div class="text-center ">

        @error('name')
            <span class="text-center text-red-500">{{ $message }}</span>
        @enderror
    </div>

    @foreach ($tasks as $task)
        <x-task :task="$task" />
    @endforeach
</div>
