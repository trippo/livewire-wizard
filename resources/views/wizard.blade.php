<div>
    <form wire:submit.prevent="save">
        @include('livewire-wizard::steps-header')
        <x-errors/>
        <div class="container p-4">
            {{ $this->getCurrentStep() }}
        </div>

        @include('livewire-wizard::steps-footer')
    </form>
</div>
