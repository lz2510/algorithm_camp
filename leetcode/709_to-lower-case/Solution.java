class Solution {
    public String toLowerCase(String s) {
        Map<Character, Character> hashMap = new HashMap<>();
        String upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        String lower = "abcdefghijklmnopqrstuvwxyz";
        for(int i=0; i<26; i++){
            hashMap.put(upper.charAt(i), lower.charAt(i));
        }

        StringBuilder sb = new StringBuilder();
        for(char x: s.toCharArray()){
            sb.append(hashMap.containsKey(x) ? hashMap.get(x) : x);
        }

        return sb.toString();
    }
}