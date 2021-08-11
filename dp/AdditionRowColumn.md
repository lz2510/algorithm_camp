For dp array relating to original array, sometimes we need add addition row and column for db array. There are 2 ways.

#Way One
##Compare i-1,j-1 and set value to dp[i][j]
int[][] dp = new int[rows + 1][cols + 1];
for (int i = 1; i <= rows; i++) {
            for (int j = 1; j <= cols; j++) {
                if (matrix[i-1][j-1] == '1'){
                    dp[i][j] = Math.min(Math.min(dp[i][j - 1], dp[i - 1][j]), dp[i - 1][j - 1]) + 1;
https://leetcode.com/problems/maximal-square/solution/

#Way Two
##Compare i, j and set value to dp[i+1][j+1]
dp = [[0]*(cols+1) for _ in range(rows+1)]   
for r in range(rows):
    for c in range(cols):
        if matrix[r][c] == '1':
            dp[r+1][c+1] = min(dp[r][c], dp[r+1][c], dp[r][c+1]) + 1 # Be careful of the indexing since dp grid has additional row and column
https://leetcode.com/problems/maximal-square/discuss/600149/Python-Thinking-Process-Diagrams-DP-Approach
            
                    
