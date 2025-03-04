<?php

declare(strict_types=1);

namespace UnionPay\Api\Provider;

use UnionPay\Api\Core\Container;
use UnionPay\Api\Functions\Public\OrderDetail;
use UnionPay\Api\Functions\Public\OrderRefund;
use UnionPay\Api\Interfaces\Provider;

/**
 * Class UnionPayProvider
 * @package UnionPay\Api\Provider
 */
class SearchProvider implements Provider
{
    /**
     * 服务提供者
     * @param Container $container
     */
    public function serviceProvider(Container $container): void
    {
        $container['search'] = function ($container) {
            return new OrderDetail($container, '/query');
        };
        $container['refund_search'] = function ($container) {
            return new OrderDetail($container, '/refund-query');
        };
        $container['refund'] = function ($container) {
            return new OrderRefund($container, '/refund');
        };
    }
}
