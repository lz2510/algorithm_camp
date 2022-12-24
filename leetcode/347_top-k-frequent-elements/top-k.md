# top K

### approaches

sort: NlogN  
heap: NlogK  
quick sort  

heap is faster than sort, NlogK < NlogN when K < N

## count frequent

### approach 1 is to use built-in array_count_values

### approach 2 is to use array

    $freqs = []; 
    foreach ($nums as $num) { 
        $freqs[$num] = isset($freqs[$num]) ? $freqs[$num] +1 : 1; 
    } 

## if only keep num $k elements, value must be $n - $req, or it will pop up the first max
            
    $queue->insert($num, $n - $req);
    if ($queue->count() > $k) {
        $queue->extract();
    }
            
## as only keep num $k elements, all elements in a queue is valid
        while (!$queue->isEmpty()) {
            $res[] = $queue->extract();    
        }
        
## result

for [1,1,1,2,2,3] the result is [2, 1], the expected is [1, 2]. 

As value is $n - $req. It's same as this question don't check the order of elements, but not the best. 

the best should still be store $req as value.
        
