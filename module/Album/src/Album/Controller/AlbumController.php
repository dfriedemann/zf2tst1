<?php
namespace  Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\View;

class AlbumController extends AbstractActionController
{
	protected $albumTable;
	
	public function indexAction()
	{
		return new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));	
	}
	
	public function addAction()
	{
		
	}
	
	public function editAction()
	{
		
	}
	
	public function deleteAction()
	{
	
	}
	
	public function getAlbumTable()
	{
		if(!$this->albumTable) {
			$sm = $this->getServiceLocator();
			$this->albumTable = $sm->get('Album\model\AlbumTable');
		}
		return $this->albumTable;
	}
}
