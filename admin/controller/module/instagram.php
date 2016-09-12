<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
class ControllerModuleInstagram extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('module/instagram');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_extension_module->addModule('instagram', $this->request->post);
			} else {
				$this->model_extension_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_name'] = $this->language->get('entry_name');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_user_id'] = $this->language->get('entry_user_id');
		$data['entry_access_token'] = $this->language->get('entry_access_token');
		$data['entry_item'] = $this->language->get('entry_item');
		$data['entry_dimension'] = $this->language->get('entry_dimension');
		$data['entry_autoplay'] = $this->language->get('entry_autoplay');
		$data['entry_navigation'] = $this->language->get('entry_navigation');
		$data['entry_pagination'] = $this->language->get('entry_pagination');
		$data['entry_rewindnav'] = $this->language->get('entry_rewindnav');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

				
		if (isset($this->error['user_id'])) {
			$data['error_user_id'] = $this->error['user_id'];
		} else {
			$data['error_user_id'] = '';
		}
		
		if (isset($this->error['access_token'])) {
			$data['error_access_token'] = $this->error['access_token'];
		} else {
			$data['error_access_token'] = '';
		}
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL')
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('module/instagram', 'token=' . $this->session->data['token'], 'SSL')
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('module/instagram', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], 'SSL')
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('module/instagram', 'token=' . $this->session->data['token'], 'SSL');
		} else {
			$data['action'] = $this->url->link('module/instagram', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], 'SSL');
		}

		$data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_extension_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}
		
		if (isset($this->request->post['user_id'])) {
			$data['user_id'] = $this->request->post['user_id'];
		} elseif (!empty($module_info)) {
			$data['user_id'] = $module_info['user_id'];
		} else {
			$data['user_id'] = '';
		}
		
		if (isset($this->request->post['access_token'])) {
			$data['access_token'] = $this->request->post['access_token'];
		} elseif (!empty($module_info)) {
			$data['access_token'] = $module_info['access_token'];
		} else {
			$data['access_token'] = '';
		}
	
		
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}
		
		if (isset($this->request->post['item'])) {
			$data['item'] = $this->request->post['item'];
		} elseif (!empty($module_info)) {
			$data['item'] = $module_info['item'];
		} else {
			$data['item'] = '5';
		}
		
		if (isset($this->request->post['autoplay'])) {
			$data['autoplay'] = $this->request->post['autoplay'];
		} elseif (!empty($module_info)) {
			$data['autoplay'] = $module_info['autoplay'];
		} else {
			$data['autoplay'] = 'false';
		}
		
		if (isset($this->request->post['navigation'])) {
			$data['navigation'] = $this->request->post['navigation'];
		} elseif (!empty($module_info)) {
			$data['navigation'] = $module_info['navigation'];
		} else {
			$data['navigation'] = 'true';
		}
		
				
		if (isset($this->request->post['pagination'])) {
			$data['pagination'] = $this->request->post['pagination'];
		} elseif (!empty($module_info)) {
			$data['pagination'] = $module_info['pagination'];
		} else {
			$data['pagination'] = 'false';
		}
		
		if (isset($this->request->post['rewindnav'])) {
			$data['rewindnav'] = $this->request->post['rewindnav'];
		} elseif (!empty($module_info)) {
			$data['rewindnav'] = $module_info['rewindnav'];
		} else {
			$data['rewindnav'] = 'false';
		}
		
		if (isset($this->request->post['dimension'])) {
			$data['dimension'] = $this->request->post['dimension'];
		} elseif (!empty($module_info)) {
			$data['dimension'] = $module_info['dimension'];
		} else {
			$data['dimension'] = '200x200';
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('module/instagram.tpl', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/instagram')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		
		
		if (!$this->request->post['user_id']) {
			$this->error['user_id'] = $this->language->get('error_user_id');
		}
		
		if (!$this->request->post['access_token']) {
			$this->error['access_token'] = $this->language->get('error_access_token');
		}



		return !$this->error;
	}
}
