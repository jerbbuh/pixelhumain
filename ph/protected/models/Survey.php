<?php

class Survey
{
	const TYPE_SURVEY = 'survey';
	const TYPE_ENTRY  = 'entry';
	
     public static function moderateEntry($params) {
     	$res = array( "result" => false );
     	//check if user is set as admin
     	if( isset( Yii::app()->session["userId"],$params["app"]))
     	{ 
     		if(self::isModerator(Yii::app()->session["userId"],$params["app"]))
     		{
		     	$survey = Yii::app()->mongodb->surveys->findOne( array("_id"=>new MongoId($params["survey"])) );
		     	if( isset($survey["applications"][$params["app"]]["cleared"] ))
		     	{
		     		if($params["action"]){
		     			Yii::app()->mongodb->surveys->update( array("_id"=>new MongoId($params["survey"])),
		     													array('$unset' => array('applications.survey.cleared' => true))
		     												 );
		     			$res["msg"] = "EntryCleared";
		     			$res["result"] = true;
		     		} else {
		     			Yii::app()->mongodb->surveys->update( array("_id"=>new MongoId($params["survey"])),
		     													array('$set' => array('applications.survey.cleared' => "refused"))
		     												 );
		     			$res["msg"] = "EntryRefused";
		     		}
		     	} else {
		     		$res["msg"] = "Nothing to clear on this entry";
		     	}

		     	$res["survey"] = Yii::app()->mongodb->surveys->findOne( array("_id"=>new MongoId($params["survey"])) );
		     } else 
		     	$res["msg"] = "mustBeModerator";
	     } else 
	     	$res["msg"] = "mustBeLoggued";
	     
     	return $res;
     }
     public static function isModerator($userId,$app) {
     	$app = Yii::app()->mongodb->applications->findOne ( array("key"=> $app ) );
    	return ( isset( $userId ) && in_array(Yii::app()->session["userId"], $app["moderator"]) ) ? true : false;
     }
}
?>