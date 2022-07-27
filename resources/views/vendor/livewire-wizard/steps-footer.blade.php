<div class="p-2 flex flex-row-reverse justify-between">
    @if($this->hasNextStep())
    <x-button rose right-icon="chevron-right" wire:click="goToNextStep" spinner="goToNextStep" :label="__('Next')" />
    @else
    <x-button rose type="submit" spinner="submit" :label="__('Submit')" />
    @endif
    @if($this->hasPrevStep())
    <x-button dark :label="__('Back')" icon="chevron-left" wire:click="goToPrevStep" spinner="goToPrevStep" />
    @endif
</div>