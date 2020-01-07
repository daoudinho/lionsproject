<?php
include_once ("DbConnect.php");

class ArticleManager extends DbConnect
{
   public function get_articles()
    {
        $req = $this->getDb()->query('SELECT * FROM articles');
        $articles = $req->fetchall();
        return $articles;
    }

    function get_article($id){
        $req = $this->getDb()->prepare('SELECT * FROM articles WHERE id=:id ');
        $req->execute(array(
            'id'=> $id
        ));
        $data=$req->fetch();
        return $data;
    }

    function get_one_article($title){
        $req = $this->getDb()->prepare('SELECT * FROM articles WHERE title=:title ');
        $req->execute(array(
            'title'=> $title
    ));
        $data=$req->fetch();
        return $data;
    }

    public function create_event($title, $content, $last, $next)
    {
        $req=$this->getDb()->prepare('INSERT INTO articles (title, content, last_edition, next_edition) VALUES (:title, :content, :last_edition, :next_edition)');
        $req->execute(array(
            "title" => $title,
            "content" => $content,
            "last_edition" => $last,
            "next_edition" => $next
        ));
        //Todo upload image
    }

    public function edit_event($title, $content, $last, $next, $id)
    {
        $req=$this->getDb()->prepare('UPDATE articles SET title =:title, content=:content, last_edition=:last_edition, next_edition=:next_edition) WHERE id=:id');
        $req->execute(array(
            "title" => $title,
            "content" => $content,
            "last_edition" => $last,
            "next_edition" => $next,
            'id' => $id
        ));
    }
}