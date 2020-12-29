<?php 

namespace App\Models;

class ProPlan extends Plan {
  public function subscribePlan() {
    print "Subscribed to plan Pro Plan\n\n";
    sleep(1);
  }
}

?>