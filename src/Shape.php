<?php

class Shape {
  const SHAPE_TYPE = 1;

  public $name;
  protected $length, $width;
  private $id;

  function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
    $this->id = uniqid();
  }

  function set_name($name) {  
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

  function get_id() {
    return $this->id;
  }

  function area() {
    return $this->length * $this->width;
  }

  static function getTypeDescription() {
    return "Type: " . self::SHAPE_TYPE;
  }

  function getFullDescription() {
    return "Shape<#" . $this->id . ">: " . $this->name . " - " . $this->length . " x " . $this->width;
  }
}