<?php

use Faker\Factory as Faker;
use App\Models\Backend\ProductPricing;
use App\Repositories\Backend\ProductPricingRepository;

trait MakeProductPricingTrait
{
    /**
     * Create fake instance of ProductPricing and save it in database
     *
     * @param array $productPricingFields
     * @return ProductPricing
     */
    public function makeProductPricing($productPricingFields = [])
    {
        /** @var ProductPricingRepository $productPricingRepo */
        $productPricingRepo = App::make(ProductPricingRepository::class);
        $theme = $this->fakeProductPricingData($productPricingFields);
        return $productPricingRepo->create($theme);
    }

    /**
     * Get fake instance of ProductPricing
     *
     * @param array $productPricingFields
     * @return ProductPricing
     */
    public function fakeProductPricing($productPricingFields = [])
    {
        return new ProductPricing($this->fakeProductPricingData($productPricingFields));
    }

    /**
     * Get fake data of ProductPricing
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProductPricingData($productPricingFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'product_id' => $fake->randomDigitNotNull,
            'buying_price' => $fake->randomDigitNotNull,
            'selling_price' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $productPricingFields);
    }
}
