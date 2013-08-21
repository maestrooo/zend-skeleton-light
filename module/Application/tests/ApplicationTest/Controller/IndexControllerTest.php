<?php

namespace ApplicationTest\Controller;

use Application\Controller\IndexController;
use PHPUnit_Framework_TestCase;

class IndexControllerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var IndexController
     */
    protected $indexController;

    /**
     * Set up the test
     */
    public function setUp()
    {
        $this->indexController = new IndexController();
    }

    /**
     * @covers Application\Controller\IndexController::indexAction
     */
    public function testIndexActionReturnsViewModel()
    {
        $this->assertInstanceOf('Zend\View\Model\ViewModel', $this->indexController->indexAction());
    }
}
