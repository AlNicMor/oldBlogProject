<?php

class PostsModel extends Model
{

    public function getPosts()
    {

        $sql = "SELECT
                     posts.post_id,
                     users.username,
                     posts.text,
                     posts.title,
                     posts.timestamp,
                     categories.description
               FROM
                     posts
               INNER JOIN
                     categories ON posts.category_id = categories.category_id
               INNER JOIN
                     users ON posts.user_id = users.user_id
               ORDER BY posts.timestamp DESC";

        $this->_setSql($sql);
        $posts = $this->getAll();

        if (empty($posts)) {

            return false;
        }

        return $posts;

    }


    public function getPostById($id)
    {

        $sql = "SELECT
                     users.username,
                     posts.text,
                     posts.title,
                     posts.timestamp,
                     categories.description
               FROM
                     posts
               INNER JOIN
                     categories ON posts.category_id = categories.category_id
               INNER JOIN
                     users ON posts.user_id = users.user_id
               WHERE
                     posts.post_id = ?";

        $this->_setSql($sql);
        $post = $this->getRow(array($id));

        if (empty($post)) {
            return false;
        }

        return $post;

    }

    public function getPostComments($id)
    {

        $sql = "SELECT
                     users.username,
                     comments.timestamp,
                     comments.text
               FROM
                     comments
               INNER JOIN
                     users ON users.user_id = comments.user_id
               INNER JOIN
                     posts ON posts.post_id = comments.post_id
               WHERE
                     posts.post_id = ?
               ORDER BY comments.timestamp DESC";

        $this->_setSql($sql);
        $comments = $this->getAll(array($id));

        if (empty($comments)) {
            return false;
        }

        return $comments;
    }

    public function saveComment($user_id, $comtext, $id)
    {

        $sql = "INSERT INTO comments
                    (user_id, text, post_id)
                VALUES
                    (?, ?, ?)";
        $data = array(
            $user_id,
            $comtext,
            $id
        );
        $sth = $this->_db->prepare($sql);
        return $sth->execute($data);
    }

    public function newComment($user_id, $cat, $ptext, $title)
    {

        $sql = "INSERT INTO posts
                    (user_id, category_id, text, title)
                VALUES
                    (?, ?, ?, ?)";

        $data = array(
            $user_id,
            $cat,
            $ptext,
            $title
        );

        $sth = $this->_db->prepare($sql);
        return $sth->execute($data);
    }

    public function getCategories()
    {

        $sql = "SELECT
                    *
                FROM
                    categories";
        $this->_setSql($sql);
        $cats = $this->getAll();

        return $cats;
    }

}