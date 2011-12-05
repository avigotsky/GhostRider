<?php
class GhostRider {
  private $location = false;
  private $options  = array();
  private $input    = false;
  
  function __construct($location = false) {
    $this->location = $location;
  }
  
  function add_option($value) {
    array_push($this->options, $value);
  }
  
  function set_input($input) {
    $this->input = $input;
  }
  
  function ride() {
    $cmd = ($this->location ? $this->location : '') . "gs ";
    foreach($this->options as $option)
      $cmd .= $option . " ";
    $cmd .= $this->input;
    
    system($cmd, $output);
    
    return $output;
  }
}

?>