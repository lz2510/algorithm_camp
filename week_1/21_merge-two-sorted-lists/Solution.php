<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * Time complexity:O(m+n)
     * Space complexity:O(m+n)
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        if($l1 == null){
            return $l2;
        }elseif($l2 == null){
            return $l1;
        }elseif($l1->val < $l2->val){
            $l1->next = $this->mergeTwoLists($l1->next, $l2);
            return $l1;
        }else{
            $l2->next = $this->mergeTwoLists($l1, $l2->next);
            return $l2;
        }
    }
}
