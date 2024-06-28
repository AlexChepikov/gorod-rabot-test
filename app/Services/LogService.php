<?php

namespace App\Services;

use App\Models\Log;

class LogService
{
    /**
     * Обновление или создание лога запроса.
     *
     * @param string $path
     * @param array $request
     * @return void
     */
    public function updateOrCreateLog(string $path, array $request): void
    {
        Log::query()->updateOrCreate([
            'request' => json_encode($request)
        ], [
            'path' => $path,
        ]);
    }
}
