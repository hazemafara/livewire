<div>
    <input wire:model="search" wire:keydown="applyFilter" type="text" placeholder="Search users...">

    @if(isset($users) && count($users) > 0)
    <ul>
        @foreach($users as $user)
        <li>{{ $user['name'] }}</li>
        @endforeach
    </ul>
    @else
    <p>No users match your search criteria.</p>
    @endif
</div>
