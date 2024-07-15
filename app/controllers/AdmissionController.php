<?php
use \Phalcon\Assets\Filters\Jsmin;
use Phalcon\Http\Request;
use Phalcon\Http\Response;

class AdmissionController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize(); // calling initialixe from ControllerBase
        $this->view->setTemplateAfter("common");
        $this->assets->useImplicitOutput(false)->collection('zivue_admission')
        ->setTargetPath('assets/js/zivue_admission.js')
        ->setTargetUri('assets/js/zivue_admission.js')
        //    ->addJs('assets/js/component/list-pasien.vue.js')
        //    ->addJs('assets/js/component/register-pasien.vue.js')
        //    ->addJs('assets/js/component/detail-pasien.vue.js')
        ->join(true)
        ->addFilter(new Jsmin());
    }
    
    public function indexAction()
    {

    }
    public function getListAction(){
        $this->view->disable();
        $request = new Request();
        $response = new Response();

        $response->setHeader("Access-Control-Allow-Origin", "*");
        if ($request->isGet()) {
            $returnData = [
                "code" => "200",
                "response" => "success",
                "message" => "OK",
            ];
            $admissions = Admission::find();
            $response->setStatusCode(200, 'OK');
            $response->setJsonContent(["status" => $returnData, "results" => $admissions]);
        } else {
            $response->setStatusCode(405, 'Method Not Allowed');
            $response->setJsonContent(["status" => false, "error" => 'Method Not Allowed']);
        }

        $response->send();
    }
}

