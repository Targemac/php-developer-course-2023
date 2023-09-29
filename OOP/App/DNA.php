<?php

declare(strict_types=1);

namespace App;

class DNA
{

    public static function nucleotideCount(string $input): array
    {
        return [
            "A" => substr_count($input, "A"),
            "C" => substr_count($input, "C"),
            "T" => substr_count($input, "T"),
            "G" => substr_count($input, "G")
        ];
    }
}
