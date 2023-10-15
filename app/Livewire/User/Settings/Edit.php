<?php

namespace App\Livewire\User\Settings;

use Illuminate\View\View;
use Livewire\Component;

class Edit extends Component
{
    public string $currentLanguage;

    public string $selectedLanguage;

    public array $supportedLanguages;

    public function mount(): void
    {
        $this->currentLanguage = app()->getLocale();
        $this->selectedLanguage = $this->currentLanguage;
        $this->supportedLanguages = config('translation.supported_translations');
    }

    public function updateLanguage(): void
    {
        $this->validate([
            'selectedLanguage' => 'required|in:'.implode(',', array_keys($this->supportedLanguages)),
        ]);
        if ($this->selectedLanguage == $this->currentLanguage) {
            $this->dispatch('nothingChanged');
        } else {
            session(['locale' => $this->selectedLanguage]);
            app()->setLocale($this->selectedLanguage);
            session()->flash('languageUpdated', __('Language updated.'));
            $this->redirect(route('user.settings'), navigate: true);
        }
    }

    public function render(): View
    {
        session()->put('url.intended', url()->current());

        return view('livewire.user.settings.edit');
    }
}
