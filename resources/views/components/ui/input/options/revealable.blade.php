<x-ui.input.options.button
    x-data="{
        revealed: false,
        toggleReveal() {
            const input = this.$refs.input;
            if (!input) return;
            
            this.revealed = !this.revealed;
            input.type = this.revealed ? 'text' : 'password';
        }
    }"
    x-on:click="toggleReveal()"
    x-bind:data-slot-revealed="revealed"
    x-bind:aria-label="revealed ? 'Hide password' : 'Show password'"
    x-bind:title="revealed ? 'Hide password' : 'Show password'"
>     
    <x-ui.icon 
        name="eye-slash" 
        class="hidden [[data-slot-revealed]>&]:block"
        aria-hidden="true"
    />
    <x-ui.icon 
        name="eye" 
        class="block [[data-slot-revealed]>&]:hidden"
        aria-hidden="true"
    />
</x-ui.input.options.button>