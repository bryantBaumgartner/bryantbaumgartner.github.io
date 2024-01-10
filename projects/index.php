<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience - Bryant Baumgartner</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/darkmode.css">
    <link rel="stylesheet" href="/css/togglecontent.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/js/includeHTML.js"></script>
    <script src="/js/togglecontent.js"></script>

	<style>
		select {
			float: right;
			background-color: #415c77;
			border: none;
			border-radius: 35px;/* 0px 0px 35px;*/
			padding:5px;
			margin-bottom:5px;
			color:white;
			min-width: 100%;
			max-width: 100%;
			text-overflow: ellipsis;
		}
	</style>
</head>
<body style="background-color:#15202B;">
    <div w3-include-html="/header.html"></div>

    <main role="main" class="container-fluid" style="max-width:1300px;">
        <div class="row mb-5" style="color:white; margin-top:80px;">
            <div class="col-md-2 mb-4 hide-twitter-element d-none d-md-block">
                <ul class="nav nav-pills twitter-nav-links flex-column sticky-top" style="top:90px;">
                    <a href="/index"><li class="tweet-header-link tweet-active-link"><img class="icon" src="/images/icons/home.svg" /> Home</li></a>
                </ul>
            </div>

            <!--Middle Tab-->
            <div class="col-md-6 mb-4">
                <div class="twitter-post" style="padding:0px;">
                    <img src="/images/what-is-new-in-the-xenoblade-chronicles-3-battle-system.jpeg" style="width:100%; max-width:100%; height:200px; object-fit:cover; z-index:-1; margin-bottom:-50px;" />
                    <div class="row twitter-side-element">
                        <img class="float-left" src="/images/Monado_III_Symbol_DE.webp" style="width:100px; height:100px; border-radius:50px; object-fit:cover;" />
                    </div>
                    <div class="row twitter-side-element">
                        <p class="display-4">X3NOBuilder</p>
                    </div>
                    <div class="row twitter-side-element">
                        <p style="line-height:17px; margin-bottom:5px;"><b>Bryant Baumgartner</b><span style="color: #7C8E9B"> #XenoBuilder - 2/3/22</span></p><br />
                        <p style="line-height:17px; font-size:15px;">Create builds for Xenoblade Chronicles 3 without the hassel of in-game menus. Then put your strategy to the test later.</p>
                    </div>
                </div>

                <!--Middle Tab Items-->
                <!--List 1-->
				<?php $alllines = file_get_contents("records.json"); $json_ingest = json_decode($alllines); ?>
                <div id="setList1" class="set-list">
                    <div class="twitter-post" style="padding-bottom:0px;">
						<div class="row">
						    <div class="col-md-4 mb-4">
								<p id="playername_out" class="display-4">Noah</p>
							</div>
							<div class="col-md-4 mb-4">
							<p style="line-height:17px; margin-bottom:15px;"><b>Character</b></p>
								<select id="playername_in">
                                    <?php
										foreach ($json_ingest->players as $player){
											print '<option value="'.$player->name.'" title="'.$player->desc.'">'.$player->name.'</option>';
										}
                                    ?>
                                </select>
							</div>
							<div class="col-md-4 mb-4">
							<p style="line-height:17px; margin-bottom:15px;"><b>Class</b></p>
								<select id="class_in">
                                    <?php
										foreach ($json_ingest->classes as $class){
											print '<option value="'.$class->name.'" title="'.$class->desc.'">'.$class->name.'</option>';
										}
                                    ?>
                                </select>
							</div>
						</div>
                        <div class="row">				
                            <div class="col-md-4 mb-4">
								<p style="line-height:17px; margin-bottom:15px;"><b>Skills</b></p>
                                <select id="skill1">
                                    <?php
										foreach ($json_ingest->skills as $skill){
											print '<option value="'.$skill->name.'" title="'.$skill->desc.'">'.$skill->name.'</option>';
										}
                                    ?>
                                </select>
								<select id="skill2">
                                    <?php
										foreach ($json_ingest->skills as $skill){
											print '<option value="'.$skill->name.'" title="'.$skill->desc.'">'.$skill->name.'</option>';
										}
                                    ?>
                                </select>
								<select id="skill3">
                                    <?php
										foreach ($json_ingest->skills as $skill){
											print '<option value="'.$skill->name.'" title="'.$skill->desc.'">'.$skill->name.'</option>';
										}
                                    ?>
                                </select>
							</div>
							<div class="col-md-4 mb-4">
								<p style="line-height:17px; margin-bottom:15px;"><b>Gems</b></p>
                                <select>
                                    <?php
										foreach ($json_ingest->gems as $gem){
											print '<option value="'.$gem->name.'" title="'.$gem->desc.'">'.$gem->name.'</option>';
										}
                                    ?>
                                </select>
								<select>
                                    <?php
										foreach ($json_ingest->gems as $gem){
											print '<option value="'.$gem->name.'" title="'.$gem->desc.'">'.$gem->name.'</option>';
										}
                                    ?>
                                </select>
								<select>
                                    <?php
										foreach ($json_ingest->gems as $gem){
											print '<option value="'.$gem->name.'" title="'.$gem->desc.'">'.$gem->name.'</option>';
										}
                                    ?>
                                </select>
                            </div>
							<div class="col-md-4 mb-4">
								<p style="line-height:17px; margin-bottom:15px;"><b>Accessories</b></p>
                                <select id="accessory1">
                                    <?php
										foreach ($json_ingest->accessories as $accessory){
											print '<option value="'.$accessory->name.'" title="'.$accessory->desc.'">'.$accessory->name.'</option>';
										}
                                    ?>
                                </select>
								<select id="accessory2">
                                    <?php
										foreach ($json_ingest->accessories as $accessory){
											print '<option value="'.$accessory->name.'" title="'.$accessory->desc.'">'.$accessory->name.'</option>';
										}
                                    ?>
                                </select>
								<select id="accessory3">
                                    <?php
										foreach ($json_ingest->accessories as $accessory){
											print '<option value="'.$accessory->name.'" title="'.$accessory->desc.'">'.$accessory->name.'</option>';
										}
                                    ?>
                                </select>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-md-4 mb-4">
								<p style="line-height:17px; margin-bottom:15px;"><b>Talent Art</b></p>
								<select>
                                    <?php
										foreach ($json_ingest->talent as $talent){
											print '<option value="'.$talent->name.'" title="'.$talent->desc.'">'.$talent->name.'</option>';
										}
                                    ?>
                                </select><br />
							</div>
							<div class="col-md-4 mb-4">
								<p style="line-height:17px; margin-bottom:15px;"><b>Master Arts</b></p>
                                <select>
                                    <?php
										foreach ($json_ingest->arts as $arts){
											print '<option value="'.$arts->name.'" title="'.$arts->desc.'">'.$arts->name.'</option>';
										}
                                    ?>
                                </select>
								<select>
                                    <?php
										foreach ($json_ingest->arts as $arts){
											print '<option value="'.$arts->name.'" title="'.$arts->desc.'">'.$arts->name.'</option>';
										}
                                    ?>
                                </select>
								<select>
                                    <?php
										foreach ($json_ingest->arts as $arts){
											print '<option value="'.$arts->name.'" title="'.$arts->desc.'">'.$arts->name.'</option>';
										}
                                    ?>
                                </select>
                            </div>
							<div class="col-md-4 mb-4">
								<p style="line-height:17px; margin-bottom:15px;"><b>Base Arts</b></p>
                                <select>
                                    <?php
										foreach ($json_ingest->arts as $arts){
											print '<option value="'.$arts->name.'" title="'.$arts->desc.'">'.$arts->name.'</option>';
										}
                                    ?>
                                </select>
								<select>
                                    <?php
										foreach ($json_ingest->arts as $arts){
											print '<option value="'.$arts->name.'" title="'.$arts->desc.'">'.$arts->name.'</option>';
										}
                                    ?>
                                </select>
								<select>
                                    <?php
										foreach ($json_ingest->arts as $arts){
											print '<option value="'.$arts->name.'" title="'.$arts->desc.'">'.$arts->name.'</option>';
										}
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
					<div class="twitter-post" style="padding-bottom:0px;">
						<p style="line-height:17px; margin-bottom:15px;"><b>Stats at LV99 (Not totally accurate atm)</b></p>
						<div class="row">				
                            <div class="col-md-4 mb-2" style="font-weight:300">
								<p style="line-height:17px; margin-bottom:15px;"><b>HP</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Attack</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Healing Power</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Dexterity</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Agility</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Critical Rate</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Block Rate</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Physical Defense</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Ether Defense</b></p>
							</div>
							<div class="col-md-2 mb-2" style="text-align: right">
								<p id="hp" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>9999</b></p>
								<p id="atk" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>1000</b></p>
								<p id="heal" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>200</b></p>
								<p id="dex" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>500</b></p>
								<p id="agi" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>200</b></p>
								<p id="crit" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>20%</b></p>
								<p id="block" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>10%</b></p>
								<p id="phy" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>10%</b></p>
								<p id="eth" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>10%</b></p>
							</div>
							<div class="col-md-4 mb-2" style="font-weight:300">
								<p style="line-height:17px; margin-bottom:15px;"><b>Chain Attack TP</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Enemy Break Resist</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Toppled Damage</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Launched Damage</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Dazed Damage</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Smash Damage</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Aggro Reduction</b></p>
								<p style="line-height:17px; margin-bottom:15px;"><b>Aggro Boost</b></p>
							</div>
							<div class="col-md-2 mb-2" style="text-align: right">
								<p id="tp" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>25</b></p>
								<p id="breakres" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>x1</b></p>
								<p id="toppledmg" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>x1</b></p>
								<p id="launchdmg" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>x1</b></p>
								<p id="dazedmg" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>x1</b></p>
								<p id="smashdmg" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>x1</b></p>
								<p id="aggrodown" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>x1</b></p>
								<p id="aggroup" style="line-height:17px; margin-bottom:15px; float:right; width:100%"><b>x1</b></p>
							</div>
						</div>
					</div>
                </div>
            </div>

            <!--What's New and Social Media-->
            <div class="col-md-4 mb-4 flex-column">
                <div w3-include-html="/news.html" style="max-width:100vw;"></div>
                <div class="jumbotron twitter-side-panel sticky-top" style="top:90px; padding:20px; padding-left:0; padding-right:0px; padding-bottom:0px; overflow:hidden">
                    <p class="display-4 twitter-side-element">Resume</p>
                    <a class="no-text-highlighting" href="/files/Bryant_Baumgartner_Resume.pdf" download="BryantBaumgartner-resume.docx">
                        <div class="twitter-post twitter-post-hoverable" style="width:100%; border:none; padding-top:15px; padding-bottom:0px;" onclick="#">
                            <div class="row">
                                <div class="col-md-1 mb-4 hide-twitter-element" style="max-width:65px;">
                                    <img class="float-left" src="/images/Logos/download+file+page+paper+icon-1320165844661536600.png" style="width:45px; height:45px; border-radius:50px; object-fit:cover; margin-top:10px;" />
                                </div>
                                <div class="col-md-9 mb-4" style="margin-right:10px;">
                                    <p style="line-height:20px; margin-bottom:5px;"><b>Current Resume</b><span style="color: #7C8E9B"> - 4/6/22</span></p>
                                    <p class="twitter-side-element" style="color: #7C8E9B; line-height:17px; font-size:15px; margin-bottom:-5px;">Wanna skip straight to the good stuff? Download my resume here!</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <div w3-include-html="/footerdynamic.html" style="max-width:100vw;"></div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        includeHTML();

        function loadPage(location) {
            window.location.href = location;
        }

		//Global vars
		var access = null;
		var aindex1 = 0;
		var aindex2 = 0;
		var aindex3 = 0;
		var skills = null;
		var sindex1 = 0;
		var sindex2 = 0;
		var sindex3 = 0;

		//Put something here for managing the change in stats
		var inputs = document.getElementsByTagName("select");
		for (let i = 0; i < inputs.length; i++){
			inputs[i].onchange = function()
			{
				var name = document.getElementById("playername_in").value;
				document.getElementById("playername_out").innerHTML = document.getElementById("playername_in").value;

				calculateStats();
			};
		}

		function calculateStats() {
			//Grab data
			var character = document.getElementById("playername_in").value;
			var classtype = document.getElementById("class_in").value;
			var accessory1 = document.getElementById("accessory1").value;
			var accessory2 = document.getElementById("accessory2").value;
			var accessory3 = document.getElementById("accessory3").value;
			var skill1 = document.getElementById("skill1").value;
			var skill2 = document.getElementById("skill2").value;
			var skill3 = document.getElementById("skill3").value;

			var players = <?php echo json_encode($json_ingest->players); ?>;
			var pindex = players.findIndex(obj => obj.name==character);
			var classes = <?php echo json_encode($json_ingest->classes); ?>;
			var cindex = classes.findIndex(obj => obj.name==classtype);
			access = <?php echo json_encode($json_ingest->accessories); ?>;
			aindex1 = access.findIndex(obj => obj.name==accessory1);
			aindex2 = access.findIndex(obj => obj.name==accessory2);
			aindex3 = access.findIndex(obj => obj.name==accessory3);
			skills = <?php echo json_encode($json_ingest->skills); ?>;
			sindex1 = skills.findIndex(obj => obj.name==skill1);
			sindex2 = skills.findIndex(obj => obj.name==skill2);
			sindex3 = skills.findIndex(obj => obj.name==skill3);	

			//***********************************************************************//

			//Parse and calculate stats
			var level = 99;
			var hp = players[pindex].basestats.hp;
			var atk = players[pindex].basestats.attack;
			var dex = players[pindex].basestats.dexterity;
			var agi = players[pindex].basestats.agility;
			hp += (hp * classes[cindex].statrate.hp) * level;
			atk += (atk * classes[cindex].statrate.attack) * level;
			dex += (dex * classes[cindex].statrate.dexterity) * level;
			agi += (agi * classes[cindex].statrate.agility) * level;

			//Accessories
			hp = hp * calculateeffect(2);
			
			//Print to Stats
			document.getElementById("hp").innerHTML = "<b>" + Math.round(hp) + "</b>";
			document.getElementById("atk").innerHTML = "<b>" + Math.round(atk) + "</b>";
			document.getElementById("dex").innerHTML = "<b>" + Math.round(dex) + "</b>";
			document.getElementById("agi").innerHTML = "<b>" + Math.round(agi) + "</b>";

			//***********************************************************************//

			//Parse and calculate effects
			var tp = players[pindex].tp + (addeffect(3));
			var breakres = 1 * calculateeffect(1);
			var launch = 1 * calculateeffect(0);

			//Print to Effects
			//document.getElementById("topple").innerHTML = "<b>" + Math.round(hp) + "</b>";
			document.getElementById("tp").innerHTML = "<b>" + tp + "</b>";
			document.getElementById("breakres").innerHTML = "<b>x" + breakres.toFixed(2) + "</b>";
			document.getElementById("launchdmg").innerHTML = "<b>" + Math.round(launch.toFixed(1) * 100) + "%</b>";
		}
		function calculateeffect(value) {
			return effectcheck(access[aindex1], value) * effectcheck(access[aindex2], value) * effectcheck(access[aindex3], value) * effectcheck(skills[sindex1], value) * effectcheck(skills[sindex2], value) * effectcheck(skills[sindex3], value);
		}
		function addeffect(value) {
			return effectcheckadd(access[aindex1], value) + effectcheckadd(access[aindex2], value) + effectcheckadd(access[aindex3], value) +
			effectcheckadd(skills[sindex1], value) + effectcheckadd(skills[sindex2], value) + effectcheckadd(skills[sindex3], value);
		}
		function effectcheck(object, check)
		{
			if (object.effect == check) {
				return object.amount;
			}
			else {
				return 1;
			}
		}
		function effectcheckadd(object, check)
		{
			if (object.effect == check) {
				return object.amount;
			}
			else {
				return 0;
			}
		}

		calculateStats();
    </script>
</body>
</html>