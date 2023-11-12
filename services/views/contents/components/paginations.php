<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php 
    $lastPart = basename($url);
    $urlParts = explode('/', $url);
    $lastPart = end($urlParts);
    echo $lastPart
  ?>
    <li class="page-item"><a class="page-link" href="/SquirrelBlog/posts/page/<?php $_SERVER['REQUEST_URI']?>/">Previous</a></li>
    <li class="page-item"><a class="page-link" href="/SquirrelBlog/posts/page/1/">1</a></li>
    <li class="page-item"><a class="page-link" href="/SquirrelBlog/posts/page/2/">2</a></li>
    <li class="page-item"><a class="page-link" href="/">Next</a></li>
  </ul>
</nav>