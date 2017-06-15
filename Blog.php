<?php
interface Website{
}
class Blog implements Website {
    public $Blogposts;
    public function __construct(){
        $this->Blogposts = array();
    }
    function getBlogPosts(){
        return $this->Blogposts;
    }
    function addBlogPost($Blogpost){
        array_push($this->Blogposts, $Blogpost);
    }
}