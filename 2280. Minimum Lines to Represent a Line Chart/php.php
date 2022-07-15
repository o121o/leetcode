class Solution {

    /**
     * @param Integer[][] $stockPrices
     * @return Integer
     */
    function minimumLines($stockPrices) {
        usort($stockPrices, function ($a, $b){return $a[0] > $b[0];});
        
        $lastPrice = array_pop($stockPrices);
        $lastSlope = null;
        $line = 0;
        while($stockPrices) {
            $tmpPrice = array_pop($stockPrices);
            $slopeX = bcsub($tmpPrice[0], $lastPrice[0]);
            $slopeY = bcsub($tmpPrice[1], $lastPrice[1]);
            if($slopeX && $slopeY){
                $slope = bcdiv($slopeY, $slopeX, 18);
            } elseif (!$slopeX) {
                $slope = '|';
            } else {
                $slope = '-';
            }
            if($slope !== $lastSlope) {
                $lastSlope = $slope;
                ++$line;
            }
            $lastPrice = $tmpPrice;
        }
        
        return $line;
    }
}
