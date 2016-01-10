<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Sebastian Gierth <sebastian.gierth@xima.de>, XIMA MEDIA GmbH
 *            Wolfram Eberius <edrush@posteo.de>, StudioBellaFuente
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class SBF\SbfAjaxsolr\Controller\DefaultController.
 *
 * @author Sebastian Gierth <sebastian.gierth@xima.de>
 * @author Wolfram Eberius <edrush@posteo.de>
 */

namespace {

    if (class_exists('Tx_Extbase_Tests_Unit_BaseTestCase')) {
        class Tx_Sbf_ajaxsolr_Controller_DefaultControllerTest extends Tx_Extbase_Tests_Unit_BaseTestCase
        {
            /**
             * @var Tx_SbfAjaxsolr_Domain_Model_Default
             */
            protected $fixture;

            public function setUp()
            {
                $this->fixture = new Tx_SbfAjaxsolr_Domain_Model_Default();
            }

            public function tearDown()
            {
                unset($this->fixture);
            }

            /**
             * @test
             */
            public function dummyMethod()
            {
                $this->markTestIncomplete();
            }

        }
    }
}

namespace SBF\SbfAjaxsolr\Tests\Unit\Controller {

    if (class_exists('\TYPO3\CMS\Core\Tests\UnitTestCase')) {

        class DefaultControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
        {

            /**
             * @var \SBF\SbfAjaxsolr\Controller\DefaultController
             */
            protected $subject = NULL;

            public function setUp()
            {
                $this->subject = $this->getMock('SBF\\SbfAjaxsolr\\Controller\\DefaultController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
            }

            public function tearDown()
            {
                unset($this->subject);
            }

            /**
             * @test
             */
            public function listActionFetchesAllDefaultsFromRepositoryAndAssignsThemToView()
            {

                $allDefaults = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

                $defaultRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
                $defaultRepository->expects($this->once())->method('findAll')->will($this->returnValue($allDefaults));
                $this->inject($this->subject, 'defaultRepository', $defaultRepository);

                $view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
                $view->expects($this->once())->method('assign')->with('defaults', $allDefaults);
                $this->inject($this->subject, 'view', $view);

                $this->subject->listAction();
            }
        }
    }
}