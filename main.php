<?php

/*
|--------------------------------------------------------------------------
| RunCloud Assesment
|--------------------------------------------------------------------------
|
| RunCloud goal is to simplify server management for developers and businesses by providing 
| a solution in the form of software-as-a-service (SaaS). RunCloud aims to be able to enhance 
| server performance, security, and enable automated cloud server monitoring without human 
| intervention
|
| If you look at https://runcloud.io/pricing, You can see RunCloud have 3 Subscription plan.
| They are Basic, Pro and Bussiness.
| 
| Below are simplified version of what user can do in RunCloud Server Management Panel.
| Please write underlying Class and Functions necessary to make the Code Snippet below works.
|
| * Bonus Point for Proper File/Folder Architecture
| |- * Bonus Point if you use Composer to autoload file with proper Namespace.
| * Bonus Point for using abstract/interface for Plan's Class
|
 */

/**
 * RunCloud Server Management Panel Simplified Version.
 *
 * Please Execute PHP Statement's Below using your own Implementation.
 * You may do anything to let the code below work without changing anything.
 */

print "\n\nRunCloud Assestment !\n\n";

include("init.php");

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

/*
|
| Please submit the answer along with your Internship Application to career@runcloud.io
|
| You may upload it in your github or anywhere then include the link in the mail or you can also 
| attach the file in the mail.
|
 */

?>