<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryEntity
 *
 * @author andraavram
 */
class CategoryEntity extends Entity {
    //put your code here
    public $categoryId;
    public $name;
      function __construct(){
          parent::__construct();
      }
}
