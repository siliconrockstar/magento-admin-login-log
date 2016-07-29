<?php

class Siliconrockstar_Adminloginlog_Block_Adminhtml_Adminloginlog_Aftergrid extends Mage_Adminhtml_Block_Template {

    public $loginUrl;
    
    public function __construct() {
        
        $this->loginUrl = Mage::helper("adminhtml")->getUrl();
        
        parent::__construct();
    }
    
    public function _toHtml() {
        
        $this->setTemplate('siliconrockstar/adminloginlog/aftergrid.phtml');
        
        return parent::_toHtml();
        
    }

}
