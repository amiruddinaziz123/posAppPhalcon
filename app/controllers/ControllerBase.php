<?php
use Phalcon\Assets\Filters\Cssmin;
use Phalcon\Mvc\Controller;
use \Phalcon\Logger;
use \Phalcon\Mvc\View;
use \Phalcon\Assets\Filters\Jsmin;

class ControllerBase extends Controller
{
    public $jData;
    protected $logdev, $logerr;

    public function onConstruct() {
      $this->assets
          ->useImplicitOutput(false)
          ->collection('global.js')
          ->setTargetPath('assets/js/global.js')
          ->setTargetUri('assets/js/global.js')
          // ->addJs('js/moment.js', true, true)
          ->addJs('js/lodash.js', true, false)
          ->addJs('js/axios.js', true, false)
          ->addJs('js/vue.js', true, true)
          ->addJs('js/zicare.js', true, false) //jangan lupa urutan: lodash, axios, vue, zicare
          ->addJs('js/bootstrap.js', true, false)
          ->addFilter(new Jsmin());

      $this->assets
          ->useImplicitOutput(false)
          ->collection('global.css')
          ->setTargetPath('assets/css/global.css')
          ->setTargetUri('assets/css/global.css')
          ->addCss('css/bootstrap.css', true)
          // ->addCss('css/zicare.css', true)
          ->addFilter(new Cssmin());
  }

    public function initialize() {
        $this->logdev = new \Phalcon\Logger\Adapter\File(BASE_PATH . '/log/dev.log');
        $this->logerr = new \Phalcon\Logger\Adapter\File(BASE_PATH . '/log/dev.error.log');
        if ($this->request->isAjax()) {
            $this->jData = get_object_vars($this->request->getJsonRawBody());
            $ctype = strtolower($this->request->getHeader('CONTENT_TYPE'));
            if (in_array($ctype, ['application/json;charset=utf-8', 'application/json'])) {
              if ($this->jData['view'] == 'LEVEL_AFTER_TEMPLATE') {
                $this->view->setRenderLevel(View::LEVEL_AFTER_TEMPLATE);
                $this->view->dts = date("Y-m-d H:i:s");
              } elseif ($this->dispatcher->getActionName() == "index" || $this->jData['view'] == 'LEVEL_ACTION_VIEW') {
                $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
                $this->view->dts = date("Y-m-d H:i:s");
              } else {
                $this->view->setRenderLevel(View::LEVEL_NO_RENDER);
              }
            } else {
              if ($this->dispatcher->getActionName() == "index" && $this->jData['view'] == 'LEVEL_AFTER_TEMPLATE') {
                $this->view->setRenderLevel(View::LEVEL_AFTER_TEMPLATE);
                $this->view->dts = date("Y-m-d H:i:s");
              } else {
                $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
                $this->view->dts = date("Y-m-d H:i:s");
              }
            }
          } else {
            $this->view->dts = date("Y-m-d H:i:s");
          }
    }


    public function logDev($data)
    {
        $this->logdev->log(json_encode($data));
    }
}
