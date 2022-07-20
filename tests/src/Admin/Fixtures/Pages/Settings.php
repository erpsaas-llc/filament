<?php

namespace Filament\Tests\Admin\Fixtures\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static string $view = 'admin.fixtures.pages.settings';

    public $name;

    public function notificationManager(bool $redirect = false)
    {
        if ($redirect) {
            $this->redirect('/');
        }

        $this->notify(
            Notification::make()
                ->title('Saved!')
                ->success(),
        );
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->required(),
        ];
    }

    public function save()
    {
        $this->form->getState();
    }
}
