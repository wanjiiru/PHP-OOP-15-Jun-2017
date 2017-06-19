<?php namespace Acme;


trait CommentTrait
{
    /**
     * @param $commentData
     */
    public function saveComment() {
            if (is_array($commentData))
                foreach ($commentData as $comment)
                        $comment->getBlogTitle();
                        $commentData->saveComment;
    }
}