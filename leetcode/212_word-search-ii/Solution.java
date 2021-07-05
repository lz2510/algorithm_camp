class Solution {
    public List<String> findWords(char[][] board, String[] words) {
        List<String> res = new ArrayList<String>();
        Trie trie = new Trie();
        TrieNode root = trie.buildTrie(words);
        //TrieNode root = buildTrie($words);
        for(int i=0; i<board.length; i++){
            for(int j=0; j<board[i].length; j++){
                dfs(board, i, j, root, res);
            }
        }
        return res;
    }

    /*public TrieNode buildTrie(String[] $words){
        TrieNode root = new TrieNode();
        for(String w:words){
            TrieNode p = root;
            for(char c : w.toCharArray()){
                int i = c - 'a';
                if(p.next[i] == null) p.next[i] = new TrieNode();
                p = p.next[i];
            }
            p.word = w;
        }
        return root;
    }*/

    public void dfs(char[][] board, int i, int j, TrieNode p, List<String> res){
        char c = board[i][j];
        if(c == '#' || p.next[c-'a'] == null) return;
        p = p.next[c-'a'];
        if(p.word != null){
            res.add(p.word);
            p.word = null;
        }

        board[i][j] = '#';
        if(i > 0) dfs(board, i-1, j, p, res);
        if(j > 0) dfs(board, i, j-1, p, res);
        if(i < board.length-1) dfs(board, i+1, j, p, res);
        if(j < board[0].length-1) dfs(board, i, j+1, p, res);
        board[i][j] = c;
    }
}

class Trie{
    //public TrieNode root;
    public Trie(){
        //root = new TrieNode();
    }

    public TrieNode buildTrie(String[] words){
        TrieNode root = new TrieNode();
        for(String w:words){
            TrieNode p = root;
            for(char c : w.toCharArray()){
                int i = c - 'a';
                if(p.next[i] == null) p.next[i] = new TrieNode();
                p = p.next[i];
            }
            p.word = w;
        }
        return root;
    }
}

class TrieNode{
    TrieNode[] next = new TrieNode[26];
    String word;
}
//https://leetcode.com/problems/word-search-ii/discuss/59780/Java-15ms-Easiest-Solution-(100.00)
//https://leetcode-cn.com/problems/word-search-ii/solution/xiang-xi-tong-su-de-si-lu-fen-xi-duo-jie-fa-by-44/