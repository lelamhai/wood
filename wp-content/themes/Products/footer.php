
	<!-- <div class="support-customer">
		 <img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_support.png" alt="" class="img-circle" width="135px">
		<div class="wrap-circle"></div> -->

		<!-- <div class="wrap-support">
			<ul>
				<li><a href=""><img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_phone.png" alt=""></a></li>
				<li><a href=""><img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_phone.png" alt=""></a></li>
				<li><a href=""><img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_phone.png" alt=""></a></li>
			</ul>
		</div>
	</div> -->


		<div id="centre">
			<div class="middle circle">
				<img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_support.png" alt="" class="img-circle" width="120px" height="120px">
			</div>
			<div class="outer circle at-8-oclock">
				<a href="tel:0708220000">
					<img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_phone.png" alt="" width="40" height="40">
				</a>
			</div>
			<div class="outer circle at-10-oclock">
				<img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_messengerfb.png" alt=""width="40" height="40">
			</div>
			<div class="outer circle at-12-oclock" data-toggle="modal" data-target="#exampleModal">
				<img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_gmail.png" alt="" width="40" height="40">
			</div>
		</div>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101598075049397"
  logged_in_greeting="Chào bạn!"
  logged_out_greeting="Chào bạn!">
      </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  	<h5 class="modal-title" id="exampleModalLabel">Tư Vấn Khách Hàng</h5>

      	</div>
      		<div class="modal-body">
	  			<div class="wrap-form">
                    <?php echo do_shortcode( '[contact-form-7 id="64" title="Liên Hệ"]' ); ?>
                </div>
      		</div>
    	</div>
  </div>
</div>


</div>
	<footer>
		<div class="wrap-footer">
			<div class="row">

				<div class="col-md-5 col-sm-5 col-xs-12 col-footer">

					<div class="wrap-info">
						<h3>CÔNG TY TNHH NỘI THẤT HD</h3>

						<div class="hr-footer"></div>

						<P class="hotline">HOTLINE: 0708220000</P>
						<P class="address">ĐỊA CHỈ: 86 CHU VĂN AN - P.26 - Q.BÌNH THẠNH - TP.HCM</P>
					</div>

				</div>

				<div class="col-md-1 col-sm-1"></div>

				<div class="col-md-6 col-sm-6 col-xs-12 col-footer">
					<div class="wrao-googleMap">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.008500458135!2d106.70740961533426!3d10.810660361515689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752897d84afee7%3A0x8379470bd61ad378!2zODYgQ2h1IFbEg24gQW4sIFBoxrDhu51uZyAyNiwgQsOsbmggVGjhuqFuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1598722145188!5m2!1sen!2s"
						width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
						tabindex="0"></iframe>
					</div>
				</div>
			</div>

		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo("template_directory"); ?>/assets/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/main.js"></script>

	<script>
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		centerMode: true,
		focusOnSelect: true
		});
	</script>


	<script>
		$(document).ready(function(){
			$('.slider').on('afterChange', function(event, slick, currentSlide){
				var id = currentSlide + 1;
				var elements = document.querySelectorAll('.description-short');
				for (var i = 0; i < elements.length; i++) {
					elements[i].classList.remove('active-description');
				}

				var element = document.getElementById("id-" + id);
  				element.classList.add("active-description");
			});
		});

	</script>


	<script type="text/javascript">
		var page = 3;
		jQuery(function($) {
			$('body').on('click', '#more', function() {
				var category = document.getElementById('category').innerHTML;
				var data = {
				'action': 'load_posts_by_ajax',
				'page': page,
				'category' : category,
				'security': '<?php echo wp_create_nonce("load_more_posts_policy"); ?>'
				};

				$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
					page++;
					var $res = JSON.parse(response);
					$('#row-more').append($res.datas);
					if($res.status==2){
						$(".wrap-more").css("display", "none");
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		var page = 3;
		jQuery(function($) {
			$('body').on('click', '#search-more', function() {
				var keyword = document.getElementById('category').innerHTML;
				var data = {
				'action': 'search_load_posts_by_ajax',
				'page': page,
				'search' : keyword,
				'security': '<?php echo wp_create_nonce("search_load_more_posts_policy"); ?>'
				};

				$.post("<?php echo admin_url( 'admin-ajax.php' ); ?>", data, function(response) {
					page++;
					var $res = JSON.parse(response);
					$('#row-more').append($res.datas);
					if($res.status==2){
						$(".wrap-more").css("display", "none");
					}
				});
			});
		});
	</script>

    <script>
        $( "#middle" ).click(function() {
          console.log("click");
        });
    </script>
	<?php wp_footer(); ?>
</body>
</html>
