<?php
/**
 * Custom Product Sliders
 * Featured products
 *
 * @category Bigdrop
 * @package  Bigdrop_ProductSlider
 * @author   Pavel Panchyshnyy <pavel.p@bigdropinc.com>
 * @license  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Bigdrop_ProductSlider_Block_Catalog extends Bigdrop_ProductSlider_Block_Slider_Abstract
{
   
   protected $_code = 'category';
  
    /**
     * Preparing Featured products collection
     *
     * @param $collection
     */
    protected function _applyFilterToCollection($collection)
    {
		
		$ids = Mage::getModel('catalog/category')
                    ->load($this->getCategory())
                    ->getProductCollection()->getAllIds();
        $collection->addAttributeToFilter('entity_id', array('in' => $ids));
    }
	
	public function getSliderTitle()
    {
		if (!$this->getTitle()) {
            return $this->__('Product Slider');
        }
		
        return $this->getTitle();
    }
}