<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductRelationWidget\Plugin\CartPage;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CartPage\Dependency\Plugin\ProductRelationWidget\UpSellingProductsWidgetPluginInterface;
use SprykerShop\Yves\ProductRelationWidget\Widget\UpSellingProductsWidget;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductRelationWidget\Widget\UpSellingProductsWidget} instead.
 *
 * @method \SprykerShop\Yves\ProductRelationWidget\ProductRelationWidgetFactory getFactory()
 */
class UpSellingProductsWidgetPlugin extends AbstractWidgetPlugin implements UpSellingProductsWidgetPluginInterface
{
    public function initialize(QuoteTransfer $quoteTransfer): void
    {
        $widget = new UpSellingProductsWidget($quoteTransfer);

        $this->parameters = $widget->getParameters();

        $this->addWidgets($this->getFactory()->getCartPageUpSellingProductsWidgetPlugins());
    }

    public static function getName(): string
    {
        return static::NAME;
    }

    public static function getTemplate(): string
    {
        return UpSellingProductsWidget::getTemplate();
    }
}
