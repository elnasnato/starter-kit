<x-ui.input.options.button      
    x-data="{ 
        copied: false,
        async doCopy() {
            try {
                const input = this.$refs.input;
                if (!input?.value) return;
                
                await navigator.clipboard.writeText(input.value);
                this.copied = true;
                setTimeout(() => this.copied = false, 2000);
            } catch (error) {
                console.warn('Failed to copy to clipboard:', error);
            }
        }
    }"
    x-on:click="doCopy()"
    x-bind:data-slot-copied="copied"
    x-bind:aria-label="copied ? 'Copied!' : 'Copy to clipboard'"
    x-bind:title="copied ? 'Copied!' : 'Copy to clipboard'"
>     
    <x-ui.icon 
        name="clipboard-document-check" 
        class="hidden [[data-slot-copied]>&]:block" 
        aria-hidden="true"
    />
    <x-ui.icon 
        name="clipboard-document" 
        class="block [[data-slot-copied]>&]:hidden" 
        aria-hidden="true"
    />
</x-ui.input.options.button>