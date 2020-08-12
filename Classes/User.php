<?php
/**
 * 
 */
class User implements Hello
{

	public $name;
    public $UserPlan;

    public function subscribe($UserPlan){
        $this->UserPlan = get_class($UserPlan);
    }

    public function connectServer($Server){
        $ServerList = json_decode(json_encode($Server), true);
        print"<br/>";
        print "Action: Connecting Server ".$ServerList["name"]." ...<br/>";
        if (!$this->UserPlan == NULL) {
            if ($this->UserPlan == "BasicPlan" && $ServerList["name"] == "Server 1") {
                print "Action => Server ".$ServerList["name"]." is Connected !"."<br/><br/>";
                print
                    "+--------------------+--------<br/>".
                    "| User's Name        | ".$this->name."<br/>".
                    "+--------------------+--------<br/>".
                    "| Current Plan       | ".$this->UserPlan."<br/>".
                    "+--------------------+--------<br/>".
                    "| Connected Servers      | ".$ServerList["name"]." [".$ServerList["ipAddress"]."]"."<br/>".
                    "+--------------------+--------<br/>";
            }else if ($this->UserPlan == "ProPlan" && $ServerList["name"] == "Server 2") {
                print "Action => Server ".$ServerList["name"]." is Connected !"."<br/><br/>";
                print
                    "+--------------------+--------<br/>".
                    "| User's Name        | ".$this->name."<br/>".
                    "+--------------------+--------<br/>".
                    "| Current Plan       | ".$this->UserPlan."<br/>".
                    "+--------------------+--------<br/>".
                    "| Connected Servers      | "."Server 1"." ["."192.168.0.1"."] , ".$ServerList["name"]." [".$ServerList["ipAddress"]."]"."<br/>".
                    "+--------------------+--------<br/>";
            }else{
                print"Error => User Exceeded Server Limit allowed for Plan Basic Plan !"."<br/>"; 
            }
            print"<br/>";
        }else{
            print"Error => User is not Subcribe to any Plan <br/>";
        }
    }

    public function unsubscribe(){
        $this->UserPlan = Null;
        print"<br/><br/>".
             "Action: Cancelling Subcription to plan to pro plan ...<br/><br/>".
             "You have succefully unsubscribed from plan pro plan. <br/>".
             "Thank you for using RunCloud.".
             "<br/><br/>";
    } 
}

?>