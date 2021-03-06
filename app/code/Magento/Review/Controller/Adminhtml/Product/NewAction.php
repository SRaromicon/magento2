<?php
/**
 *
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Review\Controller\Adminhtml\Product;

class NewAction extends \Magento\Review\Controller\Adminhtml\Product
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->_title->add(__('Customer Reviews'));

        $this->_title->add(__('New Review'));

        $this->_view->loadLayout();
        $this->_setActiveMenu('Magento_Review::catalog_reviews_ratings_reviews_all');

        $this->_view->getLayout()->getBlock('head')->setCanLoadExtJs(true);

        $this->_addContent($this->_view->getLayout()->createBlock('Magento\Review\Block\Adminhtml\Add'));
        $this->_addContent($this->_view->getLayout()->createBlock('Magento\Review\Block\Adminhtml\Product\Grid'));

        $this->_view->renderLayout();
    }
}
