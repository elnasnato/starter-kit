<div class="mx-auto mt-24 max-w-xl">
    <x-ui.fieldset label="Reset your password">
        <form wire:submit="resetPassword" x-data="form">
           {{-- Original form fields converted to new UI components --}}
            <x-ui.field required>
                <x-ui.label>email address</x-ui.label>
                <x-ui.input 
                    wire:model.blur="email"
                    type="email"
                    placeholder="Enter your email address"
                />
                <x-ui.error name="email" />
            </x-ui.field>

            <x-ui.field required>
                <x-ui.label>password</x-ui.label>
                <x-ui.input 
                    wire:model.blur="password"
                    type="password"
                    revealable
                    placeholder="Enter your new password"
                />
                <x-ui.error name="password" />
            </x-ui.field>

            <x-ui.field required>
                <x-ui.label>password confirmation</x-ui.label>
                <x-ui.input 
                    wire:model.blur="password_confirmation"
                    type="password"
                    revealable
                    placeholder="Confirm your new password"
                />
                <x-ui.error name="password_confirmation" />
            </x-ui.field>
            
            <x-ui.button class="w-full mt-4"
                type="submit"
                wire:loading.class="opacity-50 duration-300 transition"
                wire:target="resetPassword">
                    Reset
                <div class="hidden"
                    wire:loading
                    wire:target="login">
                    <x-filament::loading-indicator class="h-5 w-5" />
                </div>
            </x-ui.button>
        </form>
    </x-fieldset>
</div>
