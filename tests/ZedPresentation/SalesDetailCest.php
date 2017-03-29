<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace ZedPresentation;

use Sales\PageObject\SalesDetailPage;
use Sales\PageObject\SalesListPage;
use Sales\ZedPresentationTester;

/**
 * Auto-generated group annotations
 * @group Sales
 * @group ZedPresentation
 * @group SalesDetailCest
 * Add your own group annotations below this line
 */
class SalesDetailCest
{

    /**
     * @param \Sales\ZedPresentationTester $i
     * @param \Sales\PageObject\SalesListPage $salesListPage
     *
     * @return void
     */
    public function testThatOrderDetailPageIsVisibleWhenOrderExists(ZedPresentationTester $i, SalesListPage $salesListPage)
    {
        $i->createOrderWithOneItem();

        $idSalesOrder = $salesListPage->grabLatestOrderId();

        $i->amOnPage(SalesDetailPage::getOrderDetailsPageUrl($idSalesOrder));

        $i->waitForElement('#items', 3);
        $i->seeElement(['xpath' => SalesDetailPage::getSalesOrderItemRowSelector(1)]);
    }

}
