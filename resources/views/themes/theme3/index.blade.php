@props([
    'heading' => null,
    'subheading' => null,
])

<div class="font-[sans-serif] text-[#333]">
    <div class="min-h-screen flex flex-col items-center justify-center">
      <div class="grid md:grid-cols-2 items-center gap-4 max-w-6xl w-full p-4 m-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md">
        <div class="md:max-w-md w-full sm:px-6 py-4">
            <section class="grid auto-cols-fr gap-y-6">
                <x-filament-panels::header.simple
                        :heading="$heading ??= $this->getHeading()"
                        :logo="$this->hasLogo()"
                        :subheading="$subheading ??= $this->getSubHeading()"
                />
                @if (filament()->hasRegistration())
                    <x-slot name="subheading">
                        {{ __('filament-panels::pages/auth/login.actions.register.before') }}

                        {{ $this->registerAction }}
                    </x-slot>
                @endif


                <x-filament-panels::form wire:submit="authenticate">
                    {{ $this->form }}

                    <x-filament-panels::form.actions
                            :actions="$this->getCachedFormActions()"
                            :full-width="$this->hasFullWidthFormActions()"
                    />
                </x-filament-panels::form>

            </section>
        </div>
        <div class="md:h-full max-md:mt-10 bg-[#000842] rounded-xl lg:p-12 p-8">
          <img src="https://readymadeui.com/signin-image.webp" class="w-full h-full object-contain" alt="login-image" />
        </div>
      </div>
    </div>
  </div>
  