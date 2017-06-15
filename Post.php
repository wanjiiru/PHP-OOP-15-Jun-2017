<?php
class BlogPost {
    private $title;
    private $category;
    function __construct($title, $category){
        $this->title = $title;
        $this->category = $category;
    }
    function getTitle(){
        return $this->title;
    }
    function setTitle($title){
        $this->title = $title;
    }
    function getCategory(){
        return $this->category;
    }
    function setCategory($price){
        $this->category = $category;
    }
    function __toString(){
        return 'Title: '.$this->getTitle().'<br/> Category: '.$this->getCategory();
    }
}