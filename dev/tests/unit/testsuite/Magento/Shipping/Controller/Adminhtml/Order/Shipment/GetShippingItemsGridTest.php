<?php
/**
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
namespace Magento\Shipping\Controller\Adminhtml\Order\Shipment;

/**
 * Class GetShippingItemsGridTest
 */
class GetShippingItemsGridTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Shipping\Controller\Adminhtml\Order\ShipmentLoader|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $shipmentLoaderMock;

    /**
     * @var \Magento\Framework\App\Request\Http|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $requestMock;

    /**
     * @var \Magento\Framework\App\Response\Http|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $responseMock;

    /**
     * @var \Magento\Backend\Model\View|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $viewMock;

    /**
     * @var \Magento\Shipping\Controller\Adminhtml\Order\Shipment\GetShippingItemsGrid
     */
    protected $controller;

    protected function setUp()
    {
        $this->requestMock = $this->getMock(
            'Magento\Framework\App\Request\Http',
            ['getParam'],
            [],
            '',
            false
        );
        $this->shipmentLoaderMock = $this->getMock(
            'Magento\Shipping\Controller\Adminhtml\Order\ShipmentLoader',
            ['setOrderId', 'setShipmentId', 'setShipment', 'setTracking', 'load'],
            [],
            '',
            false
        );
        $this->viewMock = $this->getMock(
            'Magento\Backend\Model\View',
            ['getLayout', 'renderLayout'],
            [],
            '',
            false
        );
        $this->responseMock = $this->getMock(
            'Magento\Framework\App\Response\Http',
            ['setBody'],
            [],
            '',
            false
        );

        $contextMock = $this->getMock(
            'Magento\Backend\App\Action\Context',
            ['getRequest', 'getResponse', 'getView'],
            [],
            '',
            false
        );

        $contextMock->expects($this->any())->method('getRequest')->will($this->returnValue($this->requestMock));
        $contextMock->expects($this->any())->method('getResponse')->will($this->returnValue($this->responseMock));
        $contextMock->expects($this->any())->method('getView')->will($this->returnValue($this->viewMock));

        $this->controller = new \Magento\Shipping\Controller\Adminhtml\Order\Shipment\GetShippingItemsGrid(
            $contextMock,
            $this->shipmentLoaderMock
        );
    }

    /**
     * Run test execute method
     */
    public function testExecute()
    {
        $orderId = 1;
        $shipmentId = 1;
        $shipment = [];
        $tracking = [];
        $result = 'result-html';

        $layoutMock = $this->getMock(
            'Magento\Framework\View\Layout',
            ['createBlock'],
            [],
            '',
            false
        );
        $gridMock = $this->getMock(
            'Magento\Shipping\Block\Adminhtml\Order\Packaging\Grid',
            ['setIndex', 'toHtml'],
            [],
            '',
            false
        );

        $this->requestMock->expects($this->at(0))
            ->method('getParam')
            ->with('order_id')
            ->will($this->returnValue($orderId));
        $this->requestMock->expects($this->at(1))
            ->method('getParam')
            ->with('shipment_id')
            ->will($this->returnValue($shipmentId));
        $this->requestMock->expects($this->at(2))
            ->method('getParam')
            ->with('shipment')
            ->will($this->returnValue($shipment));
        $this->requestMock->expects($this->at(3))
            ->method('getParam')
            ->with('tracking')
            ->will($this->returnValue($tracking));
        $this->shipmentLoaderMock->expects($this->once())->method('setOrderId')->with($orderId);
        $this->shipmentLoaderMock->expects($this->once())->method('setShipmentId')->with($shipmentId);
        $this->shipmentLoaderMock->expects($this->once())->method('setShipment')->with($shipment);
        $this->shipmentLoaderMock->expects($this->once())->method('setTracking')->with($tracking);
        $this->shipmentLoaderMock->expects($this->once())->method('load');
        $layoutMock->expects($this->once())
            ->method('createBlock')
            ->with('Magento\Shipping\Block\Adminhtml\Order\Packaging\Grid')
            ->will($this->returnValue($gridMock));
        $this->viewMock->expects($this->once())
            ->method('getLayout')
            ->will($this->returnValue($layoutMock));
        $this->responseMock->expects($this->once())
            ->method('setBody')
            ->with($result)
            ->will($this->returnSelf());
        $this->requestMock->expects($this->at(4))
            ->method('getParam')
            ->with('index');
        $gridMock->expects($this->once())
            ->method('setIndex')
            ->will($this->returnSelf());
        $gridMock->expects($this->once())
            ->method('toHtml')
            ->will($this->returnValue($result));

        $this->assertNotEmpty('result-html', $this->controller->execute());
    }
}
