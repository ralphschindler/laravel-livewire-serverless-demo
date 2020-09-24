# Serverless demo for Laravel Livewire

change to vendor/livewire/livewire/src/LivewireManager.php

```php
    public function isOnVapor()
    {
        return ($_ENV['SERVER_SOFTWARE'] ?? null) === 'vapor'
            || ($_ENV['SERVER_SOFTWARE'] ?? null) === 'bref';
    }
```