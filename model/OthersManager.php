<?php
include_once ("DbConnect.php");

class OthersManager extends DbConnect
{

      function getServices(){
            $req = $this->getDb()->query('SELECT * FROM services WHERE id=1 ');
            $data=$req->fetch();
            return $data;
      }

      public function editServices($content)
      {
            $req=$this->getDb()->prepare('UPDATE services SET content=:content WHERE id= 1 ');
            $req->execute(array(
                "content" => $content,
            ));
            return ("Les services ont été mise à jour");
      }

      function getStory(){
            $req = $this->getDb()->query('SELECT * FROM services WHERE id=2 ');
            $data=$req->fetch();
            return $data;
      }

      public function editStory($content)
      {
            $req=$this->getDb()->prepare('UPDATE services SET content=:content WHERE id= 2 ');
            $req->execute(array(
                "content" => $content,
            ));
            return ("Les services ont été mise à jour");
      }
   /*public function getArticles()
    {
        $req = $this->getDb()->query('SELECT * FROM homepage');
        $articles = $req->fetchall();
        return $articles;
    }
      public function getActifArticles()
      {
            $req = $this->getDb()->query('SELECT * FROM homepage WHERE actif=1');
            $articles = $req->fetchall();
            return $articles;
      }

    function getArticle($id){
        $req = $this->getDb()->prepare('SELECT * FROM homepage WHERE id=:id ');
        $req->execute(array(
            'id'=> $id
        ));
        $data=$req->fetch();
        return $data;
    }

    function deleteArticle($id){
          $req = $this->getDb()->prepare('DELETE FROM homepage WHERE id=:id');
          $req->execute(array(
              'id'=> $id
          ));
          return "l'article a été correctement supprimé";
    }

   public function createEvent()
    {
        $req=$this->getDb()->query('INSERT INTO homepage(actif) VALUES (false)');
    }



    public function editEvent($title,$content, $id_article, $id, $actif)
    {
        $req=$this->getDb()->prepare('UPDATE homepage SET article_id=:article_id, title=:title, content=:content, actif=:actif WHERE id= :id ');
        $req->execute(array(
            "article_id"=> $id_article,
            "id"=> $id,
            "title" => $title,
            "content" => $content,
              "actif"=>$actif
        ));
        return ("L'article à été mise à jour");
    }

      public function editDiapo($diapoNum)
      {
            $req=$this->getDb()->prepare('UPDATE homepage SET article_id=:article_id WHERE id=6 ');
            $req->execute(array(
                "article_id"=> $diapoNum,
            ));
            return ("Nombre de diapo mise à jour");
      }

    public function uploadImageDb($file,$id_article){
          $req=$this->getDb()->prepare('UPDATE homepage SET file =:file WHERE id=:id ');
          $req->execute(array(
              'file' => $file,
              'id' => $id_article
          ));
    }*/
};