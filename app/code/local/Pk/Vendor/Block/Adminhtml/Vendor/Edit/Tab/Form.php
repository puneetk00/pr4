<?php
class Pk_Vendor_Block_Adminhtml_Vendor_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("vendor_form", array("legend"=>Mage::helper("vendor")->__("Item information")));

				
						$fieldset->addField("pincode", "text", array(
						"label" => Mage::helper("vendor")->__("Pincode"),
						"name" => "pincode",
						));
					
						$fieldset->addField("address", "text", array(
						"label" => Mage::helper("vendor")->__("Address"),
						"name" => "address",
						));
					
						$fieldset->addField("city", "text", array(
						"label" => Mage::helper("vendor")->__("City"),
						"name" => "city",
						));
					
						$fieldset->addField("state", "text", array(
						"label" => Mage::helper("vendor")->__("State"),
						"name" => "state",
						));
					
						$fieldset->addField("company_name", "text", array(
						"label" => Mage::helper("vendor")->__("Company Name"),
						"name" => "company_name",
						));
					
						$fieldset->addField("gst_no", "text", array(
						"label" => Mage::helper("vendor")->__("GST no."),
						"name" => "gst_no",
						));
					
						$fieldset->addField("tan_no", "text", array(
						"label" => Mage::helper("vendor")->__("TAN no."),
						"name" => "tan_no",
						));
					
						$fieldset->addField("tin_no", "text", array(
						"label" => Mage::helper("vendor")->__("TIN no"),
						"name" => "tin_no",
						));
					
						$fieldset->addField("digital_signature", "text", array(
						"label" => Mage::helper("vendor")->__("Digital Signature"),
						"name" => "digital_signature",
						));
					
						$fieldset->addField("address", "text", array(
						"label" => Mage::helper("vendor")->__("Address"),
						"name" => "address",
						));
					
						$fieldset->addField("pincode", "text", array(
						"label" => Mage::helper("vendor")->__("Pincode"),
						"name" => "pincode",
						));
					
						$fieldset->addField("city_state", "text", array(
						"label" => Mage::helper("vendor")->__("City State"),
						"name" => "city_state",
						));
					
						$fieldset->addField("state_state", "text", array(
						"label" => Mage::helper("vendor")->__("State State"),
						"name" => "state_state",
						));
					
						$fieldset->addField("account_holder_name", "text", array(
						"label" => Mage::helper("vendor")->__("Account Holder Name"),
						"name" => "account_holder_name",
						));
					
						$fieldset->addField("account_number", "text", array(
						"label" => Mage::helper("vendor")->__("Account Number"),
						"name" => "account_number",
						));
					
						$fieldset->addField("retype_account_number", "text", array(
						"label" => Mage::helper("vendor")->__("Retype Account Number"),
						"name" => "retype_account_number",
						));
					
						$fieldset->addField("ifsc_code", "text", array(
						"label" => Mage::helper("vendor")->__("IFSC Code"),
						"name" => "ifsc_code",
						));
					
						$fieldset->addField("bank_name", "text", array(
						"label" => Mage::helper("vendor")->__("Bank Name."),
						"name" => "bank_name",
						));
					
						$fieldset->addField("business_type", "text", array(
						"label" => Mage::helper("vendor")->__("Business type"),
						"name" => "business_type",
						));
					
						$fieldset->addField("persnal_pan", "text", array(
						"label" => Mage::helper("vendor")->__("Persnal Pan."),
						"name" => "persnal_pan",
						));
					
						$fieldset->addField("address_proof", "text", array(
						"label" => Mage::helper("vendor")->__("Address proof"),
						"name" => "address_proof",
						));
					
						$fieldset->addField("canceled_cheque", "text", array(
						"label" => Mage::helper("vendor")->__("Canceled Cheque."),
						"name" => "canceled_cheque",
						));
					
						$fieldset->addField("business_pan", "text", array(
						"label" => Mage::helper("vendor")->__("Business Pan"),
						"name" => "business_pan",
						));
					
						$fieldset->addField("display_name", "text", array(
						"label" => Mage::helper("vendor")->__("Display Name"),
						"name" => "display_name",
						));
					
						$fieldset->addField("business_description", "text", array(
						"label" => Mage::helper("vendor")->__("Business Description"),
						"name" => "business_description",
						));
					
						$fieldset->addField("create_date", "text", array(
						"label" => Mage::helper("vendor")->__("Create at"),
						"name" => "create_date",
						));
					
						$fieldset->addField("aprove_date", "text", array(
						"label" => Mage::helper("vendor")->__("Approve at"),
						"name" => "aprove_date",
						));
					
						$fieldset->addField("update_date", "text", array(
						"label" => Mage::helper("vendor")->__("Update at"),
						"name" => "update_date",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getVendorData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getVendorData());
					Mage::getSingleton("adminhtml/session")->setVendorData(null);
				} 
				elseif(Mage::registry("vendor_data")) {
				    $form->setValues(Mage::registry("vendor_data")->getData());
				}
				return parent::_prepareForm();
		}
}
