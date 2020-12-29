<?php

namespace App\Models;

class User {
  public $name;
  public $plan;
  public $subscriptionBasic;
  public $subscriptionPro;
  public $serverList;

  public function __construct() {
    $this->name = "";
    $this->plan = "";
    $this->subscriptionBasic = false;
    $this->subscriptionPro = false;
    $this->serverList = array();
  }

  public function subscribe($plan) {
    if ($plan == new BasicPlan()) {
      $this->plan = "Basic Plan";
      $this->subscriptionBasic = true;
    } else {
      $this->plan = "Pro Plan";
      $this->subscriptionPro = true;
    }

    print "Action: Subscribing to Plan " . $this->plan . " ";
    sleep(1);
    print ".";
    sleep(1);
    print ".";
    sleep(1);
    print ".\n";
    sleep(1);

    print $plan->subscribePlan();
  }

  public function connectServer($server) {
    sleep(1);
    print 'Action: Connecting Server ' . $server->name . " ";
    sleep(1);
    print ".";
    sleep(1);
    print ".";
    sleep(1);
    print ".\n";
    sleep(1);

    if ($this->subscriptionBasic === true && $server->name == "Server 1") {
      print "Action => Server " . $server->name . " is connected !";
      sleep(1);

      array_push($this->serverList, $server);

      print $server->displayServerInfo($this->name, $this->plan, $this->serverList);

    } else if ($this->subscriptionPro === true && $server->name == "Server 2") {
      print "Action => Server " . $server->name . " is connected !";
      sleep(1);

      array_push($this->serverList, $server);

      print $server->displayServerInfo($this->name, $this->plan, $this->serverList);

    } else if ($this->subscriptionPro === false && $this->subscriptionBasic === false) {
      print "Error => User is not Subscribe to Any Plan !\n";
      sleep(1);
    } else {
      print "Error => User Exceeded Server Limit allowed for Plan Basic Plan !\n\n";
      sleep(1);
    }
  }

  public function unsubscribe() {
    $this->serverList = [];
    $this->subscriptionPro = false;
    $this->subscriptionBasic = false;

    sleep(1);
    print "Action: Canceling Subscription to Plan Pro Plan ";
    sleep(1);
    print ".";
    sleep(1);
    print ".";
    sleep(1);
    print ".\n\n";
    sleep(1);

    print "You have successfully unsubscribed from plan Pro Plan.\n";
    print "Thank you for using RunCloud.\n\n";
  }
}

?>
