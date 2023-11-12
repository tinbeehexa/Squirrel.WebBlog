<?php
    class Ctrl_Page_Post {
        private $root_URL;
        public function __construct($_root_URL) {
            $this->root_URL = $_root_URL;
        }
        public function invoke () {
            include_once $this->root_URL.'\logic\bo\bo_Post.php';

            $bo_Post = new bo_Post($this->root_URL);

            $pra = explode("/", $_SERVER['REQUEST_URI']);
            $pra = array_filter($pra);
            $pageNum = explode("?", $pra[count($pra)])[0];

            $_SESSION["Posts"] = $bo_Post->Pagination($pageNum);
            
            include_once $this->root_URL.'\views\contents\posts.php';
        }
        public function getPage () {
            include_once $this->root_URL.'\logic\bo\bo_Post.php';

            $bo_Post = new bo_Post($this->root_URL);

            $len = count($bo_Post->getPosts());

            $Page = array(); 
        
            for ($i = 1; $i <= ceil($len / 2); $i++) {
                array_push($Page, $i);
            }

            return $Page;
        }
    }
?>
