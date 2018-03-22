  <?php
  $this->renderPartial('webroot.themes.'.Yii::app()->theme->name.'.views.layouts.mail.header');
  $url = Yii::app()->getRequest()->getBaseUrl(true)."/#page.type.".$parentType.".id.".(string)$parent["_id"];
  $verbAction=$verb;
  if($verb=="contribute")
    $verbAction="contribute to";
  else if ($verb=="participate")
    $verbAction="participate to";
  ?>
    <table class="row" style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 100%;position: relative;display: table;"><tbody><tr style="padding: 0;vertical-align: top;text-align: left;"> <!-- Horizontal Digest Content -->
      <th class="small-12 large-12 columns first" style="color: #3c5665;font-family: Helvetica, Arial, sans-serif;font-weight: normal;padding: 0;margin: 0 auto;text-align: left;line-height: 19px;font-size: 15px;padding-left: 16px;padding-bottom: 16px;width: 564px;padding-right: 8px;">

              <h1 class="text-center" style="color: inherit;font-family: Helvetica, Arial, sans-serif;font-weight: normal;padding: 35px 0px 15px 0px;margin: 0;text-align: center;line-height: 1.3;word-wrap: normal;margin-bottom: 10px;font-size: 34px;"><?php echo Yii::t("mail","Invitation to {what} {where}", array("{what}"=>Yii::t("mail", $verbAction), "{where}"=>$parent["name"])); ?></h1>
            <table style="border-spacing: 0;border-collapse: collapse;padding: 0;vertical-align: top;text-align: left;width: 100%;">
            <tr style="padding: 0;vertical-align: top;text-align: left;">
              <th style="color: #3c5665;font-family: Helvetica, Arial, sans-serif;font-weight: normal;padding: 0;margin: 0;text-align: left;line-height: 19px;font-size: 15px;">
                <!--http://localhost:8888/ph/images/betatest.png-->
              <a href="<?php echo Yii::app()->getRequest()->getBaseUrl(true) ?>" style="color: #e33551;font-family: Helvetica, Arial, sans-serif;font-weight: normal;padding: 0;margin: 0;text-align: left;line-height: 1.3;text-decoration: none;"><img align="right" width="200" src="<?php echo Yii::app()->getRequest()->getBaseUrl(true)."/images/bdb.png"?>" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;width: auto;max-width: 100%;clear: both;display: block;border: none;" alt="Intelligence collective"></a>
              <b>
              <h5 style="color: inherit;font-family: Helvetica, Arial, sans-serif;font-weight: normal;padding: 0;margin: 0;text-align: left;line-height: 1.3;word-wrap: normal;margin-bottom: 10px;font-size: 20px;"></h5></b><br>
              <?php echo Yii::t("mail","You have been invited on {what} by {who}",array("{what}"=>Yii::t("common", "the ".Element::getControlerByCollection($parentType)), "{who}"=>"<b><a href='".Yii::app()->getRequest()->getBaseUrl(true)."/#page.type.".Person::COLLECTION.".id.".$invitorId."' target='_blank'>".$invitorName."</a>.</b>")) ?><br>
              <br><br>
              <?php echo Yii::t("mail","Please connect you and go to the detail of {what} following link under to answer to the invitation",array("{what}"=>Yii::t("common","this ".Element::getControlerByCollection($parentType))))." ".Yii::t("common","this ".Element::getControlerByCollection($parentType)).". ".Yii::t("mail","If you validate, you will be added as {what} else the link between you and {where} will be destroyed",array("{what}"=>Yii::t("common", $typeOfDemand), "{where}"=>Yii::t("common","the ".Element::getControlerByCollection($parentType))))."." ?>
              <br>
              <br>
              <a href="<?php echo $url?>" style="color: #e33551;font-family: Helvetica, Arial, sans-serif;font-weight: normal;padding: 0;margin: 0;text-align: left;line-height: 1.3;text-decoration: none;"><?php echo Yii::t("mail","Answer to the invitation") ?></a>
              <br>
              <br>
              <?php echo Yii::t("mail","If the link doesn&apos;t work, you can copy it in your browser&apos;s address"); ?> :
              <br><div style="word-break: break-all;"><?php echo $url?></div>
              
  <?php $this->renderPartial('webroot.themes.'.Yii::app()->theme->name.'.views.layouts.mail.footer'); ?>
