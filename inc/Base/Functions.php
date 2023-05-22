<?php

namespace Inc\Base;

class Functions{
    
    public function register(){
		add_action( 'woocommerce_before_cart_table', array($this, 'add_barra_calculo_frete' ));
		add_action('wp_enqueue_scripts', array($this, 'fsa_options_to_script'));
		add_action('wp_enqueue_scripts', array($this,'fsa_enqueue_styles'));
		add_action('admin_init', array($this, 'fsa_settings_init'));
		

		
    }


	/*
	** Adiciona e registra os settings do formulário do plugin
	*/
	function fsa_settings_init() {
		add_settings_section('free_shipping_animation_section', 'Free Shipping Animation Settings', '', 'free_shipping_animation_opcoes');
		
		add_settings_field('free_shipping_animation_frete_norte', 'Frete Norte', 'free_shipping_animation_frete_norte_cb', 'free_shipping_animation_opcoes', 'free_shipping_animation_section');
		add_settings_field('free_shipping_animation_frete_nordeste', 'Frete Nordeste', 'free_shipping_animation_frete_nordeste_cb', 'free_shipping_animation_opcoes', 'free_shipping_animation_section');
		add_settings_field('free_shipping_animation_frete_sul', 'Frete Sul', 'free_shipping_animation_frete_sul_cb', 'free_shipping_animation_opcoes', 'free_shipping_animation_section');
		add_settings_field('free_shipping_animation_frete_sudeste', 'Frete Sudeste', 'free_shipping_animation_frete_sudeste_cb', 'free_shipping_animation_opcoes', 'free_shipping_animation_section');
		add_settings_field('free_shipping_animation_frete_centro_oeste', 'Frete Centro-Oeste', 'free_shipping_animation_frete_centro_oeste_cb', 'free_shipping_animation_opcoes', 'free_shipping_animation_section');
	
		register_setting('free_shipping_animation_opcoes', 'free_shipping_animation_frete_norte');
		register_setting('free_shipping_animation_opcoes', 'free_shipping_animation_frete_nordeste');
		register_setting('free_shipping_animation_opcoes', 'free_shipping_animation_frete_sul');
		register_setting('free_shipping_animation_opcoes', 'free_shipping_animation_frete_sudeste');
		register_setting('free_shipping_animation_opcoes', 'free_shipping_animation_frete_centro_oeste');
	}

