<?php
//$communexion = CO2::getCommunexionCookies(); 
?>
<style>

	.contact-map {	
		background:url(<?php echo $this->module->assetsUrl; ?>/images/people.jpg) bottom center repeat-x; 
		background-size: 60%;
		background-color:#DFE7E9;  
	}
	.headSection {	
		background:url(<?php echo $this->module->assetsUrl; ?>/images/1+1=3.jpg?c=c) bottom center no-repeat; 
		background-size: 80%;
		background-color:#fff;  
	}
	
</style>

<div class="pageContent">
	<div class="col-md-12 col-lg-12 col-sm-12 imageSection no-padding" 
		 style="margin-top: 80px; position:relative;">

		<div class="col-md-12">
			<div id="videoDocsImg" class="col-xs-12 no-padding">
			    	<a target="_blank" href="https://www.helloasso.com/associations/open-atlas/collectes/communecter/don"><img class="img-responsive" src="<?php echo $this->module->assetsUrl; ?>/images/banniere-Campagne-Acoeur.jpg"/></a>
				</div>
			
		</div>

		<div class="col-md-12">
			<?php if(!isset(Yii::app()->session['userId'])) { ?>
				<div id="videoDocsImg" class="col-md-12 col-sm-12 col-xs-12 text-center">
			    	<img class="img-responsive" style="max-height: 450px;"
			    		 src="<?php echo $this->module->assetsUrl; ?>/images/<?php echo Yii::app()->language ?>/network-for-all.png"/>
		    		 <button class="btn btn-link bg-red margin-left-10" data-toggle="modal" data-target="#modalRegister">
    					<i class="fa fa-plus-circle"></i> <?php echo Yii::t("login","Create my <b>citizen</b> account") ?>
    				 </button>
				</div>
			
			
			<?php } else { ?>
			<div id="videoDocsImg" class="col-xs-12 no-padding">
			    	<img class="img-responsive" src="<?php echo $this->module->assetsUrl; ?>/images/<?php echo Yii::app()->language ?>/network-for-all.png"/>
				</div>
			<?php } ?>
		</div>

		
		<div class="col-sm-12 col-md-12 col-xs-12 no-padding" style="background-color:#fff; max-width:100%; float:left;">
			<div class="col-xs-12 margin-top-50 margin-bottom-25 text-center hidden" >
				<h2 class="text-red text-center"><?php echo Yii::t("home","A connected territorial search engine") ?></h2>
				<h5 class=" col-xs-12 text-center" style="font-style:italic;">
					<?php echo Yii::t("home","Collective intelligence at service for citizens") ?>
				</h5>
				<br/>
				<h2 class="text-red text-center homestead">1 + 1 = 3</h2>
				<h5 class=" col-xs-12 text-center" style="font-style:italic;">
					Wikipedia <i class="fa fa-plus text-red"></i> Open Street Maps 
					<i class="fa fa-plus  text-red"></i> Open source Society
				</h5>
				<br/>
				<div class="center"  >
					<div  style="position:absolute; transform: rotate(60deg);margin:0 47%;" >
						<img class="img-responsive" width=50 src="<?php echo $this->module->assetsUrl; ?>/images/home/triangle.png" />
					</div>
				</div>
			</div>

			<style>
				.btn-main-menu{
					border:2px solid transparent;
					min-height:100px;
				}
				.btn-main-menu:hover{
					border:2px solid #ccc;
				}
				.ourvalues img{
					height:70px;
				}

				.box-register label.letter-black{
					margin-bottom:3px;
					font-size: 13px;
				}
			</style>

			<div class="col-xs-12 no-padding" style="text-align:center;margin-bottom:24px;margin-top:100px;">	
				<div class="col-xs-12 no-padding">
					<div class="col-md-12 col-sm-12 col-xs-12 padding-20" style="padding-left:100px;background-color: #f6f6f6; min-height:400px;">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 pull-left padding-20 shadow2" style="margin-top:-100px;margin-bottom:50px;background-color: #fff;font-size: 14px;">
							<div class="col-xs-12 font-montserrat ourvalues" style="text-align:center;">
				                <!-- <div class="col-md-1 col-sm-1 hidden-xs"></div> -->
				                <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6" style="text-align:center;">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                		 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur01.png"/>
				                		 <?php echo Yii::t("home","Open Source") ?>
				                </div>
				                <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                		 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur02.png"/>
				                		 <?php echo Yii::t("home","No advertisement") ?>
				                </div>
				                <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                		 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur03.png"/>
				                		 <?php echo Yii::t("home","Protected data") ?>
				                </div>
				                <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                	 	 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur08.png"/>
				                	 	 <?php echo Yii::t("home","Free price") ?>
				                	</div>
				            	<div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                	 	 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur06.png"/>
				                	 	 <?php echo Yii::t("home","Connected territory") ?>
				                	</div>
				                <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                	 	 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur07.png"/>
				                	 	 <?php echo Yii::t("home","Collective intelligence") ?>
				                	</div>
				                <!-- <div class="visible-lg col-lg-3">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                		 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur04.png"/>
				                		 <?php echo Yii::t("home","Shared Informations") ?>
				                </div>
				                <div class="visible-lg col-lg-3">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                		 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur05.png"/>
				                		 <?php echo Yii::t("home","Linked Data") ?>
				                </div> -->
				                <div class="visible-lg col-lg-3">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                	 	 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur09.png"/>
				                	 	 <?php echo Yii::t("home","Society 2.2.main") ?>
				                	</div>
				                <div class="visible-lg col-lg-3">
				                	<img class="img-responsive" style="margin:0 auto;" 
				                	 	 src="<?php echo $this->module->assetsUrl; ?>/images/home/valeurs/valeur10.png"/>
				                	 	 <?php echo Yii::t("home","Commons") ?>
				                	</div>
				            </div>
			            </div>
						
						<h3 class="col-xs-12 text-center">
							<i class="fa fa-th"></i> <?php echo Yii::t("home", "5 main applications") ?><br>
							<small>
								<b>Communecter :</b> <?php echo Yii::t("home", "an innovative societal network") ?>,<br>
								<?php echo Yii::t("home", "created for citizens actors of change") ?>
							</small>
							<hr style="width:40%; margin:20px auto; border: 4px solid #cecece;">
						</h3>

						<a href="javascript:;" data-hash="#search" class="btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 padding-10 margin-top-5" data-type="search" >    
		                    <div class="text-center">
		                        <!-- <h4 class="text-red no-margin "><i class="fa fa-search"></i>
		                            <span class="homestead"> <?php //echo Yii::t("home","SEARCH") ?></span>
		                        </h4><br/> -->
		                        <div class="col-md-12 no-padding text-center">
		                            <h4 class="no-margin text-red">
		                            	<i class="fa fa-search"></i>
		                            	<?php echo Yii::t("home","Search engine") ?>
		                                <br>
		                                <small class="text-dark">
		                                    <?php echo Yii::t("home","Find & connect with local actors") ?>
		                                </small>
		                            </h4>
		                        </div>
		                    </div>
		                </a>

		                
		                
		                <a href="javascript:;" data-hash="#live" class="btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 padding-10 margin-top-5" > 
		                    <div class="text-center">
		                        <div class="col-md-12 no-padding text-center">
		                            <h4 class="no-margin text-red">
		                            	<i class="fa fa-newspaper-o"></i>
		                            	<?php echo Yii::t("home","A common news stream") ?>
		                                <br><small class="text-dark">
		                                    <?php echo Yii::t("home","Local Message sharing and group communication")?>
		                                </small>
		                            </h4>
		                        </div>
		                    </div>
		                </a>
		                           
		                <a href="javascript:;" data-hash="#agenda" class="btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 padding-10 margin-top-5" data-type="agenda">
		                    <div class="text-center">
		                        <div class="col-md-12 no-padding text-center">
		                            <h4 class="no-margin text-red">
		                            	<i class="fa fa-calendar"></i>
		                            	<?php echo Yii::t("home","A common agenda") ?>
		                                <br><small class="text-dark">
		                                    <?php echo Yii::t("home","All local events in a click away") ?>
		                                </small>
		                            </h4>
		                        </div>
		                    </div>
		                </a>

		                <a href="javascript:;" data-hash="#annonces" class=" btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 padding-10 margin-top-5" data-type="classified" >
		                    <div class="text-center">
		                        <div class="col-md-12 no-padding text-center">
		                            <h4 class="no-margin text-red">
		                            	<i class="fa fa-bullhorn"></i>
		                            	<?php echo Yii::t("home","A market place") ?>
		                                <br><small class="text-dark">
		                                    <?php echo Yii::t("home","For local and community exchanges")?>
		                                </small>
		                            </h4>
		                        </div>
		                    </div>
		                </a>

		                <div class=" col-xs-12 col-sm-6 col-md-4 padding-20 hidden-xs" style="">
							<img class="img-responsive" style="margin:0 auto;margin-top: 0px;" src="<?php echo $this->module->assetsUrl; ?>/images/home/modules_screen.png"/>
						</div>

		                <a href="javascript:;" data-hash="#ressources" class="btn-main-menu lbh-menu-app col-xs-12 col-sm-6 col-md-4 padding-10 margin-top-5" > 
		                    <div class="text-center">
		                        <div class="col-md-12 no-padding text-center">
		                            <h4 class="no-margin text-red">
		                            	<i class="fa fa-cubes"></i>
		                            	<?php echo Yii::t("home","Exchanges of ressources") ?>
		                                <br><small class="text-dark">
		                                    <?php echo Yii::t("home","To share needs, offers, services, competences for more efficiency")?>
		                                </small>
		                            </h4>
		                        </div>
		                    </div>
		                </a>


		                <div class=" col-xs-12 col-sm-6 col-md-4 padding-20 visible-xs" style="">
							<img class="img-responsive" style="margin:0 auto;margin-top: 0px;" src="<?php echo $this->module->assetsUrl; ?>/images/home/modules_screen.png"/>
						</div>



						<h3 class="text-center col-xs-12">
							<hr style="width:40%; margin:20px auto; border: 4px solid #cecece;">
							<small>
								<?php echo Yii::t("home","Because the need to <b>communicate</b> locally has never been so important"); ?>,<br> 
								<?php echo Yii::t("home","we've made <b>communexion</b> the <b><i>keystone</i></b> of all our applications"); ?>.
								<br><br>
								<a href="#search" target="_blank">
									<img class="img-responsive shadow2" style="margin:0 auto;margin-top: 0px;border-radius: 5px;" 
									src="<?php echo $this->module->assetsUrl; ?>/images/home/<?php echo Yii::app()->language ?>/searchengine.png"/>
								</a>
								<br>
								<?php echo Yii::t("home","The specialty of <b>Communecter</b> is to give you access to the data you are interested in"); ?>,<br>
								<?php echo Yii::t("home","according to the <b>geographical area(s)</b> you selected"); ?>.
								<br>
							</small>

						</h3>




					</div>
					<!-- <div class="col-md-6 col-sm-6 col-xs-12 padding-20" style="background-color: #f6f6f6;text-align:center;min-height:400px;">
						<img class="img-responsive" style="margin:0 auto;margin-top: 50px;" src="<?php echo $this->module->assetsUrl; ?>/images/home/modules_screen.png"/>
					</div> -->
				</div>

				<div class="col-xs-12 no-padding">
		            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: #fff; text-align:center;min-height:400px;">
						<h4 class="margin-top-50"><i class="fa fa-map-marker"></i> <?php echo Yii::t("home","Map") ?></h4>
							<div class="col-md-12 text-center">
		                        <h3 class="no-margin">
		                        	<small>
		                            	<?php echo Yii::t("home","Wherever you are on Communecter<br>you can consult informations on the map") ?>.
										<hr style="width:40%; margin:10px auto; border: 4px solid #cecece;">    
		                                <?php echo Yii::t("home", "Searching results, upcoming events,<br>local initiaves, community members") ?>, etc...
		                            </small>
		                        </h3>
		                    </div>
		                    <button class="btn btn-link letter-blue bold margin-top-25 btn-show-map-home">
		                    	<i class="fa fa-map-marker"></i> <?php echo Yii::t("home","Show map") ?> 
		                	</button>

		                	<img class="img-responsive shadow2" style="margin:auto; margin-top: 10px;" src="<?php echo $this->module->assetsUrl; ?>/images/home/map2.png"/>

		                	<h3>
	                        	<small>
	                        		<?php echo Yii::t("home","Our territories are rich with thousands of citizen initiatives, associations, projects, events! <br>It is by weaving close links between these initiatives that we will transform our society sustainably.") ?>
	                        		<br>
	                            	<hr style="width:40%; margin:10px auto; border: 4px solid #cecece;">  
					                <?php echo Yii::t("home","That's why <b>Communecter</b> invites you to geo-locate your data as much as possible, <br>to give <b>local visibility</b> to your actions") ?>.
	                            	<hr style="width:40%; margin:10px auto;">    
	                            	<?php echo Yii::t("home","This is also <i>geo-communication !</i>") ?><br><br>
	                            </small>
	                        </h3>
		            </div>
		            <div class="col-md-6 col-sm-6 col-xs-12 hidden" style="text-align:center; min-height:400px;">
						<img class="img-responsive" style="margin:auto; margin-top: 10px; max-height:380px;" src="<?php echo $this->module->assetsUrl; ?>/images/home/carto_home.png"/>
					</div>
				</div>


				<div class="col-xs-12 no-padding">
					<div class="col-md-12 col-sm-12 col-xs-12 padding-20" style="background-color: #f6f6f6; text-align:center;min-height:400px;">
						<h4 class="margin-top-50"><i class="fa fa-map-marker"></i> <i class="fa fa-newspaper-o"></i> 
							<?php echo Yii::t("home","Are you ready for geo-communication") ?> ?
							<hr style="width:40%; margin:10px auto; border: 4px solid #cecece;">
						</h4>

						<h3 class="text-center col-xs-12 no-margin">
							<!-- <hr style="width:40%; margin:10px auto; border: 4px solid #cecece;"> -->
							<small>
								<?php echo Yii::t("home","Imagine a world where your messages can be broadcast") ?><br>
								<b><?php echo Yii::t("home","in a public and geographical way") ?></b>
								<br>...
							</small>

						</h3>

						<img class="img-responsive" style="margin:0 auto;margin-top: 20px;" 
							src="<?php echo $this->module->assetsUrl; ?>/images/home/scopingnews_<?php echo Yii::app()->language; ?>.png"/>

						<h3 class="text-center col-xs-12">
							<small> 
								<?php echo Yii::t("home","Create debates, share information, ask for help,<br> share an idea, propose a project, ask a question") ?>
								<hr style="width:40%; margin:10px auto; border: 4px solid #cecece;">
								<?php echo Yii::t("home","You will find a thousand reasons to use") ?>
								 
								<a href="#live" class="letter-red" target="_blank"><?php echo Yii::t("home","IN LIVE") ?> !</a>
							</small>

						</h3>
		             </div>
				</div>



				<div class="col-xs-12 no-padding">
					<div class="col-md-6 col-sm-6 hidden-xs padding-20 hidden" style="text-align:center;min-height:400px;">
						<img class="img-responsive" style="margin:0 auto;margin-top: 20px; max-height:360px;" src="<?php echo $this->module->assetsUrl; ?>/images/home/espaceco-1.png"/>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 padding-20" style="background-color: #fff; text-align:center;min-height:400px;">
						<h4 class="margin-top-50"><i class="fa fa-group"></i> <?php echo Yii::t("home","Cooperative space") ?></h4>
					    <div class="col-md-12 col-xs-12 text-center no-padding">
	                        <h3 class="no-margin">
	                        	<small class="">
	                        	<?php echo Yii::t("home","Because the desire to organize together leads to the need to decide together...<br><b>Communecter</b> offers to all referenced groups") ?>, 
	                        	<span class="text-green"><i class="fa fa-group"></i> <?php echo Yii::t("common","organisations") ?></span> 
	                        	<?php echo Yii::t("common","and") ?> 
	                        	<span class="text-purple"><i class="fa fa-lightbulb-o"></i> <?php echo Yii::t("common","projects") ?></span>,<br>
	                        	<?php echo Yii::t("home","voting tools, and task management") ?>.<br>
	                        	<hr style="width:40%; margin:20px auto; border: 4px solid #cecece;">    
	                			<?php echo Yii::t("home","To accompany you in the process of decisions and actions,<br>it's also part of our goals") ?> !
	                			<br><br>
	                        	</small>
	                        </h3>
	                    </div>

	                    <img class="img-responsive" style="margin:0 auto;margin-top: 20px; max-height:360px;" src="<?php echo $this->module->assetsUrl; ?>/images/home/espaceco-1.png"/>

	                    <div class="col-md-12 col-xs-12 text-center no-padding">
	                        <h3 class="">
	                        	<small class="letter-green">
	                        	<i class="fa fa-check "></i> <?php echo Yii::t("home","Collective decisions") ?><br>
	                        	<i class="fa fa-check "></i> <?php echo Yii::t("home","Horizontal governance") ?>
	                        	</small>
	                        </h3>
	                    </div>

	                    
	                    <a href="https://wiki.communecter.org/fr/espace-coop%C3%A9ratif.html" target="_blank" class="text-red bold margin-top-25">
	                    	<?php echo Yii::t("home","+ More infos") ?>    
	                	</a>
		             </div>
		            <div class="visible-xs col-xs-12 padding-20" style="text-align:center;min-height:400px;">
						<img class="img-responsive" style="margin:0 auto;margin-top: 10px;" src="<?php echo $this->module->assetsUrl; ?>/images/home/espaceco-1.png"/>
					</div>
				</div>
			</div>
			
		</div>

		<div class="col-xs-12 no-padding">
		    <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: #f6f6f6; text-align:center;min-height:400px;">
		    	<h4 class="margin-top-50"><?php echo Yii::t("home","+ more details in video") ?> !</h4>
				<hr style="width:40%; margin:10px auto; border: 4px solid #cecece;">    
		        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 padding-25">
			    	<div class="h_iframe">
			        <!-- a transparent image is preferable -->
			        <img class="ratio" src="http://placehold.it/16x9"/>
			        <iframe id="autoPlayVideo" src="https://player.vimeo.com/video/133636468?api=1&title=0&amp;byline=0&amp;portrait=0&amp;color=57c0d4" frameborder="0" allowfullscreen></iframe>
			    	</div>
			    	
				</div>
			</div>
		</div>


	<div class="col-sm-12 col-md-12 col-xs-12 no-padding" style="background-color:#E33551; max-width:100%; float:left;" id="teamSection">
		
		<center>
			<i class="fa fa-caret-down" style="color:#f6f6f6"></i><br/>
		
			<h1 class="homestead" style="color:#fff">
				<?php echo Yii::t("home","We are all Open") ?>
			</h1>
			<img src="<?php echo $this->module->assetsUrl; ?>/images/home/yoda.png" height="40"/> 
					
			<style>.hhh a{color:white; font-weight: bold;text-transform: underline;}</style>
			<div class="col-sm-12 text-white padding-bottom-15 hhh">
				<h3>
					<small class="text-white">
					<?php echo Yii::t("home","Everything we do is <a href='https://github.com/pixelhumain'>OpenSource</a> and built in collaborative way") ?>.<br/>
					<?php echo Yii::t("home","We are experimenting new ways of gouvernance,<br>managing territory, implicating local actor into everything and everywhere") ?>.
					</small>
				</h3>

				<!-- <i>"EN AMÉLIORATION CONTINUE"</i> -->
				<br>
				<hr style="width:40%; margin:10px auto; border: 4px solid #f68989;">
				<h3 class="no-margin"><i class="fa fa-link"></i> <?php echo Yii::t("home","Join us") ?> !</h3><br>
				
			</div>
		</center>
		<div class="space20"></div>
	</div>

	<div class="col-md-12 font-montserrat padding-bottom-50" style="color:#293A46; float:left; width:100%;">
		<center>
			<i class="fa fa-caret-down" style="color:#E33551"></i>
			<br/>
			
			<a class="lbh"  href="#@co-communication">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-bullhorn fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #Communication </span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Share and imagine great ideas") ?> <br/></span>
				</div>	
			</a>

			<a class="lbh"  href="#@codesign">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-coffee fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #CoDesign </span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Ideas Design Graphics Video") ?> <br/></span>
				</div>	
			</a>
			
			<a class="lbh"  href="#@codev">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-code fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #COdev </span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Core Development team") ?> <br/></span>
				</div>
			</a>

			<a class="lbh"  href="#@communecter">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-lightbulb-o fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #communecter </span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Project Management") ?> <br/></span>
				</div>	
			</a>


			<a class="lbh"  href="#@openatlas">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-group fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #Open Atlas </span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Non Governmental Organization") ?> <br/></span>
				</div>	
			</a>


			<a class="lbh"  href="#@pixelhumain">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-circle-thin fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #COOP Pixel Humain</span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Active contributors and soon a cooperative") ?> <br/></span>
				</div>	
			</a>

			<a class="lbh"  href="#@connections">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-connectdevelop fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #Connections </span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "All people we meet.") ?> <br/></span>
				</div>	
			</a>
			
			<a class="lbh"  href="#@cofinanceur">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-heart fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #Contributors</span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Money for bills & Love to live.") ?> <br/></span>
				</div>
			</a>

			<a class="lbh"  href="#@cotest">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-child fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #CoTesting</span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Good tools have great testers") ?> <br/></span>
				</div>
			</a>

			<a class="lbh"  href="#@cobugs">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-bug fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #CoBugs </span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Help share & destroy bugs") ?> <br/></span>
				</div>	
			</a>

			<a class="lbh"  href="#@cointerop">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-usb fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #Interoperabilty</span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Connecting Systems together") ?> <br/></span>
				</div>
			</a>
			
			<a class="lbh"  href="#@cotools">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-cubes fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #CO Tools</span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Open Source Tools For Communities") ?> <br/></span>
				</div>
			</a>

	</center>
	</div>


	<div class="col-md-12" style="color:#293A46; background-color: #dfe7e9; float:left; width:100%;">
		<center>
			<i class="fa fa-caret-down" style="color:#fff"></i>
			<div class="col-xs-12 margin-top-10 margin-bottom-25">
				<h4><?php echo Yii::t("home","They form a key part of the adventure") ?> !</h4>
				<?php 
					$list = PHDB::findAndSort(Person::COLLECTION, array(
						"profilThumbImageUrl" => array( '$exists' => 1,'$ne' => "")
						),array("updated"),"100",array("profilThumbImageUrl","name") );
				foreach ($list as $key => $value) {
					echo '<img title="'.@$value["name"].'" src="'.@$value["profilThumbImageUrl"].'" height="50"/>';
				} ?>
			</div>
		</center>
	</div>

	<div class="col-xs-12 margin-top-25" >
		<h3 class="text-red text-center"><?php echo Yii::t("home","Read Us") ?></h3>
		<hr class="angle-down">
	</div>

	<div class="col-md-12  font-montserrat padding-bottom-50" style="color:#293A46; float:left; width:100%;">
		<center>
			
			<a class="lbh"  href="#@codocwiki">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-group fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #<?php echo Yii::t("home", "Team") ?></span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Top Level Sharing process") ?> <br/></span>
				</div>
			</a>

			<a class="lbh"  href="#docs">
				<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
					<i class="fa fa-book fa-2x"></i>
					<br/>
					<span class="uppercase text-red" style="font-size: 18px;"> #<?php echo Yii::t("home", "Online Doc") ?></span><br/>
					<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "5 year Thinking Process") ?> <br/></span>
				</div>
			</a>

		<a href="http://wiki.communecter.org" >
			<div class="ahover bg-white padding-10 col-sm-12 col-md-4">
				<i class="fa fa-briefcase fa-2x"></i>
				<br/>
				<span class="uppercase text-red" style="font-size: 18px;"> #Doc Kit</span><br/>
				<span style="font-size: 16px;font-style:italic"> <?php echo Yii::t("home", "Goodies we can pass around") ?> <br/></span>
			</div>
		</a>

	</center>
	</div>


	<div class="col-md-12  font-montserrat padding-bottom-50" style="color:#293A46; float:left; width:100%;" id="partenerSection">
		<center>
			<hr class="angle-down">
			<a href="https://www.infomaniak.com/fr" target="_blank" class="">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo-infomaniak.png" height=20 style="margin-top: -10px;border-radius: 3px;">
            </a><br>
            <?php echo Yii::t("home", "helps us to host our tools") ?>
		<center>
	</div>


	<div class="col-xs-12 no-padding margin-top-15" style="text-align:center;">
			<div class="col-xs-12 center" style="background-color: #E33551;">
				<i class="fa fa-caret-down" style="color:#fff"></i><br/>
				<h4 class="text-center text-white">
					<?php echo Yii::t("home", "Be a pillar of Communecter<br>make a donation to our association") ?><br>
					<a class="letter-green underline" href="http://open-atlas.org/" target="_blank">
						<img src="<?php echo $this->module->assetsUrl; ?>/images/home/OpenAtlasLogoBLANC-126x42.png" height=40>
					</a>
				</h4>
				<h3 class="no-margin"><small class="text-white">
                    <?php echo Yii::t("home", "No advertisement, no business with your privacy, only Openness and Passion") ?>
                    <hr style="width:40%; margin:20px auto; border: 4px solid #f68989;">  
                    <?php echo Yii::t("home", "But to make it possible, we need you !") ?></small>
                </h3>
				<?php /*echo Yii::t("home", "Communecter est soutenu par une association non profit et est développé sous licence libre et données ouvertes. Nous croyons dans des plateformes libres, accessibles gratuitement pour tous. 

					Nous avons besoin de personnes comme vous, soutiens, utilisateurs ou futures utilisateurs de la plateforme pour rendre cela possible.

					Nous sommes une petite équipe avec peu de moyens, votre soutien fera une grande différence !")*/ ?><br/>
				
				<a href="https://www.helloasso.com/associations/open-atlas/collectes/communecter/don" 
					target="_blank" class="btn btn-default bg-white letter-blue bold">
					<img src="<?php echo $this->module->assetsUrl; ?>/images/home/helloasso-icon.png" height="20" width="20"/> 
					<?php echo Yii::t("home", "Donate") ?>
				</a><br>
				<h5 class="no-margin padding-15">
                <small class="text-white">
                	<i>"<?php echo Yii::t("home", "From each according to his means, to each according to his needs") ?>"</i>
                </small>
                </h5>
			</div>
			<!--<div class="col-md-6 col-sm-6 col-xs-12 padding-20" style="background-color: white; text-align:center;min-height:400px;">
				Image , Design avec boutton pour aller sur le don <br/><br/>
				<a href="https://www.helloasso.com/associations/open-atlas/collectes/communecter/don" target="_blank" class="margin-top-20 no-padding" style="width:100%;text-decoration: none;">
					<h3 class="text-center">
						<?php echo Yii::t("home","Don récurant") ?>
					</h3>
				</a>
			</div>-->
	</div>
	

	<div class="col-md-12 contact-map padding-bottom-50" style="color:#293A46; float:left; width:100%;" id="contactSection">
		<center>
			<i class="fa fa-caret-down" style="color:#E33551"></i>
			<br/>
			<br/>
			<h1 class="homestead">
			<a target="_blank" href="https://github.com/pixelhumain/communecter" class="btn btn-github btn-social"><span class="fa fa-github"></span> </a>
			<br/>
			<br/>
			<?php echo Yii::t("home","CONTACT") ?>
			</h1>
			+ 262 262 34 36 86<br><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/contactCO_footer_welcome.png" height="15"/>

			<br/><a href="#docs.page.openatlas.dir.<?php echo Yii::app()->language ?>" data-id="explainOpenAtlas" class="lbh"><?php echo Yii::t("home","Open Atlas NGO") ?></a>
			<br/><a href="#docs.page.mention.dir.<?php echo Yii::app()->language ?>" class="lbh" ><?php echo Yii::t("home","Legal notice") ?></a>
			<br/><a href="#docs.page.partners.dir.panels" class="lbh"><?php echo Yii::t("home","Partners") ?></a>
		<center>
	</div>

