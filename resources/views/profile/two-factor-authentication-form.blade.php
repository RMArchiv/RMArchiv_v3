<x-jet-action-section>
    <x-slot name="title">
        {{ __('user/profile.tfa_title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('user/profile.tfa_title_description') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-rm-color">
            @if ($this->enabled)
                {{ __('user/profile.tfa_enabled') }}
            @else
                {{ __('user/profile.tfa_disabled') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm rm-color">
            <p>
                {{ __('user/profile.tfa_description') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-rm-color">
                    <p class="font-semibold">
                        {{ __('user/profile.tfa_enabled_description') }}
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-rm-color">
                    <p class="font-semibold">
                        {{ __('user/profile.tfa_recovery_description') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('user/profile.enable') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('user/profile.regenerate_recovery_codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('user/profile.show_recovery_codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('user/profile.disable') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
