<?php

class Pk_Vendor_Adminhtml_VendorController extends Mage_Adminhtml_Controller_Action
{
		protected function _isAllowed()
		{
		//return Mage::getSingleton('admin/session')->isAllowed('vendor/vendor');
			return true;
		}

		protected function _initAction()
		{
				$this->loadLayout()->_setActiveMenu("vendor/vendor")->_addBreadcrumb(Mage::helper("adminhtml")->__("Vendor  Manager"),Mage::helper("adminhtml")->__("Vendor Manager"));
				return $this;
		}
		public function indexAction() 
		{
			    $this->_title($this->__("Vendor"));
			    $this->_title($this->__("Manager Vendor"));

				$this->_initAction();
				$this->renderLayout();
		}
		public function editAction()
		{			    
			    $this->_title($this->__("Vendor"));
				$this->_title($this->__("Vendor"));
			    $this->_title($this->__("Edit Item"));
				
				$id = $this->getRequest()->getParam("id");
				$model = Mage::getModel("vendor/vendor")->load($id);
				if ($model->getId()) {
					Mage::register("vendor_data", $model);
					$this->loadLayout();
					$this->_setActiveMenu("vendor/vendor");
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Vendor Manager"), Mage::helper("adminhtml")->__("Vendor Manager"));
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Vendor Description"), Mage::helper("adminhtml")->__("Vendor Description"));
					$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);
					$this->_addContent($this->getLayout()->createBlock("vendor/adminhtml_vendor_edit"))->_addLeft($this->getLayout()->createBlock("vendor/adminhtml_vendor_edit_tabs"));
					$this->renderLayout();
				} 
				else {
					Mage::getSingleton("adminhtml/session")->addError(Mage::helper("vendor")->__("Item does not exist."));
					$this->_redirect("*/*/");
				}
		}

		public function newAction()
		{

		$this->_title($this->__("Vendor"));
		$this->_title($this->__("Vendor"));
		$this->_title($this->__("New Item"));

        $id   = $this->getRequest()->getParam("id");
		$model  = Mage::getModel("vendor/vendor")->load($id);

		$data = Mage::getSingleton("adminhtml/session")->getFormData(true);
		if (!empty($data)) {
			$model->setData($data);
		}

		Mage::register("vendor_data", $model);

		$this->loadLayout();
		$this->_setActiveMenu("vendor/vendor");

		$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);

		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Vendor Manager"), Mage::helper("adminhtml")->__("Vendor Manager"));
		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Vendor Description"), Mage::helper("adminhtml")->__("Vendor Description"));


		$this->_addContent($this->getLayout()->createBlock("vendor/adminhtml_vendor_edit"))->_addLeft($this->getLayout()->createBlock("vendor/adminhtml_vendor_edit_tabs"));

		$this->renderLayout();

		}
		public function saveAction()
		{

			$post_data=$this->getRequest()->getPost();


				if ($post_data) {

					try {

						

						$model = Mage::getModel("vendor/vendor")
						->addData($post_data)
						->setId($this->getRequest()->getParam("id"))
						->save();

						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Vendor was successfully saved"));
						Mage::getSingleton("adminhtml/session")->setVendorData(false);

						if ($this->getRequest()->getParam("back")) {
							$this->_redirect("*/*/edit", array("id" => $model->getId()));
							return;
						}
						$this->_redirect("*/*/");
						return;
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						Mage::getSingleton("adminhtml/session")->setVendorData($this->getRequest()->getPost());
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
						$model = Mage::getModel("vendor/vendor");
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
                      $model = Mage::getModel("vendor/vendor");
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
			$fileName   = 'vendor.csv';
			$grid       = $this->getLayout()->createBlock('vendor/adminhtml_vendor_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
		} 
		/**
		 *  Export order grid to Excel XML format
		 */
		public function exportExcelAction()
		{
			$fileName   = 'vendor.xml';
			$grid       = $this->getLayout()->createBlock('vendor/adminhtml_vendor_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
		}
}
