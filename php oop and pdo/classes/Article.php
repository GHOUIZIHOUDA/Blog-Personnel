<?php
    include_once 'dbh.class.php';

    class Articles extends Dbh 
    {
        public function getArticles() 
        {
            $sql = "SELECT * FROM article";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            while($result = $stmt->fetchAll()) 
            {
                return $result;
            }
        }
        
        public function getArticle() 
        {
            $sql = "SELECT * FROM article ORDER BY id_article DESC";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            while($result = $stmt->fetchAll())
            {
                return $result;
            }
        }

        public function getLastArticles()
        {
            $sql = "SELECT * FROM article order by id_article desc LIMIT 0,6";   
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            while($result = $stmt->fetchAll()) 
            {
                return $result;
            }
        }

        public function addArticle($title, $description, $content, $image, $date_poste, $author) 
        {
            $sql = "INSERT INTO article(title, description, content, img, date_poste, author)VALUES(?,?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $description, $content, $image, $date_poste, $author]);
            
            header("location: {$_SERVER['HTTP_REFERER']}");
        }

        public function editArticle($id) 
        {
            $sql = "SELECT * FROM article WHERE id_article = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch();

            return $result;
        }

        public function updateArticle($title, $description, $content, $image, $date_poste, $author, $id) 
        {
            $sql = "UPDATE article SET title= ?, description=?, content=?, img=?, date_poste=?, author=? WHERE id_article=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title, $description, $content, $image, $date_poste, $author, $id]);
        }

        public function delArticle($id) 
        {
            $sql = "DELETE FROM article WHERE id_article=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }
?>