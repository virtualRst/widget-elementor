<?php
/**
 * Elementor newplugin Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class newplugin_widgetclass extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve newplugin widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'newplugin';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve newplugin widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'newplugin', 'newplugin' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve newplugin widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-headphones';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the newplugin widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'wp-rishabh' ];
	}

	/**
	 * Register newplugin widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'newplugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'btn_icon',
			[
				'label' => __( 'Button Icon', 'newplugin' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default'=>[
					'value'=>'eicon-menu-bar',
					'library'=>'solid',	
				],
				'placeholder' => __( 'Type your title here', 'newplugin' ),
			]
		);
		$this->add_control(
			'btn_icon_clicked',
			[
				'label' => __( 'Button Icon (Clicked)', 'newplugin' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default'=>[
					'value'=>'eicon-menu-bar',
					'library'=>'solid',	
				],
				'placeholder' => __( 'Type your title here', 'newplugin' ),
			]
		);
		$repeater=new \Elementor\Repeater();
		$repeater->add_control(
			'card_title',
			[
				'label' => __( 'Title', 'newplugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'default'=>__('John Doe','newplugin'),
				'placeholder' => __( 'Type your title here', 'newplugin' ),
			]
		);
		$repeater->add_control(
			'card_subtitle',
			[
				'label' => __( 'SubTitle', 'newplugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text',
				'default'=>__('The Deer Hunter','newplugin'),
				'placeholder' => __( 'Type your subtitle here', 'newplugin' ),
			]
		);
		
		$repeater->add_control(
			'card_color',
			[
				'label' => __( 'Background Color', 'newplugin' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'Red',
				'options' => [
					'Red'  => __( 'Red', 'newplugin' ),
					'Pink' => __( 'Pink', 'newplugin' ),
					'Purple' => __( 'Purple', 'newplugin' ),
					'Deep-Purple' => __( 'Deep-Purple', 'newplugin' ),
					'Indigo' => __( 'Indigo', 'newplugin' ),
                    'Blue'  => __( 'Blue', 'newplugin' ),
					'Light-Blue' => __( 'Light-Blue', 'newplugin' ),
					'Cyan' => __( 'Cyan', 'newplugin' ),
					'Teal' => __( 'Teal', 'newplugin' ),
					'Green' => __( 'Green', 'newplugin' ),
                    'Light-Green'  => __( 'Light-Green', 'newplugin' ),
					'Lime' => __( 'Lime', 'newplugin' ),
					'Yellow' => __( 'Yellow', 'newplugin' ),
					'Amber' => __( 'Amber', 'newplugin' ),
					'Orange' => __( 'Orange', 'newplugin' ),
                    'Deep-Orange' => __( 'Deep-Orange', 'newplugin' ),
					'Brown' => __( 'Brown', 'newplugin' ),
					'Grey' => __( 'Grey', 'newplugin' ),
					'Blue-Grey' => __( 'Blue-Grey', 'newplugin' ),
				],
			]
		);
		$repeater->add_control(
			'card_desc',
			[
				'label' => __( 'Description', 'newplugin' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'input_type' => 'text',
				'default'=>__('The textarea description','newplugin'),
				'placeholder' => __( 'Type your Description here', 'newplugin' ),
			]
		);
		$repeater->add_control(
			'link_facebook',
			[
				'label' => __( 'Facebook', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://facebook.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://facebook.com',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
        $repeater->add_control(
			'link_twitter',
			[
				'label' => __( 'Twitter', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://twitter.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://twitter.com',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
        $repeater->add_control(
			'link_linkedin',
			[
				'label' => __( 'LinkedIn', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://linkedin.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://linkedin.com',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
        $repeater->add_control(
			'link_instagram',
			[
				'label' => __( 'Instagram', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://instagram.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => 'https://instagram.com',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
		$repeater->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'material-card',
			[
				'label' => __( 'Cards List', 'newplugin' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'card_title' => __( 'Material Card', 'newplugin' ),
						'card_subtitle' => __( 'Card Subtitle', 'newplugin' ),
						'card_desc'=>__('Default Card description','newplugin')
					],
				],
				'title_field' => '{{{ card_title }}}',
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'typography_section',
			[
				'label' => __( 'Typography Controls', 'newplugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typo',
				'label' => __( 'Title', 'newplugin' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .material-card h2 .main-title',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typo',
				'label' => __( 'Sub-Title', 'newplugin' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_2,
				'selector' => '{{WRAPPER}} .material-card h2 .sub-title',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typo',
				'label' => __( 'Description', 'newplugin' ),
				'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_2,
				'selector' => '{{WRAPPER}} .material-card .mc-description',
			]
		);
		$this->end_controls_section();

	}

	/**
	 * Render newplugin widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();

		if ( $settings['material-card'] ) {
			echo '<div class="row active-with-click">';
			foreach (  $settings['material-card'] as $item ) { ?>
<div class="col-md-4 col-sm-6 col-xs-12">
    <article class="material-card <?php _e($item['card_color'],'newplugin'); ?>">
        <h2>
            <span class="main-title"><?php echo $item['card_title'] ?></span>
            <span class="sub-title">
                <?php echo $item['card_subtitle'] ?>
            </span>
        </h2>
        <div class="mc-content">
            <div class="img-container">
                <img class="img-responsive"
                    src="<?php echo __($item['image']['url'],'newplugin'); ?>">
            </div>
            <div class="mc-description">
                <?php _e($item['card_desc'],'newplugin');?>

            </div>
        </div>
        <a class="mc-btn-action">
            <i class="eicon-menu-bar"></i>
        </a>
        <div class="mc-footer">
            <h4>
                Social
            </h4>
            <?php
            $target_fb = $item['link_facebook']['is_external'] ? ' target="_blank"' : '';
            $target_tw = $item['link_twitter']['is_external'] ? ' target="_blank"' : '';
            $target_in = $item['link_linkedin']['is_external'] ? ' target="_blank"' : '';
            $target_insta = $item['link_instagram']['is_external'] ? ' target="_blank"' : '';
            $nofollow_fb = $item['link_facebook']['nofollow'] ? ' rel="nofollow"' : '';
            $nofollow_tw = $item['link_twitter']['nofollow'] ? ' rel="nofollow"' : '';
            $nofollow_in = $item['link_linkedin']['nofollow'] ? ' rel="nofollow"' : '';
            $nofollow_insta = $item['link_instagram']['nofollow'] ? ' rel="nofollow"' : '';
                                ?>
            <a href="<?php echo $item['link_facebook']['url'] ?>" class="wpacmc-social-icon text-center"
                <?php echo $target_fb . $nofollow_fb ?>>
                <i class="fa fa-facebook"></i>
            </a>
            <a href="<?php echo $item['link_twitter']['url'] ?>" class="wpacmc-social-icon text-center"
                <?php echo $target_tw . $nofollow_tw ?>>
                <i class="fa fa-twitter"></i>
            </a>
            <a href="<?php echo $item['link_linkedin']['url'] ?>" class="wpacmc-social-icon text-center"
                <?php echo $target_in . $nofollow_in ?>>
                <i class="fa fa-linkedin"></i>
            </a>
            <a href="<?php echo $item['link_instagram']['url'] ?>" class="wpacmc-social-icon text-center"
                <?php echo $target_insta . $nofollow_insta ?>>
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </article>
</div>

<?php
			}
			echo '</div>';
		}

		// $html = wp_newplugin_get( $settings['url'] );

		// echo '<div class="newplugin-elementor-widget">';

		// echo ( $html ) ? $html : $settings['url'];

		// echo '</div>';
		?>

<script>
jQuery(function() {
    jQuery('.material-card').materialCard({
        icon_close: '<?php echo $settings['btn_icon_clicked']['value'] ?>',
        icon_open: '<?php echo $settings['btn_icon']['value'] ?>',
        icon_spin: 'fa-spin-fast',
        card_activator: 'click'
    });

    //        $('.active-with-click .material-card').materialCard();

    window.setTimeout(function() {
        jQuery('.material-card:eq(1)').materialCard('open');
    }, 2000);

    jQuery('.material-card').on(
        'shown.material-card show.material-card hide.material-card hidden.material-card',
        function(event) {
            console.log(event.type, event.namespace, jQuery(this));
        });

});
</script>
<?php


	}

}