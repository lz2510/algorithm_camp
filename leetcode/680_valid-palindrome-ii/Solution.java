class Solution {
    public boolean validPalindrome(String s) {
        int l = 0;
        int r = s.length() - 1;
        while(l <= r){
            if(s.charAt(l) == s.charAt(r)){
                l++;
                r--;
            }else{
                return isPalindrome(s,l+1,r) || isPalindrome(s,l,r-1);
            }
        }
        return true;
    }

    private boolean isPalindrome(String s, int l, int r){
        while(l <= r){
            if(s.charAt(l) == s.charAt(r)){
                l++;
                r--;
            }else{
                return false;
            }
        }
        return true;
    }
}

//https://leetcode.com/problems/valid-palindrome-ii/discuss/107716/Java-O(n)-Time-O(1)-Space