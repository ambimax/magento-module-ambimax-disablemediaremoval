<?php

class Ambimax_DisableMediaRemoval_Model_Resource_Product_Attribute_Backend_Media
    extends Mage_Catalog_Model_Resource_Product_Attribute_Backend_Media
{
    /**
     * Remove duplicates
     *
     * @param array $result
     * @return Mage_Catalog_Model_Resource_Product_Attribute_Backend_Media|$this
     */
    protected function _removeDuplicates(&$result)
    {
        if (Mage::getStoreConfigFlag('catalog/frontend/disable_media_removal')) {
            return $this;
        }

        return parent::_removeDuplicates($result);
    }

}