	/*
	** Adiciona barra no front-end do cart
	*/
	function add_barra_calculo_frete() {
		$shop_url = wc_get_page_permalink('shop');
		?>
		<div class="texto-barra-calculo">Faltam <span class="valor-restante-barra"></span> para ganhar o frete grátis</div>
		<div class="calculo-para-frete-gratis">
					<div class="barra-calculo">
						<div class="barra-loading"><svg fill="#268482" height="28px" width="28px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.1 491.1" xml:space="preserve" stroke="#268482" stroke-width="0.0049110000000000004"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(0 -540.36)"> <g> <g> <path d="M401.5,863.31c-12,0-23.4,4.7-32,13.2c-8.6,8.6-13.4,19.8-13.4,31.8s4.7,23.2,13.4,31.8c8.7,8.5,20,13.2,32,13.2 c24.6,0,44.6-20.2,44.6-45S426.1,863.31,401.5,863.31z M401.5,933.31c-13.8,0-25.4-11.4-25.4-25s11.6-25,25.4-25 c13.6,0,24.6,11.2,24.6,25S415.1,933.31,401.5,933.31z"></path> <path d="M413.1,713.41c-1.8-1.7-4.2-2.6-6.7-2.6h-51.3c-5.5,0-10,4.5-10,10v82c0,5.5,4.5,10,10,10h81.4c5.5,0,10-4.5,10-10v-54.9 c0-2.8-1.2-5.5-3.3-7.4L413.1,713.41z M426.5,792.81h-61.4v-62.1h37.4l24,21.6V792.81z"></path> <path d="M157.3,863.31c-12,0-23.4,4.7-32,13.2c-8.6,8.6-13.4,19.8-13.4,31.8s4.7,23.2,13.4,31.8c8.7,8.5,20,13.2,32,13.2 c24.6,0,44.6-20.2,44.6-45S181.9,863.31,157.3,863.31z M157.3,933.31c-13.8,0-25.4-11.4-25.4-25s11.6-25,25.4-25 c13.6,0,24.6,11.2,24.6,25S170.9,933.31,157.3,933.31z"></path> <path d="M90.6,875.61H70.5v-26.6c0-5.5-4.5-10-10-10s-10,4.5-10,10v36.6c0,5.5,4.5,10,10,10h30.1c5.5,0,10-4.5,10-10 S96.1,875.61,90.6,875.61z"></path> <path d="M141.3,821.11c0-5.5-4.5-10-10-10H10c-5.5,0-10,4.5-10,10s4.5,10,10,10h121.3C136.8,831.11,141.3,826.71,141.3,821.11z"></path> <path d="M30.3,785.01l121.3,0.7c5.5,0,10-4.4,10.1-9.9c0.1-5.6-4.4-10.1-9.9-10.1l-121.3-0.7c-0.1,0-0.1,0-0.1,0 c-5.5,0-10,4.4-10,9.9C20.3,780.51,24.8,785.01,30.3,785.01z"></path> <path d="M50.7,739.61H172c5.5,0,10-4.5,10-10s-4.5-10-10-10H50.7c-5.5,0-10,4.5-10,10S45.2,739.61,50.7,739.61z"></path> <path d="M487.4,726.11L487.4,726.11l-71.6-59.3c-1.8-1.5-4-2.3-6.4-2.3h-84.2v-36c0-5.5-4.5-10-10-10H60.5c-5.5,0-10,4.5-10,10 v73.2c0,5.5,4.5,10,10,10s10-4.5,10-10v-63.2h234.8v237.1h-82c-5.5,0-10,4.5-10,10s4.5,10,10,10h122.1c5.5,0,10-4.5,10-10 s-4.5-10-10-10h-20.1v-191.1h80.6l65.2,54l-0.7,136.9H460c-5.5,0-10,4.5-10,10s4.5,10,10,10h20.3c5.5,0,10-4.4,10-9.9l0.8-151.6 C491,730.91,489.7,728.01,487.4,726.11z"></path> </g> </g> </g> </g></svg></div>
					</div>
					<a href=" <?=$shop_url?> " class="botao-adiciona-mais">Adicione mais itens</a>
		</div>
		<?php
	}

	/*
	** Envia os valores definidos no formulário para o fsa-script.js e realiza o enqueue
	*/
	function fsa_options_to_script() {
		$frete_norte = get_option('free_shipping_animation_frete_norte');
		$frete_nordeste = get_option('free_shipping_animation_frete_nordeste');
		$frete_sul = get_option('free_shipping_animation_frete_sul');
		$frete_sudeste = get_option('free_shipping_animation_frete_sudeste');
		$frete_centro_oeste = get_option('free_shipping_animation_frete_centro_oeste');

		wp_enqueue_script('free-shipping-animation-script', plugins_url('../../assets/fsa-script.js', __FILE__), array('jquery'));
		wp_localize_script('free-shipping-animation-script', 'free_shipping_animation_data', array(
			'frete_norte' => $frete_norte,
			'frete_nordeste' => $frete_nordeste,
			'frete_sul' => $frete_sul,
			'frete_sudeste' => $frete_sudeste,
			'frete_centro_oeste' => $frete_centro_oeste
		));
	
	}

	/*
	** Enqueue fsa-style.css
	*/
	function fsa_enqueue_styles() {
		wp_enqueue_style('free-shipping-animation-style', plugins_url('../../assets/fsa-style.css', __FILE__));
	}
	
	
	




	


}