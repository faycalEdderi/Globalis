<?php

namespace Class;

class Interval
{
    private $intervalResult;

    public function countInterval($intervalContainer)
    {

        usort($intervalContainer, function ($a, $b) {
            return $a[0] - $b[0];
        });

        $mergeInterval = [$intervalContainer[0]];

        foreach ($intervalContainer as $interval) {

            $mergeIntervalLength = count($mergeInterval);
            $lastIntervalIndex = $mergeIntervalLength - 1;
            $lastInterval = &$mergeInterval[$lastIntervalIndex];

            if ($interval[0] <= $lastInterval[1]) {
                $lastInterval[1] = max($lastInterval[1], $interval[1]);
            } else {
                $mergeInterval[] = $interval;
            }
        }

        $this->intervalResult = $mergeInterval;
    }

    public function getInterval()
    {
        $result = [];
        foreach ($this->intervalResult as $interval) {
            $result[] = implode(', ', $interval);
        }
        return implode(' ', $result);
    }
}
