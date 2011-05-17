<?php

namespace Thekwasti\WikiBundle\Tree;

class Bold implements NodeInterface
{
    private $content;
    
    public function __construct(NodeInterface $content)
    {
        $this->content = $content;
    }
    
    public function getContent()
    {
        return $this->content;
    }
}