</div>




<div class="portfolio-modal modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-hidden="true">
    <form class="modal-content form-email box-email padding-top-15"  >
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="name hidden" >
                        <?php if(Yii::app()->params["CO2DomainName"] == "kgougle"){ ?>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/KGOUGLE-logo.png" height="60" class="inline margin-bottom-15">
                       <?php } else { ?>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/CO2r.png" height="100" class="inline margin-bottom-15">
                        <?php } ?>
                    </span>
                    <h4 class="letter-red no-margin" style="margin-top:-5px!important;">Mot de passe oublié ?</h4><br>
                    <hr>
                    <p><small>Indiquez votre addresse e-mail, vous recevrez un e-mail contenant votre mot de passe.</small></p>
                    <hr>
                    
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4 text-left">
                
                <label class="letter-black"><i class="fa fa-envelope"></i> E-mail</label><br>
                <input class="form-control" id="email2" name="email2" type="text" placeholder="E-mail"><br/>
                
                <hr>

                <div class="pull-left form-actions no-margin" style="width:100%; padding:10px;">
                    <div class="errorHandler alert alert-danger no-display registerResult pull-left " style="width:100%;">
                        <i class="fa fa-remove-sign"></i> <?php echo Yii::t("login","You have some form errors. Please check below.") ?>
                    </div>
                </div>

                <!-- <div class="form-actions">
                     <button type="submit"  data-size="s" data-style="expand-right" style="background-color:#E33551" class="forgotBtn ladda-button center center-block">
                        <span class="ladda-label">XXXXXXXX</span><span class="ladda-spinner"></span><span class="ladda-spinner"></span>
                    </button>
                </div> -->

                <a href="javascript:" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo Yii::t("common","Back") ?></a>
                <button class="btn btn-success text-white pull-right forgotBtn"><i class="fa fa-sign-in"></i> Envoyer</button>
                
                
                <div class="col-md-12 margin-top-50 margin-bottom-50"></div>
            </div>      
        </div>
    </form>
