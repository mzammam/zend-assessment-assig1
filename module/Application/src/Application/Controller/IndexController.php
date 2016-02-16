<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Hybrid\Providers\Twitter;

use Application\Model;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        /*$config  = array( 
           "base_url"=> "http://localhost/ScnSocialAuth-Sandbox/public/scn-social-auth/hauth", 
		   "debug_mode"=> false, 
		   "debug_file"=>  "/tmp/hybridauth.log" ,
		   "providers"=> array( 
								"Twitter"=> array(
								"enabled"=> true, 
								"keys"=> array(
								"key"=> "2ltJrST8lYSZ6PrDupKh0gqBd" ,
								"secret"=> "h9EPuJrXmOoNzWIaF3hGrMBw6YosLFJu5YwYhPFhhmOq6L4BHs" ) ) 
							 ) );
        $provider =  "twitter";
            
           
        $params = array(
            "hauth_return_to" => "/ScnSocialAuth-Sandbox/public/user/authenticate/twitter",
            
        
            
        );
        
        $hybridauth =  new \Hybrid_Auth($config);
        $twitter = $hybridauth->authenticate( $provider,$params );
        $twitter->setUserStatus( array(
            "message"=>"blalaal",
            //"picture"=>"http://twilogin.gear.host/cat.jpg",
            "picture"=>"http://localhost/ScnSocialAuth-Sandbox/data/tmpuploads/MVC.png",
            
        ) );*/
        return new ViewModel();
        
    }
    
    public function uploadAction()
    {
        $sm = $this->getServiceLocator();
        $auth = $sm->get('zfcuserauthservice');
        $loggedin = false;
        if ($auth->hasIdentity()) {
            $loggedin  = true;
            $upload = $this->forward()->dispatch('file-upload-examples', array('action' => 'single'));
           return $upload;
            
            
            return new ViewModel(
                array(
           // 'loggedin' => $loggedin,
            'upload'=>$upload
        ));
            //do upload
        }
        else {
           
            $notauthenticated  = true;
           
            return new ViewModel(
                array(
                    'notauthenticated' => $notauthenticated,
                    'url' => 5
                ));
            //redirect tp login
            //return $this->redirect()->toRoute('zfcuser/login');
        }
        
        
        
        /*$zfcUserLogin = $this->forward()->dispatch('zfcuser', array('action' => 'login'));
        
        $upload = $this->forward()->dispatch('file-upload-examples', array('action' => 'single'));
        
        if (!$zfcUserLogin instanceof ModelInterface) {
           
            return $upload;
        }
        return new ViewModel();*/
    
    }
    public function posttotwitterAction()
    {
          
          return new ViewModel(
             array(
            'formData' => 'kk',
        ));
    }
}
