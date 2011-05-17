<?php

namespace Thekwasti\WikiBundle\Tree;

class Text implements NodeInterface
{
    private $text;
    
    public function __construct($text)
    {
        if (!is_string($text)) {
            throw new \InvalidArgumentException('$text must be a string');
        }
        
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}