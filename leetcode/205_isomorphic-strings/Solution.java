class Solution {
    public boolean isIsomorphic(String s, String t) {
        int len = s.length();
        int[] m1 = new int[256];
        int[] m2 = new int[256];

        for(int i=0; i<256; i++){
            m1[i] = m2[i] = -1;
        }

        for(int i=0; i<len; i++){
            if(m1[s.charAt(i)] != m2[t.charAt(i)]) return false;
            m1[s.charAt(i)] = m2[t.charAt(i)] = i;
        }
        return true;
    }
}

//https://leetcode.com/problems/isomorphic-strings/discuss/57796/My-6-lines-solution