<?php
declare(strict_types=1);

namespace Donin\OrderAttrs\Plugin\Checkout;


class SomeProcessor
{
    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    private $request;

    public function __construct(
        \Magento\Framework\App\RequestInterface $request
    )
    {
        $this->request = $request;
    }

    public function afterProcess(\Magento\Checkout\Block\Checkout\LayoutProcessor $processor, $jsLayout)
    {
        //зачем это?
        $customField = &$jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
        ['children']['shippingAddress']['children']['before-form']['children']['don_custom_text'];

        return $jsLayout;
    }
}
