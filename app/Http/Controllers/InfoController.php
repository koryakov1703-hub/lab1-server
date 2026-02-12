<?php

namespace App\Http\Controllers;

use App\DTO\ClientInfoDTO;
use Illuminate\Http\Request;
use App\DTO\ServerInfoDTO;
use App\DTO\DatabaseInfoDTO;

class InfoController extends Controller
{
    /**
     * Базовый тестовый endpoint группы /info.
     */

    public function index()
    {
        return response()->json([
            'message' => 'info index works'
        ]);
    }

    /**
     *  Возвращает данные о клиенте: IP и User-Agent.
     */

    public function client(Request $request)
    {
        $dto = new ClientInfoDTO(
            ip: $request->ip(),
            useragent: $request->userAgent(),
        );

        return response()->json($dto->toArray());
    }


    /**
     *  Возвращает данные о сервере: версия PHP.
     */

    public function server()
    {
        $dto = new ServerInfoDTO(
            php_version: PHP_VERSION,
        );

        return response()->json($dto->toArray());
    }


    /**
     * Возвращает данные об используемой базе данных (драйвер/хост/база).
     */

    public function database()
    {
        $driver = config('database.default');
        $connection = config('database.connections.' . $driver);

        $dto = new DatabaseInfoDTO(
            driver: (string) $driver,
            host: $connection['host'] ?? null,
            database: $connection['database'] ?? null,
        );

        return response()->json($dto->toArray());
    }


}


