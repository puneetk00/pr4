<?php

class Apptha_Gethelook_Adminhtml_GethelookController extends Mage_Adminhtml_Controller_Action
{
		protected function _isAllowed()
		{
		//return Mage::getSingleton('admin/session')->isAllowed('gethelook/gethelook');
			return true;
		}

		protected function _initAction()
		{
				$this->loadLayout()->_setActiveMenu("gethelook/gethelook")->_addBreadcrumb(Mage::helper("adminhtml")->__("Gethelook  Manager"),Mage::helper("adminhtml")->__("Gethelook Manager"));
				return $this;
		}
		public function indexAction() 
		{
			    $this->_title($this->__("Gethelook"));
			    $this->_title($this->__("Manager Gethelook"));

				$this->_initAction();
				$this->renderLayout();
		}
		public function editAction()
		{			    
			    $this->_title($this->__("Gethelook"));
				$this->_title($this->__("Gethelook"));
			    $this->_title($this->__("Edit Item"));
				
				$id = $this->getRequest()->getParam("id");
				$model = Mage::getModel("gethelook/gethelook")->load($id);
				if ($model->getId()) {
					Mage::register("gethelook_data", $model);
					$this->loadLayout();
					$this->_setActiveMenu("gethelook/gethelook");
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Gethelook Manager"), Mage::helper("adminhtml")->__("Gethelook Manager"));
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Gethelook Description"), Mage::helper("adminhtml")->__("Gethelook Description"));
					$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);
					$this->_addContent($this->getLayout()->createBlock("gethelook/adminhtml_gethelook_edit"))->_addLeft($this->getLayout()->createBlock("gethelook/adminhtml_gethelook_edit_tabs"));
					$this->renderLayout();
				} 
				else {
					Mage::getSingleton("adminhtml/session")->addError(Mage::helper("gethelook")->__("Item does not exist."));
					$this->_redirect("*/*/");
				}
		}

		public function newAction()
		{

		$this->_title($this->__("Gethelook"));
		$this->_title($this->__("Gethelook"));
		$this->_title($this->__("New Item"));

        $id   = $this->getRequest()->getParam("id");
		$model  = Mage::getModel("gethelook/gethelook")->load($id);

		$data = Mage::getSingleton("adminhtml/session")->getFormData(true);
		if (!empty($data)) {
			$model->setData($data);
		}

		Mage::register("gethelook_data", $model);

		$this->loadLayout();
		$this->_setActiveMenu("gethelook/gethelook");

		$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);

		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Gethelook Manager"), Mage::helper("adminhtml")->__("Gethelook Manager"));
		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Gethelook Description"), Mage::helper("adminhtml")->__("Gethelook Description"));


		$this->_addContent($this->getLayout()->createBlock("gethelook/adminhtml_gethelook_edit"))->_addLeft($this->getLayout()->createBlock("gethelook/adminhtml_gethelook_edit_tabs"));

		$this->renderLayout();

		}
		public function saveAction()
		{

$post_data=$this->getRequest()->getPost();
//echo "<pre>";
//print_r($post_data); die;

if ($post_data) {

	try {

						
				 //save image
		try{

			if((bool)$post_data['image1']['delete']==1) {

						$post_data['image1']='';

			}
			else {

				unset($post_data['image1']);

				if (isset($_FILES)){

					if ($_FILES['image1']['name']) {

						if($this->getRequest()->getParam("id")){
							$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
							if($model->getData('image1')){
									$io = new Varien_Io_File();
									$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image1'))));	
							}
						}
									$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
									$uploader = new Varien_File_Uploader('image1');
									$uploader->setAllowedExtensions(array('jpg','png','gif'));
									$uploader->setAllowRenameFiles(false);
									$uploader->setFilesDispersion(false);
									$destFile = $path.$_FILES['image1']['name'];
									$filename = $uploader->getNewFileName($destFile);
									$uploader->save($path, $filename);

									$post_data['image1']='gethelook/gethelook/'.$filename;
					}
				}
			}

        } catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
        }
//save image

				 //save image
		try{

			if((bool)$post_data['image2']['delete']==1) {

						$post_data['image2']='';

			}
			else {

				unset($post_data['image2']);

				if (isset($_FILES)){

					if ($_FILES['image2']['name']) {

						if($this->getRequest()->getParam("id")){
							$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
							if($model->getData('image2')){
									$io = new Varien_Io_File();
									$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image2'))));	
							}
						}
									$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
									$uploader = new Varien_File_Uploader('image2');
									$uploader->setAllowedExtensions(array('jpg','png','gif'));
									$uploader->setAllowRenameFiles(false);
									$uploader->setFilesDispersion(false);
									$destFile = $path.$_FILES['image2']['name'];
									$filename = $uploader->getNewFileName($destFile);
									$uploader->save($path, $filename);

									$post_data['image2']='gethelook/gethelook/'.$filename;
					}
				}
			}

        } catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
        }
//save image

				 //save image
		try{

			if((bool)$post_data['image3']['delete']==1) {

						$post_data['image3']='';

			}
			else {

				unset($post_data['image3']);

				if (isset($_FILES)){

					if ($_FILES['image3']['name']) {

						if($this->getRequest()->getParam("id")){
							$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
							if($model->getData('image3')){
									$io = new Varien_Io_File();
									$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image3'))));	
							}
						}
									$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
									$uploader = new Varien_File_Uploader('image3');
									$uploader->setAllowedExtensions(array('jpg','png','gif'));
									$uploader->setAllowRenameFiles(false);
									$uploader->setFilesDispersion(false);
									$destFile = $path.$_FILES['image3']['name'];
									$filename = $uploader->getNewFileName($destFile);
									$uploader->save($path, $filename);

									$post_data['image3']='gethelook/gethelook/'.$filename;
					}
				}
			}

        } catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
        }
