<div class="container">
            <?php
                $Posts = $_SESSION["Posts"];
                if ((!empty($Posts) && empty($_GET['q'])) || (!empty($Posts) && !empty($_GET['q']))) {
                    foreach ($Posts as $post) { 
                        echo ('
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="'.$post->getThumnail().'" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">'.$post->getTitle().'</h5>
                                    <p class="card-text">'.$post->getContent().'</p>
                                    <p class="card-text"><small class="text-muted">Updated '.$post->getDatePost().'</small></p>
                                </div>
                                </div>
                            </div>
                        ');
                    }
                } else if (empty($Posts) && !empty($_GET['q'])) {
                    echo ('
                        <div>
                            <p>Không tìm thấy kết quả: '.$_GET['q'].'</p><br>
                            <p>Vui lòng kiểm tra lại chính tả hoặc thử từ khóa khác.</p>
                        </div>
                    ');
                } else {
                    echo ('
                        <div>
                            <p>Không có bài đăng nào</p><br>
                            <p>Các bài đăng bạn tạo sẽ xuất hiện ở đây</p>
                        </div>
                    ');
                }
            ?>
    <?php
        include_once __DIR__.'\components\paginations.php';
    ?>
</div>