</div>


<script type="text/javascript">

<?php $layoutPath = 'webroot.themes.'.Yii::app()->theme->name.'.views.layouts.';
	  $this->renderPartial($layoutPath.'home.peopleTalk'); ?>
var peopleTalkCt = 0;

jQuery(document).ready(function() {
	setTimeout(function(){
		//$("#videoDocsImg img").css({"max-height":$("#form-home-subscribe").outerHeight()});
	},300);
	topMenuActivated = false;
	hideScrollTop = true;
	checkScroll();

	loadLiveNow();
	$(".videoSignal").click(function(){
		openVideo();
	});

	peopleTalkCt = getRandomInt(0,peopleTalk.length);
	showPeopleTalk();


    $("#map-loading-data").hide();
	$(".mainmenu").html($("#modalMainMenu .links-main-menu").html());
	//$("#modalMainMenu .links-main-menu").html("");

	//setTimeout(function(){ $("#input-communexion").hide(300); }, 300);

	var timerCo = false;
			
	$("#main-search-bar").keyup(function(){
		if($("#main-search-bar").val().length > 2){
			if(timerCo != false) clearTimeout(timerCo);
			timerCo = setTimeout(function(){ 
				//$("#info_co").html("");
				$(".info_co").addClass("hidden");
				$("#change_co").addClass("hidden");
				searchType = ["cities"];
				loadingData=false;
				scrollEnd=false;
				totalData = 0;
				communexion.state = false ; 
				startSearch(0, 20);
			}, 500);
		}else{
			$(".info_co").removeClass("hidden");
			$("#dropdown_search").html("");
		}
	});


    $("#change_co").click(function(){
    	$(".info_co, .input_co").removeClass("hidden");
		$("#change_co").addClass("hidden");

    });


	setTitle("<?php echo Yii::t("home","Welcome on") ?> <span class='text-red'>commune</span>cter","home","<?php echo Yii::t("home","Welcome on Communecter") ?>");
	$('.tooltips').tooltip();

	$("#btn-param-postal-code").click(function(){
		$("#div-param-postal-code").show(400);
	});

	$(".btn-show-map-home").click(function(){
		search.app="search";
		initCountType();
  		initTypeSearch("all");
  		$(this).html("<i class='fa fa-spin fa-circle-o-notch'></i> "+trad.currentlyloading);
		startSearch(0, 30, function(){
			if(typeof formInMap != "undefined" && formInMap.actived == true)
				formInMap.cancel(true);
	    	//else if(isMapEnd == false && notEmpty(contextData) && location.hash.indexOf("#page.type."+contextData.type+"."+contextData.id))
			//	getContextDataLinks();
			else{
				if(isMapEnd == false && contextData && contextData.map && location.hash.indexOf("#page.type."+contextData.type+"."+contextData.id) )
					Sig.showMapElements(Sig.map, contextData.map.data, contextData.map.icon, contextData.map.title);
					showMap();
			}
			$(".btn-show-map-home").html("<i class='fa fa-map-marker'></i> "+trad.showmap);
		});
	})
	// $('#searchBarPostalCode').keyup(function(e){
 //        clearTimeout(timeoutSearchHome);
 //        timeoutSearchHome = setTimeout(function(){ startSearch(); }, 800);
 //    });


    $(".explainLink").click(function() {
		showDefinition( $(this).data("id") );
		return false;
	});
    $(".keyword").click(function() {
    	$(".keysUsages").hide();
    	link = "<br/><a href='javascript:;' class='showUsage homestead yellow'><i class='fa fa-toggle-up' style='color:#fff'></i> Usages</a>";
    	$(".keywordExplain").html( $("."+$(this).data("id")).html()+link ).fadeIn(400);
    	 $(".showUsage").off().on("click",function() { $(".keywordExplain").slideUp(); $(".keysUsages").slideDown();});
    });

    $(".keyword1").click(function() {
    	$(".keysKeyWords").hide();
    	link = "<br/><a href='javascript:;' class='showKeywords homestead yellow'><i class='fa fa-toggle-up' style='color:#fff'></i> Mots Clefs</a>";
    	$(".usageExplain").html( $("."+$(this).data("id")).html()+link ).slideDown();
    	 $(".showKeywords").off().on("click",function() { $(".usageExplain").slideUp(); $(".keysKeyWords").slideDown();});
    });


    $(".btn-main-menu").mouseenter(function(){ 
        $(".menuSection2").addClass("hidden"); 
        if( $(this).data("type") ) 
            $("."+$(this).data("type")+"Section2").removeClass("hidden");
    }).click(function(e) {  
        e.preventDefault(); 
        $('#modalMainMenu').modal("hide"); 
        mylog.warn("***************************************"); 
        mylog.warn("bindLBHLinks",$(this).attr("href")); 
        mylog.warn("***************************************"); 
        var h = ($(this).data("hash")) ? $(this).data("hash") : $(this).attr("href"); 
        urlCtrl.loadByHash( h ); 
    }); 

    $(".tagSearchBtn").click(function(e) {  
        e.preventDefault(); 
        $('#modalMainMenu').modal("hide"); 
        mylog.warn( ".tagSearchBtn",$(this).data("type"),$(this).data("stype"),$(this).data("tags") ); 

        searchObj.types = $(this).data("type").split(",");
        
        if( $(this).data("stype") )
            searchObj.stype = $(this).data("stype");
        else
            searchObj.tags = $(this).data("tags");
        
        urlCtrl.loadByHash($(this).data("app"));
        urlCtrl.afterLoad = function () {     
            //we have to pass by a variable to set the values         
            searchType = searchObj.types;
        
            if( $(this).data("stype") )
                $('#searchSType').val(searchObj.stype);
            else
                $('#searchTags').val(searchObj.tags);
            startSearch();
            searchObj = {};
        }
    }); 

});
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
function showPeopleTalk(step)
{
	// if(!step)
	// 	step = 1;
	// peopleTalkCt = peopleTalkCt+step;
	// if( undefined == peopleTalk[ peopleTalkCt ]  )
	// 	peopleTalkCt = 0;
	// person = peopleTalk[ peopleTalkCt ];

	var html = "";
	$.each(peopleTalk, function(key, person){
	html += '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 padding-5" style="min-height:430px;max-height:430px;">' +
				'<div class="" style="max-height:240px; overflow:hidden; max-width:100%;">' +
				'<img class="img-responsive img-thumbnail peopleTalkImg" src="'+person.image+'"><br>' +
				'</div>' +
				'<span class="peopleTalkName">'+person.name+'</span><br>' +
				'<span class="peopleTalkProject">'+person.project+'</span><br>' +
				'<span class="peopleTalkComment inline-block">'+person.comment+'</span>' +
			'</div>';
	});

	$("#co-friends").html( html );
	// $(".peopleTalkName").html( person.name );
	// $(".peopleTalkImg").attr("src",person.image);
	// $(".peopleTalkComment").html("<i class='fa fa-quote-left'></i> "+person.comment+"<i class='fa fa-quote-right'></i> ");
	// $(".peopleTalkProject").html( "<a target='_blank' href='"+person.url+"'>"+person.project+"</a>" );

}

