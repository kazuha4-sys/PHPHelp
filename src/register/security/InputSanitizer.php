<?php

namespace PHPHelp\Security;

class InputSanitizer
{
    public static function sanitize(string $input): string
    {
        // Limpa espaços e caracteres suspeitos
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }

    public static function sanitizeEmail(string $email): string
    {
        return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
    }

    public static function sanitizeInt(string $input): int
    {
        return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
    }

    public static function sanitizeArray(array $data): array
    {
        return array_map(function ($item) {
            return self::sanitize($item);
        }, $data);
    }
}
