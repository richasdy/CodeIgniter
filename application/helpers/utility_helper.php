<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('asset_url()')) {
	function asset_url() {
		return base_url().'assets/';
	}
}

