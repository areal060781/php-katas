<?php


namespace App;


class Graph
{
    private int $numberOfNodes = 0;
    private array $adjacentList = [];

    public function __construct()
    {
        $this->numberOfNodes = 0;
        $this->adjacentList = [];
    }

    public function addVertex($nodeNum)
    {
        $this->adjacentList[$nodeNum] = [];
        $this->numberOfNodes++;
    }

    public function addEdge($nodeNum1, $nodeNum2)
    {
        $this->adjacentList[$nodeNum1][] = $nodeNum2;
        $this->adjacentList[$nodeNum2][] = $nodeNum1;
//        array_push($this->adjacentList[$nodeNum1], $nodeNum2);
//        array_push($this->adjacentList[$nodeNum2], $nodeNum1);
    }

    public function showConnections()
    {
        //print_r($this->adjacentList);
        foreach ($this->adjacentList as $node => $nodeConnections) {
            $connections = '';
            foreach ($nodeConnections as $vertex){
                $connections .= $vertex . ' ';
            }

            print($node . '-->' . $connections."\n");
        }
    }

    public function getGraph(){
        return $this->adjacentList;
    }

}

