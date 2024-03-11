<x-app-layout>
    <x-slot name="header">
        <h2 style="font-weight: 600; font-size: 1.5rem; color: #4a5568;" class="leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div style="padding-top: 3rem; padding-bottom: 3rem;">
        <div style="max-width: 60rem; margin: 0 auto; padding: 0 1rem;">
            <div style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 0.5rem; padding: 2rem;">
                <div style="max-width: 40rem; margin: 0 auto;">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div style="margin-top: 2rem; background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 0.5rem; padding: 2rem;">
                <div style="max-width: 40rem; margin: 0 auto;">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div style="margin-top: 2rem; background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 0.5rem; padding: 2rem;">
                <div style="max-width: 40rem; margin: 0 auto;">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
