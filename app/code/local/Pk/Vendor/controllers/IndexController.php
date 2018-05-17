<?php
class Pk_Vendor_IndexController extends Mage_Core_Controller_Front_Action{
    
	public function IndexAction() {
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Vendor Registration"));
	  $this->renderLayout();   
    }
	
	public function SaveAction() {
      $post_data=$this->getRequest()->getPost();
	  $this->loadLayout();   
	  $this->renderLayout(); 
	  $jsonData = array();
	  print_r($_FILES); die;
	  if ($post_data) {

			try {
				$model = Mage::getModel("vendor/vendor")
				->addData($post_data)
				->setId($this->getRequest()->getParam("id"))
				->save();

				$jsonData['satatus'] = Mage::helper("adminhtml")->__("Vendor was successfully saved");
			
			} 
			catch (Exception $e) {
				$jsonData['satatus'] = "failed" . $e->getMessage();
				
			}

		}
		
	  $this->getResponse()->setHeader('Content-type', 'application/json');
	  $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($jsonData));
	  
    }
}