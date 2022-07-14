class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $a = array_merge($nums1, $nums2);
        sort($a);
        $cc = count($a);
        if($cc % 2){
            return $a[($cc + 1)/2 - 1];
        }else{
            return ($a[$cc / 2] + $a[($cc / 2) - 1])/2;
        }
    }
}
