class Solution {
    public int numJewelsInStones(String jewels, String stones) {
        Set<Character> hashSet = new HashSet<>();
        for(char j : jewels.toCharArray()){
            hashSet.add(j);
        }

        int num = 0;
        for(char s: stones.toCharArray()){
            if(hashSet.contains(s)){
                num++;
            }
        }
        return num;
    }
}