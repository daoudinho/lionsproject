<?php
include_once ("DbConnect.php");

class ArticleManager extends DbConnect
{
   public function getArticles()
    {
        $req = $this->getDb()->query('SELECT * FROM articles');
        $articles = $req->fetchall();
        return $articles;
    }

      public function getActifArticles()
      {
            $req = $this->getDb()->query('SELECT * FROM articles WHERE actif=1');
            $articles = $req->fetchall();
            return $articles;
      }

    function getArticle($id){
        $req = $this->getDb()->prepare('SELECT * FROM articles WHERE id=:id ');
        $req->execute(array(
            'id'=> $id
        ));
        $data=$req->fetch();
        return $data;
    }

    function getOneArticle($title){
        $req = $this->getDb()->prepare('SELECT * FROM articles WHERE title=:title ');
        $req->execute(array(
            'title'=> $title
    ));
        $data=$req->fetch();
        return $data;
    }

    public function createEvent($title, $content, $last, $next, $link, $actif_link)
    {
        $req=$this->getDb()->prepare('INSERT INTO articles (title, content, last_edition, next_edition, link, actif_link) VALUES (:title, :content, :last_edition, :next_edition, :link, :actif_link)');
        $req->execute(array(
            "title" => $title,
            "content" => $content,
            "last_edition" => $last,
            "next_edition" => $next,
              "link"=>$link,
              "actif_link"=>$actif_link
        ));
    }



    public function editEvent($title, $content, $last, $next, $id, $actifLast, $actifNext, $link, $actif_link)
    {
        $req=$this->getDb()->prepare('UPDATE articles SET title =:title, content=:content, last_edition=:last_edition, next_edition=:next_edition, actif_last=:actif_last, actif_next=:actif_next, link=:link, actif_link=:actif_link WHERE id= :id ');
        $req->execute(array(
            "title" => $title,
            "content" => $content,
            "last_edition" => $last,
            "next_edition" => $next,
            "id"=> $id,
              "actif_last"=>$actifLast,
              "actif_next"=>$actifNext,
              "link"=>$link,
              "actif_link"=>$actif_link
        ));
        return ("L'article à été mise à jour");
    }

      public function toggleEvent($id, $actif)
      {
            $req=$this->getDb()->prepare('UPDATE articles SET actif=:actif WHERE id= :id ');
            $req->execute(array(
                "id"=> $id,
                "actif"=>$actif
            ));
            return ("L'article à été mise à jour");
      }

    public function uploadImageDb($file,$id_article){
          $req=$this->getDb()->prepare('UPDATE articles SET file =:file WHERE id=:id ');
          $req->execute(array(
              'file' => $file,
              'id' => $id_article
          ));
    }

      function deleteArticle($id){
            $req = $this->getDb()->prepare('DELETE FROM articles WHERE id=:id');
            $req->execute(array(
                'id'=> $id
            ));
            return "l'article a été correctement supprimé";
      }
};