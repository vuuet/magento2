<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Backend\Controller\Adminhtml\System;

/**
 * @magentoAppArea adminhtml
 */
class VariableTest extends \Magento\Backend\Utility\Controller
{
    /**
     * @covers \Magento\Backend\App\Action::_addLeft
     */
    public function testEditAction()
    {
        $this->dispatch('backend/admin/system_variable/edit');
        $body = $this->getResponse()->getBody();
        $this->assertContains('function toggleValueElement(element) {', $body);
    }
}