<?php

namespace App\Models;

class Server {
  public $name;
  public $ipAddress;

  public function __construct() {
    $this->name = "";
    $this->ipAddress = "";
  }

  public function displayServerInfo($name, $plan, $server) {

    $length = count($server);

    if ($length < 2) {
      print "\n\n";
      print "+----------------------+--------------------\n";
      print "|  User's Name         | " . $name . "\n";
      print "+----------------------+--------------------\n";
      print "|  Current Plane       | " . $plan . "\n";
      print "+---------------- -----+--------------------\n";
      print "|  Connected Servers   | " . $server[0]->name . " [" . $server[0]->ipAddress . "]" . "\n";
      print "+----------------------+--------------------\n";
      print "\n\n";
    } else {
      print "\n\n";
      print "+----------------------+--------------------\n";
      print "|  User's Name         | " . $name . "\n";
      print "+----------------------+--------------------\n";
      print "|  Current Plane       | " . $plan . "\n";
      print "+----------------------+--------------------\n";
      print "|  Connected Servers   | " . $server[0]->name . " [" . $server[0]->ipAddress . "]" . ", " . $server[1]->name . " [" . $server[1]->ipAddress . "]" . "\n";
      print "+----------------------+--------------------\n";
      print "\n\n";
    }
  }
}

?>