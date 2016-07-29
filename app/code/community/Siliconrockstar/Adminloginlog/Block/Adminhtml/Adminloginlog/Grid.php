<?php

class Siliconrockstar_Adminloginlog_Block_Adminhtml_Adminloginlog_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct() {
        parent::__construct();
        $this->setId('siliconrockstar_adminloginlog_grid');
        $this->setDefaultSort('admin_login_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }

    protected function _prepareCollection() {
        $collection = Mage::getResourceModel('siliconrockstar_adminloginlog/log_collection');

        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }

    protected function _prepareColumns() {
        $helper = Mage::helper('siliconrockstar_adminloginlog');

        $this->addColumn('admin_login_id', array(
            'header' => $helper->__('Admin Login Id'),
            'index' => 'admin_login_id'
        ));

        $this->addColumn('admin_user_id', array(
            'header' => $helper->__('Admin User Id'),
            'index' => 'admin_user_id'
        ));

        $this->addColumn('username', array(
            'header' => $helper->__('Admin Username'),
            'type' => 'text',
            'index' => 'username',
        ));

        $this->addColumn('success', array(
            'header' => $helper->__('Success'),
            'index' => 'success',
            'type' => 'options',
            'options' => array('0' => 'No','1' => 'Yes')
        ));

        $this->addColumn('firstname', array(
            'header' => $helper->__('First Name'),
            'index' => 'firstname'
        ));

        $this->addColumn('lastname', array(
            'header' => $helper->__('Last Name'),
            'index' => 'lastname'
        ));

        $this->addColumn('email', array(
            'header' => $helper->__('Email'),
            'index' => 'email'
        ));

        $this->addColumn('remote_ip', array(
            'header' => $helper->__('Remote IP'),
            'index' => 'remote_ip',
        ));

        $this->addColumn('timestamp', array(
            'header' => $helper->__('Timestamp'),
            'type' => 'datetime',
            'index' => 'timestamp'
        ));

        // add export to CSV button
        $this->addExportType('*/*/exportCsv', $helper->__('CSV'));
        
        return parent::_prepareColumns();
    }

    public function getGridUrl() {
        return $this->getUrl('*/*/grid', array('_current' => true));
    }

}
