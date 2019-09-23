<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/header.php');

/*foreach($dbh->query('SELECT id, name, url from section ORDER BY id ASC')->fetchAll() as $row) {
	/*$count = $dbh->query('SELECT COUNT(t.id) as cnt from templates as t, templates_section as ts WHERE t.id = ts.templates_id AND ts.section_id = ' . $row['id'])->fetch();
	//echo $row['name'] . ' - ' . $count['cnt'] . '<br />';
	$dbh->query('UPDATE section SET count = ' . $count['cnt'] . ' WHERE id = ' . $row['id']);*/
	$section[$row['id']] = $row;
	//$dbh->query('UPDATE section SET url = "' . str2url($row['name']) . '", view = 0  WHERE id = ' . $row['id']);
/*}*/

/*foreach($dbh->query('SELECT id, name from templates ORDER BY id ASC')->fetchAll() as $row) {
	/*$count = $dbh->query('SELECT COUNT(id) as cnt from templates WHERE section_id = ' . $row['id'])->fetch();
	//echo $row['name'] . ' - ' . $count['cnt'] . '<br />';
	$dbh->query('UPDATE section SET count = ' . $count['cnt'] . ' WHERE id = ' . $row['id']);*/
	//echo $row['name'] . ' - ' . $row['id'] . '<br />';
	//$dbh->query('UPDATE templates SET url = "' . str2url($row['name']) . '" WHERE id = ' . $row['id']);
	//$dbh->query('UPDATE templates SET view = 0 WHERE id = ' . $row['id']);
	/*if($item_section_env = $dbh->query('SELECT id from section WHERE name = "' . $row['section'] . '"')->fetch()) {
		//$dbh->query('UPDATE templates SET section_id = "' . $item_section_env['id'] . '" WHERE section = "' . $row['section'] . '"');
		//echo $row['section'] . ' - ' . $item_section_env['id'] . '<br />';
	} else {
		//$dbh->query('INSERT INTO section(name, url, count, view) VALUES ("' . $row['section'] . '", "' . str2url($row['section']) . '", 0, 0)');
		//echo $row['section'] . ' - Отсутствует<br />';
	}
}*/
//$dbh->query('UPDATE templates SET section = "Разное", section_id = 20 WHERE section_id = 30');
?>
<section id="template" class="pfblock" style="padding: 100px 0 0;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="pfblock-header wow fadeInUp">
					<h2 class="pfblock-title">Шаблоны для сайта<?php if($item_section) { echo ' - ' . $item_section['name']; } ?></h2>
					<div class="pfblock-line"></div>
					<div class="pfblock-subtitle" style="width: 90%; margin-left: 5%;">
						Закажите сайт на 1С-Битрикс с любым из этих шаблонов и сэкономьте деньги, на услугах дизайнера. Также можете скачать шаблоны бесплатно из этой подборки. Я занимаюсь поиском новых и интересных адаптивных шаблонов для сайта, чтобы всегда предоставлять вам и вашему бизнесу возможность идти в ногу со временем.
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
	//require_once('template.php');
} elseif($item_section) {
	//require_once('section.php');
} else {
	//require_once('home.php');
}
?>
<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/footer.php');
?>