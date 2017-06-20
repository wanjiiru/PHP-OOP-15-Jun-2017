<?php namespace Acme;


trait CommentTrait
{
    /**
     * @param $commentData
     */
    public function saveComment ($commentData = "Please add comment here...")
    {
        if (is_array($commentData)) foreach ($commentData as $comment) {
            $comment->getBlogTitle();
        }
        return $this;
    }
}