<?php
?>
    <div class="wrap">
        <h1>Free Shipping Animation Options</h1>
        <form method="post" action="options.php">
            <h5>Defina os valores para frete grátis de cada região.</h5>
            <?php settings_fields('free_shipping_animation_opcoes'); ?>
            <?php do_settings_sections('free_shipping_animation_opcoes'); ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <div style="margin: 3% 1%">
        <img src="<?=FSA_URL . 'assets/imgs/logo-flow-oficial-white-80px.png'?>" style="width: 200px">
        </br>
        <span>Desenvolvido por <a href='https://goflow.digital/'>Flow Digital</a></span>.
    </div>
    <?php
    
    function free_shipping_animation_frete_norte_cb() {
        $value = get_option('free_shipping_animation_frete_norte');
        echo '<input type="number" name="free_shipping_animation_frete_norte" value="' . esc_attr($value) . '">';
    }
    
    function free_shipping_animation_frete_nordeste_cb() {
        $value = get_option('free_shipping_animation_frete_nordeste');
        echo '<input type="number" name="free_shipping_animation_frete_nordeste" value="' . esc_attr($value) . '">';
    }
    
    function free_shipping_animation_frete_sul_cb() {
        $value = get_option('free_shipping_animation_frete_sul');
        echo '<input type="number" name="free_shipping_animation_frete_sul" value="' . esc_attr($value) . '">';
    }
    
    function free_shipping_animation_frete_sudeste_cb() {
        $value = get_option('free_shipping_animation_frete_sudeste');
        echo '<input type="number" name="free_shipping_animation_frete_sudeste" value="' . esc_attr($value) . '">';
    }
    
    function free_shipping_animation_frete_centro_oeste_cb() {
        $value = get_option('free_shipping_animation_frete_centro_oeste');
        echo '<input type="number" name="free_shipping_animation_frete_centro_oeste" value="' . esc_attr($value) . '">';
    }
