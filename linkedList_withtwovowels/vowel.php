<?php

function createNode($data) {
    return ['data' => $data,
            'next' => null
        ];
}

function appendNode(&$head, $data) {
    $newNode = createNode($data);
    if ($head === null) {
        $head = $newNode;
    } else {
        $current = $head;
        while ($current['next'] !== null) {
            $current = $current['next'];
        }
        $current['next'] = $newNode;
    }
}

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $str = strtolower($str);
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

function printNodesWithTwoVowels($head) {
    $current = $head;
    while ($current !== null) {
        if (countVowels($current['data']) == 2) {
            echo $current['data'] . "<br>";
        }
        $current = $current['next'];
    }
}

?>
