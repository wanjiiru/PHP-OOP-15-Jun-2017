<?php
use Acme\Blog;
use Acme\BlogPost;
function __autoload($class_name) {
    $filename = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
    if(file_exists($filename)) {
        require_once($filename);
    } else {
        throw new Exception("Unable to load $filename.");
    }
}

try {
    $blog = new Blog();
    $blog->saveComment('Add comment data here');
    $blog->saveBlog();
    $post = new BlogPost('Add title here', 'Add category here');
    $post->saveComment('Comment Data');

} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}


class MyPage{
    public $title;
    public $data;
    public $blog;
    function __construct(){
        $article = new Blogpost('Music is overrated', 'Entertainment');
        $learn = new Blogpost('Make Be  tter Software better', 'Technology');
        $news = new Blogpost('Is your company facing an innovation gap?', 'Innovation');
        $updates = new Blogpost('​How to use Linux built-in USB attack protection', 'Security');
        $this->blog = new blog('');
        $this->blog->addBlogPost($article);
        $this->blog->addBlogPost($news);
        $this->blog->addBlogPost($learn);
        $this->blog->addBlogPost($updates);
        $dispBlogposts = '';
        $dispBlogposts .='<div class="col-md-6">Name: '.$article.'</div>';
        $dispBlogposts .='<div class="col-md-6">'.$learn.'</div>';
        $dispBlogposts .='<div class="col-md-6">'.$news.'</div>';
        $dispBlogposts .='<div class="col-md-6">'.$updates.'</div>';
        $this->data['Blogpost'] = $dispBlogposts;
        $blogItems = '';
        foreach($this->blog->getBlogPosts() as $blogPost) {
            $blogItems .= '<div class="col-md-4"> Blog: ' . $blogPost->getTitle() . '<br> Category: ' . $blogPost->getCategory() . '</div>';
        }
        $this->data['blog'] = $blogItems;
    }

    /**
     * @return mixed
     */
    public function getData ()
    {
        return $this->data;
    }
}
$page = new MyPage();
$page->title = "Blog Sample";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $page->title; ?></title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1> Blogs </h1>
    </div>
    <div class="row">
        <h2> Blog Contents</h2>
        <!-- show Blog -->
        <?=$page->data['blog']; ?>

        <hr>
        <h2>Current Postings </h2>
        <!-- show blogposts list -->
        <?=$page->data['blog']; ?>
        <hr>
    </div>
    <div class="row">
        <footer> &copy Wanjiiru</footer>
    </div>
</div>
</body>
</html>
