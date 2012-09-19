<?php
class TDD_Debug_Bar_Post_Meta extends Debug_Bar_Panel {

	function init(){
		$this->title( __( 'Post Meta', 'debug-bar' ) );
	}

	public function prerender() {
		$this->set_visible( true );
	}

	public function render() {
		global $post;
		var_dump ( get_post_custom( $post->ID ) );
	}

}
