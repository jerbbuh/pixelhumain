  <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
  <head>
    <title>PixelHumain</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
    <span style="text-align: left;"><?php echo Utils::getServerName()?></span>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
      <tr>
        <td align="left" valign="top">
          <img src='<?php echo Yii::app()->getRequest()->getBaseUrl(true); ?>/images/logo/logo144.png' alt="PixelHumain" title="PixelHumain"/>
        </td>
        <?php 
          $validationKey =Person::getValidationKeyCheck($invitedUserId);
          $url = Yii::app()->getRequest()->getBaseUrl(true)."/".$this->module->id."/person/activate/user/".$invitedUserId.'/validationKey/'.$validationKey;
        ?>
        <td align="left">
           <h3>Bienvenue sur Communecter !! </h3>
           Vous avez été invité au projet Communecter par <?php echo $sponsorName?><br/>
           Veuillez clicker sur ce lien pour participer a cette initiative locale pour améliorer votre commune.<br/>
           ou copier le directement dans votre navigateur.
           <br/>
           <a href="<?php echo $url?>">Confirmer L'invitation</a>
           <br/>
           <?php echo $url?>
        </td>
      </tr>
      </table>
  </body>
</html>