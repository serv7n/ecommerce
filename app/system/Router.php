<?php
namespace app\System;

use app\Controllers\main;
use Exception;

class Router
{
    public static function dispatch()
    {
        // Valores padrão para a rota
        $httpverb = $_SERVER['REQUEST_METHOD'];
        $controller = 'main';
        $method = 'index';

        // Verificar parâmetros URI
        if (isset($_GET['ct'])) {
            $controller = $_GET['ct'];
        }

        if (isset($_GET['mt'])) {
            $method = $_GET['mt'];
        }

        // Validar e preparar parâmetros
        $parameters = $_GET;

        // Validar 'id'
        if (isset($parameters['id'])) {
            $parameters['id'] = filter_var($parameters['id'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]]);
            if ($parameters['id'] === false) {
                self::handleInvalidRequest("Parâmetro 'id' inválido");
                return;
            }
        }

        // Validar 'lm'
        if (isset($parameters['lm'])) {
            $parameters['lm'] = filter_var($parameters['lm'], FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]]);
            if ($parameters['lm'] === false) {
                self::handleInvalidRequest("Parâmetro 'lm' inválido");
                return;
            }
        }

        // Remover 'id' e 'lm' dos parâmetros
        unset($parameters['id'], $parameters['lm'], $parameters['ct'], $parameters['mt']);

        try {
            $class = "app\Controllers\\$controller";
            $controller = new $class();
            $controller->$method(...$parameters);
        } catch (\Throwable $err) {
            self::handleException($err);
        }
    }

    // Lida com requisições inválidas
    private static function handleInvalidRequest($message)
    {
        $controller = new main();
        $controller->erro404($message); // Customize o erro404 para aceitar uma mensagem personalizada
    }

    // Lida com exceções inesperadas
    private static function handleException($err)
    {
        error_log($err->getMessage()); // Log do erro para debug
        $controller = new main();
        $controller->erro404("Ocorreu um erro inesperado");
    }
}
