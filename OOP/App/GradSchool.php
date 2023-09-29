<?php

declare(strict_types=1);

namespace App;

class School
{
    private $students = [];

    public function add(string $name, int $grade): void
    {
        // multidimensional array
        $this->students["grade"][] = $name;
    }

    public function grade($grade): array
    {
        // using nullish coallesin operator
        return $this->students[$grade] ?? [];
    }

    public function studentsByGradeAlphabetical(): array
    {
        // sort by key
        ksort($this->students);

        // sort nested array
        return array_map(function ($grade) {
            sort($grade); //sort in alphabetical order
            return $grade;
        }, $this->students);
    }
}
