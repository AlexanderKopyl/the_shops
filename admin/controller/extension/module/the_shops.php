<?php


class ControllerExtensionModuleTheShops extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('extension/module/the_shops');
        $this->load->model('extension/module/the_shops');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_extension_module_the_shops->editShops($this->request->post);
            $this->model_setting_setting->editSetting('module_the_shops', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/the_shops', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/module/the_shops', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['module_the_shops_status'])) {
            $data['module_the_shops_status'] = $this->request->post['module_the_shops_status'];
        } else {
            $data['module_the_shops_status'] = $this->config->get('module_the_shops_status');
        }

        if (isset($this->request->post['module_the_shops_api'])) {
            $data['module_the_shops_api'] = $this->request->post['module_the_shops_api'];
        } else {
            $data['module_the_shops_api'] = $this->config->get('module_the_shops_api');
        }

        if (isset($this->request->post['module_the_shops_title'])) {
            $data['module_the_shops_title'] = $this->request->post['module_the_shops_title'];
        } else {
            $data['module_the_shops_title'] = $this->config->get('module_the_shops_title');
        }
        $data['shops'] = array();
        if (isset($this->request->post['shop'])) {
            $data['shops'] = $this->request->post['shop'];
        } else {
            $data['shops'] = $this->model_extension_module_the_shops->getShops();
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/the_shops', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/the_shops')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