function openVideo(){
	$("#videoDocsImg").fadeOut("slow",function() {
		heightCont=$("#form-home-subscribe").outerHeight();
		$(".videoWrapper").height(heightCont);
		$(".videoWrapper").fadeIn('slow');
		 var symbol = $("#autoPlayVideo")[0].src.indexOf("?") > -1 ? "&" : "?";
  		//modify source to autoplay and start video
  		$("#autoPlayVideo")[0].src += symbol + "autoplay=1";
  		if($("#form-home-subscribe").length)
  			$(".videoWrapper .h_iframe").css({"margin-top": ((heightCont-$(".videoWrapper .h_iframe").height())/2)+"px"});
	});
}

var timeoutSearchHome = null;

function showTagOnMap (tag) {

	mylog.log("showTagOnMap",tag);

	var data = { 	 "name" : tag,
		 			 "locality" : "",
		 			 "searchType" : [ "persons" ],
		 			 //"searchBy" : "INSEE",
            		 "indexMin" : 0,
            		 "indexMax" : 500
            		};

        //setTitle("","");$(".moduleLabel").html("<i class='fa fa-spin fa-circle-o-notch'></i> Les acteurs locaux : <span class='text-red'>" + cityNameCommunexion + ", " + cpCommunexion + "</span>");

		$.blockUI({
			message : "<h1 class='homestead text-red'><i class='fa fa-spin fa-circle-o-notch'></i> Recherches des collaborateurs ...</h1>"
		});

		showMap(true);

		$.ajax({
	      type: "POST",
	          url: baseUrl+"/" + moduleId + "/search/globalautocomplete",
	          data: data,
	          dataType: "json",
	          error: function (data){
	             mylog.log("error"); mylog.dir(data);
	          },
	          success: function(data){
	            if(!data){ toastr.error(data.content); }
	            else{
	            	mylog.dir(data);
	            	Sig.showMapElements(Sig.map, data);
	            	$.unblockUI();
	            }
	          }
	 	});

	//loadByHash('#project.detail.id.56c1a474f6ca47a8378b45ef',null,true);
	//Sig.showFilterOnMap(tag);
}



function loadLiveNow () {
	mylog.log("loadLiveNow CO2.php");
	var searchParams = {
		"tpl":"/pod/nowList",
		"searchLocalityCITYKEY" : new Array(""),
		"indexMin" : 0, 
		"indexMax" : 30 
	};

    //console.log("communexion : ", communexion);
	if($("#searchLocalityCITYKEY").val() != ""){
		searchParams.searchLocalityCITYKEY = new Array($("#searchLocalityCITYKEY").val());
	}else if(myScopes.communexion.values != null){
		if(typeof myScopes.communexion.values.cityKey != "undefined"){
			searchParams.searchLocalityCITYKEY = new Array(myScopes.communexion.values.cityKey);
		}
	}

	var searchParams = {
		"tpl":"/pod/nowList",
		"searchLocality" : getSearchLocalityObject(true),
		"indexMin" : 0, 
		"indexMax" : 30 
	};
   	
    //console.log("communexion ?", communexion);

    ajaxPost( "#nowList", baseUrl+'/'+moduleId+'/element/getdatadetail/type/0/id/0/dataName/liveNow?tpl=nowList',
					searchParams, function(data) {
					bindLBHLinks();
	} , "html" );
}


</script>
