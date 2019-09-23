<style>
.template-title {
	overflow: hidden;
  padding-top: 45px;
}
.template-title h1 {
	font-size: 24px;
}
.template-body {
	overflow: hidden;
  padding-top: 20px;
}
.template-body img {
	width: 100%;
	border: 0;
}
.template-body h4 {
	display: inline-block;
}
.template-body p {
	margin-top: 18px;
	margin-bottom: 18px;
}
.button {
  border: 0 #ddd solid;
  background: #f5537d;
  padding: 6px 12px;
  color: #fff;
  width: 100%;
  text-align: center;
  transition: color 300ms ease-in-out 0s,background-color 300ms ease-in-out 0s,background-position 300ms ease-in-out 0s;
}
.actions a.button.btn-cart {
  display: inline-block;
  text-transform: uppercase;
  text-decoration: none;
  color: #fff;
  font: 400 14px/2.2 'Raleway400', sans-serif;
  letter-spacing: 1px;
}
.actions a.button.btn-cart {
  position: relative;
}
.actions a.button.btn-cart .btn-title {
  position: relative;
  top: 2px;
}
.actions a.button.btn-cart .btn-link {
  position: absolute;
  top: 8px;
  right: 15px;
  color: #ffffff;
  text-decoration: none;
}
a.order-template {
	background: rgb(255, 82, 82);
	margin-top: 5px;
}
a.demo-template {
	background: #2c9006;
	margin: 38px 0 20px 0;
}
a.download-template {
	background: #0496c5;
	margin-top: 18px;
}
a.order-template:hover, a.demo-template:hover, a.download-template:hover {
	background: rgba(17, 17, 17, 1.8);
}
.products-grid .actions a.button.btn-cart {
  margin: 10px 2px 0 0;
}
.order-template .glyph{
  position: absolute;
  left: 15px;
  top: 6px;
}
.demo-template .glyph{
  position: absolute;
  left: 13px;
  top: 8px;
}
.download-template .glyph{
  position: absolute;
  left: 15px;
  top: 8px;
}
.template-description {
	margin-top: 30px;
}
.template-description p {
	margin: 0;
}
h2 {
    margin: 30px 0 30px;
}
</style>
<section class="pfblock" style="padding: 0;">
	<div class="container">
		<div class="row template-title">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1><?=$item_template['name']?></h1>
			</div>
		</div>
		<div class="row template-body">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<img src="/assets/images/<?=$item_template['img_local']?>" alt="<?=$item_template['name']?>" />
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h4>Категория:</h4>
				<?=$item_section['name']?><br />
				<p>
					Вы можете заказать сайт на любой CMS с этим шаблоном. Могу сделать редизайн для уже существующего сайта. Шаблон будет доработан под ваши нужды и интегрирован в ваш сайт.
				</p>
		    <div class="actions">
		      <a href="#contact" class="button btn-cart order-template"><i class="fa fa-file fa-2x glyph"></i><span class="btn-title">Заказать сайт</span></a>
		    </div>
		    <?php if($item_template['demo']) { ?>
		    <div class="actions">
		      <a href="<?=$item_template['demo']?>" onclick="yaCounter47514331.reachGoal('DEMO'); return true;" class="button btn-cart demo-template" target="_blank"><i class="fa fa-desktop fa-2x glyph"></i><span class="btn-title">Посмотреть демо</span></a>
		    </div>
		    <?php
		  	}
		    foreach($item_template['zip'] as $id_zip => $zip) {
		    	$str_id_zip = $id_zip + 1;
		    ?>
		    <div class="actions">
		      <a href="<?=$zip?>" onclick="yaCounter47514331.reachGoal('DOWNLOAD'); return true;" class="button btn-cart download-template" target="_blank"><i class="fa fa-download fa-2x glyph"></i><span class="btn-title">Скачать / Download</span><?php if(sizeof($item_template['zip']) > 1) { ?><span class="btn-link">Link <?=$str_id_zip?></span><?php } ?></a>
		    </div>
		    <?php
		    }
		    ?>
			</div>
		</div>
		<div class="row template-description">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?=$item_template['description']?>
			</div>
		</div>
	</div>
</section>
<?php
$perPage = 4;
$where = ' WHERE templates.id = ts.templates_id AND section.id = ts.section_id AND ts.section_id = ' . $item_section['id'] . ' AND templates.id != ' . $item_template['id'] . ' ORDER BY rand()';
?>
<section class="pfblock" style="padding: 45px 0 0 0;">
	<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        	<h3 class="title-section">Похожие шаблоны</h3>
        </div>
    </div>
		<div class="row">
			<ul class="products-grid" style="padding: 0;">
			<?php
		  foreach($dbh->query('SELECT templates.id, templates.name, templates.img_local, templates.url, section.url as section_url from templates, section, templates_section as ts' . $where . ' LIMIT ' . $perPage) as $row) {
		  ?>
			<li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		    <div class="item wow zoomIn">
		      <div class="col-item">
		        <div class="item-inner">
		          <div class="product-wrapper">
		            <div class="thumb-wrapper">
		                <a href="/template/<?=$row['section_url']?>/<?=$row['url']?>/" class="thumb flip">
		                    <span class="face"><img src="/assets/images/<?=$row['img_local']?>" alt="<?=$row['name']?>"></span>
		                </a>
		            </div>
		          </div>
		          <div class="item-info">
		            <div class="info-inner">
		              <div class="item-title"> <a href="/template/<?=$row['section_url']?>/<?=$row['url']?>/"><?=$row['name']?></a></div>
		            </div>
		            <div class="actions">
		              <a href="/template/<?=$row['section_url']?>/<?=$row['url']?>/" onclick="yaCounter47514331.reachGoal('DETAIL_TEMPLATE'); return true;" class="button btn-cart download"><span>Подробнее</span></a>
			          </div>
			        </div>
			      </div>
			    </div>
		    </div>
		  </li>
		  <?php
		  }
			?>
			</ul>
		</div>
	</div>
</section>

<!-- Contact start -->

<section id="contact" class="pfblock">
	<div class="container">
		<div class="row">

			<div class="col-sm-6 col-sm-offset-3">

				<div class="pfblock-header">
					<h2 class="pfblock-title">Пишите</h2>
					<div class="pfblock-line"></div>
					<div class="pfblock-subtitle">
						Кратко опишите вашу задачу. Я обязательно свяжусь с вами.
					</div>
				</div>

			</div>

		</div><!-- .row -->

		<div class="row">

			<div class="col-sm-6 col-sm-offset-3">

				<form id="contact-form" role="form">
					<input type="hidden" id="c_template_id" name="c_template_id" value="<?=$item_template['id']?>" />
					<input type="hidden" id="c_template_url" name="c_template_url" value="https://zapolskiy.moscow/template/<?=$item_section['url']?>/<?=$item_template['url']?>/" />
					<div class="ajax-hidden">
						<div class="form-group wow fadeInUp">
							<label class="sr-only" for="c_name">Имя</label>
							<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Имя">
						</div>

						<div class="form-group wow fadeInUp" data-wow-delay=".1s">
							<label class="sr-only" for="c_email">Email</label>
							<input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
						</div>

						<div class="form-group wow fadeInUp" data-wow-delay=".2s">
							<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Шаблон уже прикреплён к этому сообщению. Вам не нужно его указывать. Пишите что считаете важным при доработке и интеграции шаблона."></textarea>
						</div>

						<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Отправить сообщение</button>
					</div>
					<div class="ajax-response" style="margin-top: 15px;"></div>
				</form>

			</div>

		</div><!-- .row -->
	</div><!-- .container -->
</section>

<!-- Contact end -->