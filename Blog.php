<?php
namespace Acme;
class Blog implements\Repository {
    use CommentTrait;
    public $Blogposts;
    public function __construct(){
        $this->Blogposts = array();
    }

    /**
     * @return array
     */
    function getBlogPosts(){
        return $this->Blogposts;
    }
    function addBlogPost($Blogpost){
        array_push($this->Blogposts, $Blogpost);
    }

    public function getTitle()
    {
        // TODO: Implement getTitle() method.
    }
}
?>