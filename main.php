<?php

use App\Models\Server;
use App\Models\User;
use App\Models\BasicPlan;
use App\Models\ProPlan;

require_once realpath("vendor\autoload.php");

print "\n\nRunCloud Assestment !\n\n";

/*
 * Setting Up required details
 */
$user = new User();
$user->name = 'Ashraf Kamarudin';

$server_1 = new Server();
$server_1->name = 'Server 1';
$server_1->ipAddress = '192.168.0.1';

$server_2 = new Server();
$server_2->name = 'Server 2';
$server_2->ipAddress = '192.168.0.2';

/*
 * Flow 1 - Basic Plan
 */

print "Flow #1 Basic Plan Subscription !\n\n";

$user->subscribe(new BasicPlan());

$user->connectServer($server_1);
$user->connectServer($server_2); // fail

/*
 * Flow 2 - Pro/Business Plan
 */

print "Flow #2 Upgrade Plan Subscription !\n\n";

// upgrade to pro/business plan to have acccess
// of connecting more than 1 server.
$user->subscribe(new ProPlan());
$user->connectServer($server_2); // success

/*
 * Flow 3 - Unsubscribe
 */

print "Flow #3 Unsubscribe Plan Subscription !\n\n";

// upgrade to pro/business plan to have acccess
// of connecting more than 1 server.
$user->unsubscribe();
$user->connectServer($server_2); // fail

?>