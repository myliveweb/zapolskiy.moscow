<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/header.php');
?>
<style>
.pfblock-header > h1.pfblock-title {
	font: 800 30px/1.2 Raleway700, sans-serif;
  text-transform: uppercase;
  letter-spacing: 5px;
  margin: 30px 0 30px;
  color: #222;
}
</style>
<section id="template" class="pfblock" style="padding: 100px 0 0;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pfblock-header wow fadeInUp">
					<?php
					if($item_template) {
					?>
					<h2 class="pfblock-title"><?php echo $header; ?></h2>
					<?php
					} else {
					?>
					<h1 class="pfblock-title"><?php echo $header; ?></h1>
					<?php
					}
					?>
					<div class="pfblock-line"></div>
					<div class="pfblock-subtitle" style="width: 90%; margin-left: 5%;">
						Закажите сайт на любой CMS с любым из этих шаблонов и сэкономьте деньги, на услугах дизайнера. Также можете скачать шаблоны бесплатно из этой подборки. Я занимаюсь поиском новых и интересных адаптивных шаблонов для сайта, чтобы всегда предоставлять вам и вашему бизнесу возможность идти в ногу со временем.
					</div>
				</div>
			</div>
		</div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        	<h3 class="title-section">Категории</h3>
        </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
				<ul class="nav-section">
				<?php
				foreach($section as $item) {
				?>
					<li><a<?php if($item_section && $item_section['url'] == $item['url']) { echo ' class="active"'; } ?> href="/template/<?=$item['url']?>/"  onclick="yaCounter47514331.reachGoal('SECTION_TEMPLATE'); return true;"><?=$item['name']?></a></li>
				<?php
				}
				?>
				</ul>
      </div>
		</div>
	</div>
</section>
<?php
if($item_template) {
	require_once('template.php');
} elseif($item_section) {
	require_once('section.php');
} else {
	require_once('home.php');
}
require_once($_SERVER["DOCUMENT_ROOT"].'/footer.php');
?>
