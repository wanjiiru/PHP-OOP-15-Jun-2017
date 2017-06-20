<?php namespace Acme;
use Acme\Repository;

class Blog implements Repository {
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

    public function saveBlog ()
    {
        // TODO: Implement saveBlog() method.
    }

    public function saveBlogPost ()
    {
        // TODO: Implement saveBlogPost() method.
    }
}
?>