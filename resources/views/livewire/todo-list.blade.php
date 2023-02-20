<div>
    <h1>ToDo List</h1>

    <form wire:submit.prevent="addTask">
        <input type="text" wire:model.defer="newTask">
        <button type="submit">Add Task</button>
    </form>

    <ul>
        @foreach($tasks as $index => $task)
        <li>
            {{ $task }}
            <button wire:click="deleteTask({{ $index }})">Delete</button>
        </li>
        @endforeach
    </ul>
</div>