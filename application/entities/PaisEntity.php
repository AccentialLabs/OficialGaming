<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaisEntity
 *
 * @author Raphael Pizzo
 */
class PaisEntity {
  private $id;
  private $descricao;
  
  function getId() {
      return $this->id;
  }

  function getDescricao() {
      return $this->descricao;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setDescricao($descricao) {
      $this->descricao = $descricao;
  }
}