//save image

				 //save image
		try{

				if((bool)$post_data['image4']['delete']==1) {

							$post_data['image4']='';

				}
				else {

					unset($post_data['image4']);

					if (isset($_FILES)){

						if ($_FILES['image4']['name']) {

							if($this->getRequest()->getParam("id")){
								$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
								if($model->getData('image4')){
										$io = new Varien_Io_File();
										$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image4'))));	
								}
							}
										$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
										$uploader = new Varien_File_Uploader('image4');
										$uploader->setAllowedExtensions(array('jpg','png','gif'));
										$uploader->setAllowRenameFiles(false);
										$uploader->setFilesDispersion(false);
										$destFile = $path.$_FILES['image4']['name'];
										$filename = $uploader->getNewFileName($destFile);
										$uploader->save($path, $filename);

										$post_data['image4']='gethelook/gethelook/'.$filename;
						}
					}
				}

        } catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
        }
//save image

				 //save image
		try{

			if((bool)$post_data['image5']['delete']==1) {

						$post_data['image5']='';

			}
			else {

			unset($post_data['image5']);

					if (isset($_FILES)){

						if ($_FILES['image5']['name']) {

							if($this->getRequest()->getParam("id")){
								$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
								if($model->getData('image5')){
										$io = new Varien_Io_File();
										$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image5'))));	
								}
							}
										$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
										$uploader = new Varien_File_Uploader('image5');
										$uploader->setAllowedExtensions(array('jpg','png','gif'));
										$uploader->setAllowRenameFiles(false);
										$uploader->setFilesDispersion(false);
										$destFile = $path.$_FILES['image5']['name'];
										$filename = $uploader->getNewFileName($destFile);
										$uploader->save($path, $filename);

										$post_data['image5']='gethelook/gethelook/'.$filename;
						}
					}
				}

        } catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
        }
//save image

				 //save image
		try{

if((bool)$post_data['image6']['delete']==1) {

	        $post_data['image6']='';

}
else {

	unset($post_data['image6']);

	if (isset($_FILES)){

		if ($_FILES['image6']['name']) {

			if($this->getRequest()->getParam("id")){
				$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
				if($model->getData('image6')){
						$io = new Varien_Io_File();
						$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image6'))));	
				}
			}
						$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
						$uploader = new Varien_File_Uploader('image6');
						$uploader->setAllowedExtensions(array('jpg','png','gif'));
						$uploader->setAllowRenameFiles(false);
						$uploader->setFilesDispersion(false);
						$destFile = $path.$_FILES['image6']['name'];
						$filename = $uploader->getNewFileName($destFile);
						$uploader->save($path, $filename);

						$post_data['image6']='gethelook/gethelook/'.$filename;
		}
    }
}

        } catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
        }
//save image


						$model = Mage::getModel("gethelook/gethelook")
						->addData($post_data)
						->setId($this->getRequest()->getParam("id"))
						->save();

						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Gethelook was successfully saved"));
						Mage::getSingleton("adminhtml/session")->setGethelookData(false);

						if ($this->getRequest()->getParam("back")) {
							$this->_redirect("*/*/edit", array("id" => $model->getId()));
							return;
						}
						$this->_redirect("*/*/");
						return;
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						Mage::getSingleton("adminhtml/session")->setGethelookData($this->getRequest()->getPost());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					return;
					}

				}
				$this->_redirect("*/*/");
		}



		public function deleteAction()
		{
				if( $this->getRequest()->getParam("id") > 0 ) {
					try {
						$model = Mage::getModel("gethelook/gethelook");
						$model->setId($this->getRequest()->getParam("id"))->delete();
						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Item was successfully deleted"));
						$this->_redirect("*/*/");
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					}
				}
				$this->_redirect("*/*/");
		}

		
		public function massRemoveAction()
		{
			try {
				$ids = $this->getRequest()->getPost('ids', array());
				foreach ($ids as $id) {
                      $model = Mage::getModel("gethelook/gethelook");
					  $model->setId($id)->delete();
				}
				Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Item(s) was successfully removed"));
			}
			catch (Exception $e) {
				Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
			}
			$this->_redirect('*/*/');
		}
			
		/**
		 * Export order grid to CSV format
		 */
		public function exportCsvAction()
		{
			$fileName   = 'gethelook.csv';
			$grid       = $this->getLayout()->createBlock('gethelook/adminhtml_gethelook_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
		} 
		/**
		 *  Export order grid to Excel XML format
		 */
		public function exportExcelAction()
		{
			$fileName   = 'gethelook.xml';
			$grid       = $this->getLayout()->createBlock('gethelook/adminhtml_gethelook_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
		}
}
