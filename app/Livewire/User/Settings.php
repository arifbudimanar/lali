<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Settings extends Component
{
    public string $current_language;

    public string $language;

    public array $supported_languages;

    public function mount(): void
    {
        $this->current_language = app()->getLocale();
        $this->language = $this->current_language;
        $this->supported_languages = config('translation.supported_translations');
    }

    public function updateLanguage(): void
    {
        $this->validate([
            'language' => 'required|in:'.implode(',', array_column($this->supported_languages, 'code')),
        ]);

        if ($this->language == $this->current_language) {
            Toaster::info('Nothing changed.');
        } else {
            session(['locale' => $this->language]);
            app()->setLocale($this->language);
            Toaster::success('Language updated.');
            $this->redirect(route('user.settings'), navigate: true);
        }
    }

    #[Title('User Settings')]
    public function render(): View
    {
        session()->put('url.intended', route('user.settings'));

        return view('livewire.user.settings');
    }
}
