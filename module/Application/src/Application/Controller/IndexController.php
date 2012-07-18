<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use SmappDoctrine\Service\SmappDoctrineFactory;


class IndexController extends AbstractActionController
{
    protected $em;
    
    public function indexAction()
    {   
        //$em = $this->getServiceLocator()->get('SmappDoctrine');
        //$con = $em->getConnection();
        //$this->getEm();
        //\Zend\Debug::dump($this->em);
        return new ViewModel();
    }
    
    public function getEm()
    {
        return $this->em = $this->getServiceLocator()->get('SmappDoctrine');
    }
}
