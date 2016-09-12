<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
class ControllerModuleInstagram extends Controller {
	public function index($setting) {
		static $module = 0;
		$this->load->language('module/instagram');
		$data['heading_title'] = $this->language->get('heading_title');
		$this->load->model('tool/image');

		$this->document->addStyle('catalog/view/javascript/jquery/owl-carousel/owl.carousel.css');
		$this->document->addScript('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js');

		$data['images'] = array();
		$user_id=$setting['user_id'];
		$access_token=$setting['access_token'];
		$url = "https://api.instagram.com/v1/users/".$user_id."/media/recent?access_token=".$access_token;
		$ch = curl_init($url);
		
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		if(curl_exec($ch) === false)
		{
			$data['error'] = 'Invalid credentials !';
		}
		$json = curl_exec($ch); 
		curl_close($ch);
		$result = json_decode($json);
		//var_dump($result);
		
		$width_height='s'.$setting['dimension'];
		$width='';
		switch($setting['dimension'])
		{
			case '50x50': $width=50; break;
			case '100x100': $width=100; break;
			case '150x150': $width=150; break;
			case '200x200': $width=200; break;
			case '350x350': $width=350; break;
			case '640x640': $width=640; break;
			case '1080x1080': $width=1080; break;
			
		}

	if (count($result) > 0) {
		foreach ($result->data as $post) {
			$data['images'][] = array(
					'title' => ($post->caption)? (($post->caption->text) ? $post->caption->text :'') : '',
					'link'  => $post->link,
					'image' => str_replace('s320x320',$width_height,$post->images->low_resolution->url)
				);
		}
	}
		$data['item'] = $setting['item'];
		$data['width'] = $width;
		$data['autoplay'] = $setting['autoplay'];
		$data['navigation'] = $setting['navigation'];
		$data['pagination'] = $setting['pagination'];
		$data['rewindnav'] = $setting['rewindnav'];

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/instagram.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/instagram.tpl', $data);
		} else {
			return $this->load->view('default/template/module/instagram.tpl', $data);
		}
	}
}
