<?php
    class E_Post {
        private $post_id;
        private $title;
        private $content;
        private $datepost;
        private $thumnail;
        private $status;
        private $shortDescription;
        private $tagName;
        private $user_id;

        public function __construct ($_post_id, $_title, $_content, $_datepost, $_thumnail, $_status, $_shortDescription, $_tagName, $_user_id) {
            $this->post_id = $_post_id;
            $this->title = $_title;
            $this->content = $_content;
            $this->datepost = $_datepost;
            $this->thumnail = $_thumnail;
            $this->status = $_status;
            $this->shortDescription = $_shortDescription;
            $this->tagName = $_tagName;
            $this->user_id = $_user_id;
        }

        public function getPostId () {
            return $this->post_id;
        }

        public function setPostId($_post_id) {
            $this->post_id = $_post_id;
        }

        public function getTitle () {
            return $this->title;
        }

        public function setTitle($_title) {
            $this->title = $_title;
        }

        public function getContent () {
            return $this->content;
        }

        public function setContent($_content) {
            $this->content = $_content;
        }

        public function getDatePost () {
            return $this->datepost;
        }

        public function setDatePost($_datepost) {
            $this->datepost = $_datepost;
        }

        public function getThumnail () {
            return $this->thumnail;
        }

        public function setThumnail($_thumnail) {
            $this->thumnail = $_thumnail;
        }

        public function getStatus () {
            return $this->status;
        }

        public function setStatus($_status) {
            $this->status = $_status;
        }

        public function getShortDescription () {
            return $this->shortDescription;
        }

        public function setShortDescription($_shortDescription) {
            $this->shortDescription = $_shortDescription;
        }

        public function getTagName () {
            return $this->tagName;
        }

        public function setTagName ($_tagName) {
            $this->tagName = $_tagName;
        }

        public function getUserID () {
            return $this->user_id;
        }

        public function setUserID ($_user_id) {
            $this->user_id = $_user_id;
        }
    }
?>