class Solution {
    public int findCircleNum(int[][] isConnected) {
        int n = isConnected.length;
        UnionFind unionFind = new UnionFind(n);
        for(int i=0; i<n-1; i++){
            for(int j=i+1; j<n; j++){
                if(isConnected[i][j] == 1) unionFind.union(i,j);
            }
        }
        return unionFind.count();
    }
}

class UnionFind {
    private int count = 0;
    private int[] parent;

    public UnionFind(int n){
        count = n;
        parent = new int[n];
        for(int i=0; i<n; i++){
            parent[i] = i;
        }
    }

    public int find(int p){
        while(p != parent[p]){
            parent[p] = parent[parent[p]]; //path compression
            p = parent[p];
        }
        return p;
    }

    public void union(int p, int q){
        int rootP = find(p);
        int rootQ = find(q);
        if(rootP == rootQ) return;
        parent[rootP] = rootQ;
        count--;
    }

    public int count(){
        return count;
    }

}
//https://leetcode.com/problems/number-of-provinces/discuss/101336/Java-solution-Union-Find