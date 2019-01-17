<?php
/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Sales\Business\StrategyResolver;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Zed\Sales\Business\Order\SalesOrderSaverInterface;

/**
 * @deprecated Remove strategy resolver after multiple shipment will be released.
 */
interface OrderSaverStrategyResolverInterface
{
    public const STRATEGY_KEY_WITHOUT_MULTI_SHIPMENT = 'STRATEGY_KEY_WITHOUT_MULTI_SHIPMENT';
    public const STRATEGY_KEY_WITH_MULTI_SHIPMENT = 'STRATEGY_KEY_WITH_MULTI_SHIPMENT';

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Spryker\Zed\Sales\Business\Order\SalesOrderSaverInterface
     */
    public function resolveByQuote(QuoteTransfer $quoteTransfer): SalesOrderSaverInterface;
}