<?php
$where = ' WHERE section.id = templates.section_id AND templates.section_id = ' . $item_section['id'] . ' ORDER BY templates.name ASC';
?>
<section class="pfblock" style="padding: 0 0 100px 0;">
	<div class="container">
		<div class="row">
			<ul class="products-grid">
			<?php
		  foreach($dbh->query('SELECT templates.id, templates.name, templates.img_local, templates.url from templates, templates_section as ts WHERE templates.id = ts.templates_id AND ts.section_id = ' . $item_section['id'] . ' ORDER BY templates.name ASC LIMIT ' . $perPage) as $row) {
		  ?>
			<li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		    <div class="item wow zoomIn">
		      <div class="col-item">
		        <div class="item-inner">
		          <div class="product-wrapper">
		            <div class="thumb-wrapper">
		                <a href="/template/<?=$item_section['url']?>/<?=$row['url']?>/" class="thumb flip">
		                    <span class="face"><img src="/assets/images/<?=$row['img_local']?>" alt="<?=$row['name']?>"></span>
		                </a>
		            </div>
		          </div>
		          <div class="item-info">
		            <div class="info-inner">
		              <div class="item-title"> <a href="/template/<?=$item_section['url']?>/<?=$row['url']?>/"><?=$row['name']?></a></div>
		            </div>
		            <div class="actions">
		              <a href="/template/<?=$item_section['url']?>/<?=$row['url']?>/" onclick="yaCounter47514331.reachGoal('DETAIL_TEMPLATE'); return true;" class="button btn-cart download"><span>Подробнее</span></a>
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