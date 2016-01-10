<?php

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Sebastian Gierth <sebastian.gierth@xima.de>, XIMA MEDIA GmbH
 *           Wolfram Eberius <edrush@posteo.de>, StudioBellaFuente
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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

namespace {

    if (class_exists('Tx_Extbase_MVC_Controller_ActionController')) {
        class Tx_SbfAjaxsolr_Controller_DefaultController extends Tx_Extbase_MVC_Controller_ActionController
        {
            /**
             * action searchBox
             *
             * @return void
             */
            public function searchBoxAction()
            {

            }

            /**
             * action resultList
             *
             * @return void
             */
            public function resultListAction()
            {

            }
        }
    }
}

namespace SBF\SbfAjaxsolr\Controller {

    if (class_exists('\TYPO3\CMS\Extbase\Mvc\Controller\ActionController')) {
        /**
         * DefaultController
         */
        class DefaultController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
        {
            /**
             * action searchBox
             *
             * @return void
             */
            public function searchBoxAction()
            {

            }

            /**
             * action resultList
             *
             * @return void
             */
            public function resultListAction()
            {

            }
        }
    }
}