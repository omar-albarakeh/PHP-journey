<?php
function createNode($data){
    $node = array(
        'data'=> $data,
        'next'=>null
    );
    return $node;
}
function insert(&$head,$data){
     $newNode = createNode($data);
    $newNode['next'] = $head;
    $head = $newNode;
}

function insertAtEnd(&$head, $data) {
    $newNode = createNode($data);
    if ($head == null) {
        $head = $newNode;
    } else {
        $current = $head;
        while ($current['next'] != null) {
            $current = $current['next'];
        }
        $current['next'] = $newNode;
     }
}
function printList($head) {
    $current = $head;
    while ($current != null) {
        echo $current['data'] . " ";
        $current = $current['next'];
    }
    echo "\n";
}
?>