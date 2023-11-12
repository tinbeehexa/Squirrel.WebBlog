<?php
    class Ctrl_Posts {
        private $root_URL;
        public function __construct($_root_URL) {
            $this->root_URL = $_root_URL;
        }
        public function invoke () {
            include_once $this->root_URL.'\logic\bo\bo_Post.php';

            $bo_Post = new bo_Post($this->root_URL);

            session_start();

            if (empty($_GET['q']))
                $_SESSION["Posts"] = $bo_Post->getPosts();
            else
                $_SESSION["Posts"] = $bo_Post->SearchPost($_GET['q']);
            
            include_once $this->root_URL.'\views\contents\posts.php';
        }
    }
?>


