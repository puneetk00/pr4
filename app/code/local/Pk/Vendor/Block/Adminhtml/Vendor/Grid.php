<?php

class Pk_Vendor_Block_Adminhtml_Vendor_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("vendorGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("vendor/vendor")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("vendor")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("pincode", array(
				"header" => Mage::helper("vendor")->__("Pincode"),
				"index" => "pincode",
				));
				$this->addColumn("address", array(
				"header" => Mage::helper("vendor")->__("Address"),
				"index" => "address",
				));
				$this->addColumn("city", array(
				"header" => Mage::helper("vendor")->__("City"),
				"index" => "city",
				));
				$this->addColumn("state", array(
				"header" => Mage::helper("vendor")->__("State"),
				"index" => "state",
				));
				$this->addColumn("company_name", array(
				"header" => Mage::helper("vendor")->__("Company Name"),
				"index" => "company_name",
				));
				$this->addColumn("gst_no", array(
				"header" => Mage::helper("vendor")->__("GST no."),
				"index" => "gst_no",
				));
				$this->addColumn("tan_no", array(
				"header" => Mage::helper("vendor")->__("TAN no."),
				"index" => "tan_no",
				));
				$this->addColumn("tin_no", array(
				"header" => Mage::helper("vendor")->__("TIN no"),
				"index" => "tin_no",
				));
				$this->addColumn("digital_signature", array(
				"header" => Mage::helper("vendor")->__("Digital Signature"),
				"index" => "digital_signature",
				));
				$this->addColumn("address", array(
				"header" => Mage::helper("vendor")->__("Address"),
				"index" => "address",
				));
				$this->addColumn("pincode", array(
				"header" => Mage::helper("vendor")->__("Pincode"),
				"index" => "pincode",
				));
				$this->addColumn("city_state", array(
				"header" => Mage::helper("vendor")->__("City State"),
				"index" => "city_state",
				));
				$this->addColumn("state_state", array(
				"header" => Mage::helper("vendor")->__("State State"),
				"index" => "state_state",
				));
				$this->addColumn("account_holder_name", array(
				"header" => Mage::helper("vendor")->__("Account Holder Name"),
				"index" => "account_holder_name",
				));
				$this->addColumn("account_number", array(
				"header" => Mage::helper("vendor")->__("Account Number"),
				"index" => "account_number",
				));
				$this->addColumn("retype_account_number", array(
				"header" => Mage::helper("vendor")->__("Retype Account Number"),
				"index" => "retype_account_number",
				));
				$this->addColumn("ifsc_code", array(
				"header" => Mage::helper("vendor")->__("IFSC Code"),
				"index" => "ifsc_code",
				));
				$this->addColumn("bank_name", array(
				"header" => Mage::helper("vendor")->__("Bank Name."),
				"index" => "bank_name",
				));
				$this->addColumn("business_type", array(
				"header" => Mage::helper("vendor")->__("Business type"),
				"index" => "business_type",
				));
				$this->addColumn("persnal_pan", array(
				"header" => Mage::helper("vendor")->__("Persnal Pan."),
				"index" => "persnal_pan",
				));
				$this->addColumn("address_proof", array(
				"header" => Mage::helper("vendor")->__("Address proof"),
				"index" => "address_proof",
				));
				$this->addColumn("canceled_cheque", array(
				"header" => Mage::helper("vendor")->__("Canceled Cheque."),
				"index" => "canceled_cheque",
				));
				$this->addColumn("business_pan", array(
				"header" => Mage::helper("vendor")->__("Business Pan"),
				"index" => "business_pan",
				));
				$this->addColumn("display_name", array(
				"header" => Mage::helper("vendor")->__("Display Name"),
				"index" => "display_name",
				));
				$this->addColumn("business_description", array(
				"header" => Mage::helper("vendor")->__("Business Description"),
				"index" => "business_description",
				));
				$this->addColumn("create_date", array(
				"header" => Mage::helper("vendor")->__("Create at"),
				"index" => "create_date",
				));
				$this->addColumn("aprove_date", array(
				"header" => Mage::helper("vendor")->__("Approve at"),
				"index" => "aprove_date",
				));
				$this->addColumn("update_date", array(
				"header" => Mage::helper("vendor")->__("Update at"),
				"index" => "update_date",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_vendor', array(
					 'label'=> Mage::helper('vendor')->__('Remove Vendor'),
					 'url'  => $this->getUrl('*/adminhtml_vendor/massRemove'),
					 'confirm' => Mage::helper('vendor')->__('Are you sure?')
				));
			return $this;
		}
			

}