<?php

/**
 * Copyright © 2022 All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace PixieMedia\InvalidCustomerAddressId\Plugin\Frontend\Magento\Quote\Model;

use Magento\Quote\Api\Data\AddressInterface;
use Magento\Quote\Api\Data\CartInterface;

class QuoteAddressValidator
{
    /**
     * @param \Magento\Quote\Model\QuoteAddressValidator $subject
     * @param cartInterface $cart
     * @param \Magento\Quote\Api\Data\AddressInterface $address
     * @return void
     */
    public function beforeValidateForCart(
        \Magento\Quote\Model\QuoteAddressValidator $subject,
        cartInterface $cart,
        AddressInterface $address
    ): void {
        if ($cart->getCustomer()->getId()) {
            $cart->setCustomerIsGuest(0);
        }
    }
}
