<?php

class Circle extends Shape {
  const SHAPE_TYPE = 3;

  protected $radius;

  function __construct($radius) {
    parent::__construct();
    $this->radius = $radius;
  }

  function area() {
    return pi(pow($this->radius, 2));
  }

  function getFullDescription() {
    return "Circle<#" . $this->id . ">: " . $this->name . " - " . $this->radius;
  }
}