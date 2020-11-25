<?php


use App\Graph;
use PHPUnit\Framework\TestCase;

class GraphTest extends TestCase
{
    /** @test */
    public function it_show_connections()
    {
        $g = new Graph();
        $g->addVertex(0);
        $g->addVertex(1);
        $g->addVertex(2);
        $g->addVertex(3);
        $g->addVertex(4);
        $g->addEdge(3, 1);
        $g->addEdge(3, 4);
        $g->addEdge(4, 2);
        $g->addEdge(4, 5);
        $g->addEdge(1, 2);
        $g->addEdge(1, 0);
        $g->addEdge(0, 2);
        $g->addEdge(6, 5);
        $g->showConnections();
        $this->assertEquals([[1, 2], [3, 2, 0], [4, 1, 0], [1, 4], [3, 2, 5], [4, 6], [5]], $g->getGraph());
    }
}
