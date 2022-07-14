class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxPoints($points) {
        $maxCount = 0;

        foreach($points as $srow) {
            $slope = array();
            foreach($points as $i => $trow) {
                if($srow === $trow) {
                    continue;
                }
                $slopeX = bcsub($srow[0], $trow[0]);
                $slopeY = bcsub($srow[1], $trow[1]);
                if($slopeX && $slopeY){
                    $slope[$i] = bcdiv($slopeY, $slopeX, 10);
                } elseif (!$slopeX) {
                    $slope[$i] = '|';
                } else {
                    $slope[$i] = '-';
                }
            }
            $maxCount = $slope ? max($maxCount, max(array_count_values($slope))) : 0;
        }
        return $maxCount + 1;
    }
}
