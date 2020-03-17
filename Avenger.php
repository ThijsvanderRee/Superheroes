<?php

  class Avenger extends Superhero
  {

    function __construct($name, $gender, $oneliner)
    {
      parent::__construct($name, $gender, $this->$team, $oneliner);
    }
  }


?>
