<?php

class Book{
    private $id;
    private $name;
    private $prix;
    private $author;
    private $stateBook;
    private $photo;
    private $tags = [];


    public function __construct($id, $tags, $photo, $author, $prix, $name)
    {
        $this->id = $id;

        foreach ($tags as $tag)
        {
            $this->tags [] = $tag;
        }

        $this->photo = $photo;
        $this->author = $author;
        $this->prix = $prix;
        $this->name = $name;
    }

    //                                      get
    public function getId()
    {
        return $this->id;
    }

    public function getphoto()
    {
        return $this->photo;
    }
    
    public function getauthor()
    {
        return $this->author;
    }

    public function getprix()
    {
        return $this->prix;
    }

    public function getname()
    {
        return $this->name;
    }

    public function gettags()
    {
        return $this->tags;
    }

    public function getStateBook()
    {
        return $this->stateBook;
    }

    //                                     set
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setphoto($photo)
    {
        $this->photo = $photo;
    }
    
    public function setauthor($author)
    {
        $this->author = $author;
    }

    public function setprix($prix)
    {
        $this->prix = $prix;
    }

    public function setname($name)
    {
        $this->name = $name;
    }

    public function setStateBook($stateBook)
    {
        $this->stateBook = $stateBook;
    }

    public function setTags($tags)
    {
        foreach ($tags as $t)
        {
            $this->tags [] = $t;
        }
        
    }

}