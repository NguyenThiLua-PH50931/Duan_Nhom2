<?php

class CommentController
{
    // Danh sách sản phẩm
    public function listComment()
    {
        $id_sp = $_GET['id_sp'];
        $allComment = (new CommentModels)->getAllComments();
        view("admin/comment/list-comment", ['allComment' => $allComment]);
    }

    // Xóa bình luận:
    public function deleteComment()
    {
        $id_bl = $_GET['id_bl'];
        (new CommentModels)->deleteComment($id_bl);
        header('location: index.php?admin=list-comment');
        exit;
    }
}
