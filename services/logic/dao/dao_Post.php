<?php
    class dao_Post {
        private $root_URL;
        public function __construct($_root_URL) {
            $this->root_URL = $_root_URL;
        }
        public function getPosts () {
            include_once $this->root_URL.'\logic\entities\E_Post.php';
            include_once $this->root_URL.'\logic\dao\connectDB.php';
            
            $Posts = array();

            $sql = "SELECT * FROM db_squirellblog.posts";

            $conn = new ConnectDB($this->root_URL);
            $result = $conn->db_squirellblog()->query($sql);

            while ($row = $result->fetch()) {
                array_push($Posts, 
                    new E_Post(
                        $row['post_id'], 
                        $row['title'], 
                        $row['content'], 
                        $row['datepost'], 
                        $row['thumnail'], 
                        $row['status'], 
                        $row['shortDescription'], 
                        $row['tagName'], 
                        $row['user_id']
                    )
                );
            }

            return $Posts;
        }

        public function SearchPost ($content) {
            include_once $this->root_URL.'\logic\entities\E_Post.php';
            include_once $this->root_URL.'\logic\dao\connectDB.php';
            
            $Posts = array();

            $sql = "SELECT * FROM db_squirellblog.posts where title like N'%{$content}%'";

            $conn = new ConnectDB($this->root_URL);
            $result = $conn->db_squirellblog()->query($sql);

            while ($row = $result->fetch()) {
                array_push($Posts, 
                    new E_Post(
                        $row['post_id'], 
                        $row['title'], 
                        $row['content'], 
                        $row['datepost'], 
                        $row['thumnail'], 
                        $row['status'], 
                        $row['shortDescription'], 
                        $row['tagName'], 
                        $row['user_id']
                    )
                );
            }

            return $Posts;
        }

        public function Pagination ($pageNum) {
            include_once $this->root_URL.'\logic\entities\E_Post.php';
            include_once $this->root_URL.'\logic\dao\connectDB.php';
            
            $Posts = array();

            $sql = '
                SELECT * FROM db_squirellblog.posts
                LIMIT 2 OFFSET '.$pageNum.'
            ';

            $conn = new ConnectDB($this->root_URL);
            $result = $conn->db_squirellblog()->query($sql);

            while ($row = $result->fetch()) {
                array_push($Posts, 
                    new E_Post(
                        $row['post_id'], 
                        $row['title'], 
                        $row['content'], 
                        $row['datepost'], 
                        $row['thumnail'], 
                        $row['status'], 
                        $row['shortDescription'], 
                        $row['tagName'], 
                        $row['user_id']
                    )
                );
            }

            return $Posts;
        }
    };
?>

