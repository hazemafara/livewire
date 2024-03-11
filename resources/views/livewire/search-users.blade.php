
<div style="text-align: center;">
    <input type="text" wire:model="search" wire:keydown="searchUsers" placeholder="Search users...">

    <div style="width: 100%;">
        @php $count = 0; @endphp
        @foreach ($users as $user)
            @if ($count % 3 === 0)
                <div style="display: flex; justify-content: space-between;">
            @endif
            <div style="flex: 1; margin: 1em; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <div style="border-radius: 15px; background-color: #f2f2f2; padding: 1em; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <h5>{{ $user['name'] }}</h5>
                    <p>{{ $user['email'] }}</p>
                </div>
            </div>
            @if ($count % 3 === 2 || $count === count($users) - 1)
                </div>
            @endif
            @php $count++; @endphp
        @endforeach
    </div>

    {{ $users->links() }}
</div>
