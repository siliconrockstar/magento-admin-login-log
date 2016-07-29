<?php

class Siliconrockstar_Adminloginlog_Adminhtml_AdminloginlogController extends Mage_Adminhtml_Controller_Action {

    public function indexAction() {

        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('siliconrockstar_adminloginlog/adminhtml_adminloginlog'));

        // add bit of info after the grid
        /*
          $afterGrid = $this->getLayout()->createBlock('core/text', 'aftergrid')
          ->setText('this is some text');
          $this->_addContent($afterGrid);
         */
        $this->_addContent($this->getLayout()->createBlock('siliconrockstar_adminloginlog/adminhtml_adminloginlog_aftergrid'));

        $this->renderLayout();
    }

    public function gridAction() {

        $this->loadLayout();
        $this->getResponse()->setBody(
                $this->getLayout()->createBlock('siliconrockstar_adminloginlog/adminhtml_adminloginlog_grid')->toHtml()
        );
    }

    public function exportCsvAction() {
        $fileName = 'AdminLogins' . date('Y-m-d_H-i-s') . '.csv';
        $grid = $this->getLayout()->createBlock('siliconrockstar_adminloginlog/adminhtml_adminloginlog_grid');
        $this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
    }

}
