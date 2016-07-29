
<?php
 
class Siliconrockstar_Adminloginlog_Block_Adminhtml_Adminloginlog extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'siliconrockstar_adminloginlog';
        $this->_controller = 'adminhtml_adminloginlog';
        $this->_headerText = 'Admin Login Log';
 
        parent::__construct();
        $this->_removeButton('add');
    }
}