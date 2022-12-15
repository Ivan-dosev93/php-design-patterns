<?php


namespace Composite;


trait ChildrenTrait
{
    /**
     * @var array
     */
    protected $children;

    public function __construct()
    {
        $this->children = [];
    }

    public function add(Component $component): void
    {
        array_push($this->children, $component);
        $component->setParent($this);
    }

    public function remove(Component $component): void
    {
        foreach ($this->children as $key => $child) {
            if ($child == $component) {
                unset($this->children[$key]);
            }
        }
        //reindex array
        $this->children = array_values($this->children);
    }
}