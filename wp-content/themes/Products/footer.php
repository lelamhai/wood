<!-- Load Facebook SDK for JavaScript -->
     
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


<div class="modal fade" id="zaloexampleModal" tabindex="-1" role="dialog" aria-labelledby="zaloexampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  	<h5 class="modal-title" id="zaloexampleModalLabel">Quét Mã QR Code</h5>

      	</div>
      		<div class="modal-body" style="text-align: center">
	  			<img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/img_qrcode.jpeg" alt="">
      		</div>
    	</div>
  </div>
</div>


</div>
	<footer>
		<div class="wrap-footer">
			<div class="row">

				<div class="col-md-5 col-sm-6 col-xs-12 col-footer footer-content-left">

					<div class="wrap-info">
						<h1>NỘI THẤT HD</h1>
						<div class="footer-social">
							<div class="banner-facebook">
								<a href="https://www.facebook.com/N%E1%BB%99i-Th%E1%BA%A5t-HD-101598075049397" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_facebook.png" alt=""></a>
							</div>

							<div class="banner-youtube">
								<a href="https://www.youtube.com/channel/UCIv0ZK2rEl2zTJ0PMg6x-YA/?guided_help_flow=5" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_youtube.png" alt=""></a>
							</div>
									
							<div class="banner-zalo" data-toggle="modal" data-target="#zaloexampleModal">
								<a><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_zalo.png" alt=""></a>
							</div>
						</div>
						<div class="hr-footer"></div>
						<P class="hotline"><span>HOTLINE:</span> 0901573345 - 0931573345</P>
						<P class="gmail"><span>EMAIL:</span> noithatlkhd@gmail.com</P>
						<P class="address"><span>ĐỊA CHỈ:</span> 86 Chu Văn An - P.26 - TP.HCM</P>
					</div>

				</div>

				<div class="col-md-1">
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 col-footer footer-content-right">
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
	<script src="https://sp.zalo.me/plugins/sdk.js"></script>
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
	</div>
		<div class="support-customer">
		<div class="wrap-call">
			<a href="tel:0901573345">
                <img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_phone.png" alt="" width="60" height="60">
            </a>
		</div>
		<div class="wrap-mail" data-toggle="modal" data-target="#exampleModal">
			<img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_gmail.png" alt="" width="60" height="60">
		</div>
		<div class="wrap-message">
			<img src="<?php echo get_bloginfo("template_directory"); ?>/assets/img/common/icon_messengerfb.png" alt="" width="60" height="60">
		</div>
	</div> 
	<div id="fb-root"></div>
</body>
</html>