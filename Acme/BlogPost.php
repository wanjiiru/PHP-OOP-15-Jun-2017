<?php namespace Acme;

class BlogPost
{
    use CommentTrait;

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
    function setCategory($category){
        $this->category = $category;
    }
    function __toString(){
    return 'Title: '.$this->getTitle().'<br/> Category: '.$this->getCategory();
}

    /**
     * @return mixed
     */
    public function getBlogposts()
    {
        // TODO: Implement getBlogposts() method.
    }
}