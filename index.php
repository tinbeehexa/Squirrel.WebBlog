<?php
    class Routes {
        public function initRoutes () {
            include './Router.php';
            include_once './config/Database.php';
            
            $router = new Router();

            $conn = ConnectDB('localhost', 'root', 'Tin18082002', 'db_squirellblog');

            $sql = "SELECT count(*) as Record FROM db_squirellblog.posts";
            $result = $conn->query($sql);
            $row = ($result->fetch())['Record'];

            //pagination posts page
            for ($i = 1; $i <= ceil($row/2); $i++)
                $router->addRoute('/SquirrelBlog/posts/page/'.$i.'/', '/services/index.php');

            $router->addRoute('/SquirrelBlog/', '/services/index.php');
            $router->addRoute('/SquirrelBlog/posts', '/services/index.php');
            $router->addRoute('/SquirrelBlog/posts/', '/services/index.php');
            $router->addRoute('/SquirrelBlog/posts/search', '/services/index.php');
        }
    }
    
    $routes = new Routes();
    $routes->initRoutes();