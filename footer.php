	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

                    <p class="copyright">
                        © 2018 Сергей Запольский&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Skype: myliveweb&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Почта: info@zapolskiy.moscow&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Тел: +7 962 206-4142
					</p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#template"><i class="fa fa-angle-up"></i></a>
	</div>

    <!-- Scroll to top end -->

	<!-- Javascript files -->

	<script src="/assets/js/jquery-1.11.1.min.js"></script>
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery.parallax-1.1.3.min.js"></script>
	<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="/assets/js/jquery.sticky.min.js"></script>
	<script src="/assets/js/smoothscroll.min.js"></script>
	<script src="/assets/js/wow.min.js"></script>
  <script src="/assets/js/jquery.easypiechart.min.js"></script>
  <script src="/assets/js/waypoints.min.js"></script>
  <script src="/assets/js/jquery.cbpQTRotator.min.js"></script>
	<script src="/assets/js/custom.min.js"></script>
<?php if(!$item_template) { ?>
<script>
var section 	 = <?php if($item_section) { echo $item_section['id']; } else { echo 0; } ?>;
var start 		 = <?=$perPage?>;
var numPerPage = <?=$perPage?>;
var sectionUrl = '<?php if($item_section) { echo $item_section['url']; } else { echo ''; } ?>';
var progress   = 0;
$(document).ready(function() {
	$(window).scroll(function() {
		var porog = $(document).height() - $(window).height() - 400;
    if($(window).scrollTop() > porog && !progress) {
    	progress = 1;
			var ajaxData = {
				'section'      : section,
				'start'   		 : start,
				'num_per_page' : numPerPage,
				'section_url'  : sectionUrl
			};
			$.ajax({
				type      : 'POST', // define the type of HTTP verb we want to use (POST for our form)
				url       : '/assets/php/more_template.php', // the url where we want to POST
				data      : ajaxData, // our data object
				dataType  : 'json', // what type of data do we expect back from the server
				encode    : true,
				success		: function(res){
					var ret = $.parseJSON(JSON.stringify(res));
					if(ret.data.length) {
						wowc = 'wow-' + start;
						var html = '';
						$.each(ret.data, function(index, value) {
							html = '';
							html += '<li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">';
							html += '<div class="item ' + wowc +' zoomIn">';
							html += '<div class="col-item">';
							html += '<div class="item-inner">';
							html += '<div class="product-wrapper">';
							html += '<div class="thumb-wrapper">';
							html += '<a href="' + value.url +'" class="thumb flip">';
							html += '<span class="face"><img src="' + value.img +'" alt="' + value.name +'"></span>';
							html += '</a>';
							html += '</div>';
							html += '</div>';
							html += '<div class="item-info">';
							html += '<div class="info-inner">';
							html += '<div class="item-title"><a href="' + value.url +'">' + value.name +'</a></div>';
							html += '</div>';
							html += '<div class="actions">';
							html += '<a href="' + value.url +'" onclick="yaCounter47514331.reachGoal(\'DETAIL_TEMPLATE\'); return true;" class="button btn-cart download"><span>Подробнее</span></a>';
							html += '</div>';
							html += '</div>';
							html += '</div>';
							html += '</div>';
							html += '</div>';
							html += '</li>';
							$('.pfblock ul.products-grid').append(html);
						});
						start = ret.next;
						wowm = new WOW({
							boxClass: wowc,
							mobile: false,
							live: true
						});
						wowm.init();
						progress = 0;
					}
				}
			});
    }
	});
});
</script>
<?php } ?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter47514331 = new Ya.Metrika2({
	                    id:47514331,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/tag.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks2");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/47514331" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<?php
if(isset($dbh)) $dbh = null;
?>
</body>
</html>