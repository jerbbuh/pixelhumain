<?php 
//$this->renderPartial("../docs/assets");
$cssAnsScriptFilesTheme = array(
		
	'/plugins/jQCloud/dist/jqcloud.min.js',
	'/plugins/jQCloud/dist/jqcloud.min.css',

);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesTheme,Yii::app()->request->baseUrl);

?>
<style type="text/css">
    .tpl_title{font-size: 38px!important;}
    #notragoraExplains{
		position: relative;
	    top: -10px;
	    right: -15px;
	    -moz-box-shadow: 0px 5px 5px -2px #656565 !important;
	    -webkit-box-shadow: 0px 5px 5px -2px #656565 !important;
	    -o-box-shadow: 0px 5px 5px -2px #656565 !important;
	    box-shadow: 0px -5px 5px -2px #656565 !important;
	    margin-bottom: -100px;
    }
    .pointCircle{
		position: absolute;
	    left: -40px;
	    top: 10px;
	    height: 20px;
	    width: 20px;
	    border-radius: 10px;
	    background-color: grey;
    }
</style>
<div class="col-md-9">
	<div id="canvas" class="col-md-12">
	</div>
</div>
<div class="col-md-3" id="notragoraExplains">
	<div class="panel-white padding-15">
		<div class="col-md-12 no-padding">
			<span class="pointCircle"></span>
			<h4 clss="title-menu-left" style="color:#484848">Bienvenu sur la plateforme Notragora</h4>
			<span>
				NotrAgora est une plateforme internet contributive qui se construit pas à pas, en relation avec ses usagers, ses partenaires et les habitants du Nord-Pas de Calais.<br/>Elle est un espace de production et de diffusion des productions mise en œuvre dans le cadre de projets participatifs menés par l'association Hors Cadre et ses partenaires.<br/>C'est une plateforme Web qui éclaire la production, c'est-à-dire le résultat d'un projet, par des éléments sur la fabrication de cette production, tels que le parcours du projet et de ses acteurs.<br/>NotrAgora offre plusieurs cheminements pour découvrir les contenus et favoriser la convergence ou les confrontations d'expériences.<br/><br/>NotrAgora favorise la médiation par l'internaute et ses amis, le média pouvant être signalé, commenté, partagé et diffusé par le porteur de média qui dispose d'espace permettant d'expliquer sa <br/><br/>
			</span>
		</div>
		<div class="col-md-12 no-padding">
			<span class="pointCircle"></span>
			<h4 clss="title-menu-left" style="color:#484848">La plateforme en chiffres</h4>
			<span>
				<bold>Participations</bold><br/>
				335 comptes Premium (premiers usagers) dont 52 sont des Beta-testeurs (contributeurs actifs)<br/>
				38 groupes de travail (165 participations)<br/>
				<bold>Contributions</bold><br/>
				42 commentaires<br/>
				1 albums publics, 5 photos publiées<br/>
				1 albums privés, 0 photos privées<br/>
				<bold>Productions</bold><br/>
				0 cartes interactives (0 contenus géolocalisés)<br/>
				0 rapports publics, 72 messages publics<br/>
				0 rapports privés, 0 messages privés<br/>
				68 productions publiées<br/>
				12 productions en cours de publication<br/>
			</span>
		</div>
	</div>
</div>
<script type="text/javascript">

jQuery(document).ready( function() { 
	$('#canvas').jQCloud(poiListTags, {
	    height: 500,
	    autoResize: true,
	    shape: 'rectangular',
	    colors: ["#484848", "#6c6969", "#929292"],
	    fontSize: { 
		    from: 0.1,
		    to: 0.02
		},
		//delay:50
	});
  	setTitle("<span class='text-red'>Notragora : Association Hord-Cadre</span>","connectdevelop", "Notragora : Association Hord-Cadre");
});

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor( Math.random() * (max - min) ) + min;
}

</script>

