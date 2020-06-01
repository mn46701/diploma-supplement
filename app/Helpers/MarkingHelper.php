<?php

namespace App\Helpers;


trait MarkingHelper
{

    public function getMarkLetter($points)
    {
        $range = range(0, 100, 10);
        $resultRange = $this->getRangeNumber($points, $range);
        $resultMark = $resultRange[0];
        $markFounded = null;
        foreach (['A', 'B', 'C', 'D', 'E'] as $mark) {
            if (!is_null($markFounded)) continue;
            if ((int)$resultMark >= env("MARK_$mark")) {
                $markFounded = $mark;
            }
        }
        if (is_null($markFounded)) return 'F';
        return $markFounded;
    }

    public function getRangeNumber($num, $list)
    {
        $curent_range_step = [];
        foreach ($list as $key => $range) {
            if (array_key_exists($key + 1, $list)) {
                $options = [
                    'min_range' => $list[$key],
                    'max_range' => ($list[$key + 1])
                ];
                $check_range = filter_var($num, FILTER_VALIDATE_INT, array(
                    'default' => false,
                    'options' => $options,
                ));
                if ($check_range !== false) {
                    $curent_range_step = [
                        $list[$key],
                        $list[$key + 1],
                    ];
                }
            }
        }
        return $curent_range_step;
    }

    public function markConstants()
    {
        return [
            'A' => [
                'text' => 'Відмінно / Excelent',
                'national_grate' => 5
            ],
            'B' => [
                'text' => 'Добре / Good',
                'national_grate' => 4
            ],
            'C' => [
                'text' => 'Добре / Good',
                'national_grate' => 4
            ],
            'D' => [
                'text' => 'Задовільно / Satisfactory',
                'national_grate' => 3
            ],
            'E' => [
                'text' => 'Задовільно / Satisfactory',
                'national_grate' => 3
            ],
            'F' => [
                'text' => 'Незадовільно / Unsatisfactory',
                'national_grate' => 2
            ]
        ];
    }


}
