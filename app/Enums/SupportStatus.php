<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = "Open";
    case c = "Closed";
    case P = "Pendent";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status) {
            if ($name === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("$name is not a valid");
    }
}