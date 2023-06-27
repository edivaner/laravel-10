<?php

namespace App\Enums;

enum SupportStatus: string
{
        //  [name] = [value]
    case A = "Open";
    case C = "Closed";
    case P = "Pendent";

    public static function fromValue(string $valor): string
    {
        foreach (self::cases() as $status) {
            if ($valor === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("$status is not a value");
    }
}
