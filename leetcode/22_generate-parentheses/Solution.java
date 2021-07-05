class Solution {
    public List<String> generateParenthesis(int n) {
        List<String> list = new ArrayList<>();
        backTrack(list, "", 0, 0, n);
        return list;
    }

    public void backTrack(List<String> list, String str, int open, int close, int max){
        if(str.length() == 2*max){
            list.add(str);
            return;
        }

        if(open < max){
            backTrack(list, str+'(', open+1, close, max);
        }
        if(close < open){
            backTrack(list, str+')', open, close+1, max);
        }
    }
}
//https://leetcode.com/problems/generate-parentheses/discuss/10100/Easy-to-understand-Java-backtracking-solution