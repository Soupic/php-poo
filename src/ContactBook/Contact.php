<?php

namespace Dawan\ContactBook;

class Contact
{
    private $name;

    private $slug;

    private $email;

    public function __construct($infos)
    {
        foreach ($infos as $key => $val)
        $this->$key = $val;
    }

    public function __destruct()
    {
        // rarement utilisé
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getSlug()
    {
        return $this->slug;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
}
