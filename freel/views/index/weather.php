<div class="col-md-12">





<?php
$site = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Zaporizhzhya&units=metric&appid=95e63bc8b48e5f807216666a25af6a26 ");
$json = json_decode($site);
?>

<h1 class="centered">Погода в <?=$json->name;?></h1>

<div class="col-md-6 col-md-offset-3 block-weather">
	<div class="col-md-12">
		<div class="col-md-12">
<h3 class="centered"><?=$json->name;?>, <?=$json->sys->country;?> | <?=date("jS F, Y", strtotime("now"));?> </h3>
		</div>
<div class="col-md-4 img-sunrise">
	<i class="fas fa-sun"></i> <span><?=$json->main->temp;?> <small>°</small></span>
</div>
<div class="col-md-3">
<p><span><i class="fas fa-arrow-up" style="color: green;"></i> <?=$json->main->temp_max;?>°</span></p>
<p><span><i class="fas fa-arrow-down" style="color: red;"></i> <?=$json->main->temp_min;?>°</span></p>
</div>
<div class="col-md-5 img-sunrise">
<i class="fas fa-location-arrow"></i> <span><?=$json->wind->speed;?> м/с</span>
	</div>
	</div>
</div>

</div>