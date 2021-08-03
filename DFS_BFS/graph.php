<?php

$graph = [
    'A'=>['B','C'],
    'B'=>['A','C','D'],
    'C'=>['A','B','D','E'],
    'D'=>['B','C','E','F'],
    'E'=>['C','D'],
    'F'=>['D'],
];

function BFS2($graph, $root){
    $queue = new SplQueue();
    $queue->enqueue($root);
    $visited = [$root];
    $res = array();
    while(!$queue->isEmpty()){
        $vertex = $queue->dequeue();
        $node = $graph[$vertex];
        foreach($node as $val){
            if(array_search($val,$visited) === false){
                $queue->enqueue($val);
                $visited[] = $val;
            }
        }
        $res[] = $vertex;
    }
    print_r($res);
}

function BFS($graph, $start){
    $queue = new SplQueue();
    $queue->enqueue($start);
    $visited = [$start];
    $result = [];
    while(!$queue->isEmpty()){
        $queueVal = $queue->dequeue();
        $node = $graph[$queueVal];
        for($i = 0; $i < count($node); $i++){
            $vertex = $node[$i];
            if(array_search($vertex,$visited) === false){
                $queue->enqueue($vertex);
                $visited[] = $vertex;
            }
        }
        $result[] = $queueVal;
    }
    print_r($result);
}

BFS($graph, 'A');