# climbing stairs

## terminal

Return n <= 2 and only reutrn n == 1, both are ok.  
For n <= 2, when n is 2, return immidiately.  
For n == 2, when n is 2, use return $dp[$n] or $dp[$n-1], value is $dp second inital value 2.  

    if ($n <= 2) return $n;
  
    if ($n == 1) return 1;

## dp initial, iteration start, iteration end and return

If dp index starts from 0, then initial is dp[0] and dp[1].  
So iteration start from the third index 2, and end with n - 1, use $i < $n or $i <= $n -1  
As i max is n - 1, use $i < $n or $i <= $n -1, so return $dp[$n-1]  

    $dp = [];
    $dp[0] = 1;
    $dp[1] = 2;
    for ($i = 2; $i <= $n - 1; $i++) {
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }
   
    return $dp[$n-1];
    
If dp index starts from 1, then initial is dp[1] and dp[2].  
So iteration start from the third index 3, and end with n, use $i <= $n.    
As i max is n, so returun $dp[$n]  


    $dp = [];
    $dp[1] = 1;
    $dp[2] = 2;
    for ($i = 3; $i <= $n; $i++) {
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }
    
    return $dp[$n];
        

        
## terimal, iteration start

No matter n <= 2 or only reutrn n == 1, dp start index can start from 0 or 1, both are ok.  

When n is 2, below code will return $dp[$n-1], which means $dp[1] is 2.

    if ($n == 1) return 1;
    $dp = [];
    $dp[0] = 1;
    $dp[1] = 2;
    return $dp[$n-1];
    
When n is 2, below code will return $dp[$n], which means $dp[2] is 2.
    
    $dp = [];
    $dp[1] = 1;
    $dp[2] = 2;
    
    return $dp[$n]; 
    
Above two codes return the same value 2.


        
        
        
