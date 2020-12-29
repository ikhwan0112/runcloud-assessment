<?php 

namespace App\Models;

class BasicPlan extends Plan {
  public function subscribePlan() {

    print "Subscribed to plan Basic Plan\n\n";
    sleep(1);
  }
}

?>