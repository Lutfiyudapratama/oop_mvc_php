<?php

require_once 'Config/database.php';

class book 
{
    private $id, $title, $author, $year;

    public function  getTitle()
    {
        return $this->title;
    }
    public function  getAuthor()
    {
        return $this->author;
    } 
    public function  getYear()
    {
        return $this->year;
    }
        static function filter ($search)
        {
            global $pdo;
            $query =  $pdo->query("SELECT * from books WHERE title LIKE'%$search%'");
            return $query->fetchall(PDO::FETCH_CLASS, 'Book');
        }

    static function get()
    {
        global $pdo;
        $query =  $pdo->query("SELECT * from books");
        return $query->fetchall(PDO::FETCH_CLASS, 'Book');
    }
}
