<?php

use \Phalcon\Assets\Filters\Jsmin;

class IndexController extends ControllerBase
{
    public function initialize()
   {
       parent::initialize(); // calling initialixe from ControllerBase
       $this->view->setTemplateAfter("common");
    $this->assets->useImplicitOutput(false)->collection('zivue_index')
       ->setTargetPath('assets/js/zivue_index.js')
       ->setTargetUri('assets/js/zivue_index.js')
    //    ->addJs('assets/js/component/list-pasien.vue.js')
    //    ->addJs('assets/js/component/register-pasien.vue.js')
    //    ->addJs('assets/js/component/detail-pasien.vue.js')
    ->join(true)
    ->addFilter(new Jsmin());
   }

    public function indexAction()
    {


    }

}

