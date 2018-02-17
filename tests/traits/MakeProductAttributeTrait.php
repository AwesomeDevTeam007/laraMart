<?php

use Faker\Factory as Faker;
use App\Models\Backend\ProductAttribute;
use App\Repositories\Backend\ProductAttributeRepository;

trait MakeProductAttributeTrait
{
    /**
     * Create fake instance of ProductAttribute and save it in database
     *
     * @param array $productAttributeFields
     * @return ProductAttribute
     */
    public function makeProductAttribute($productAttributeFields = [])
    {
        /** @var ProductAttributeRepository $productAttributeRepo */
        $productAttributeRepo = App::make(ProductAttributeRepository::class);
        $theme = $this->fakeProductAttributeData($productAttributeFields);
        return $productAttributeRepo->create($theme);
    }

    /**
     * Get fake instance of ProductAttribute
     *
     * @param array $productAttributeFields
     * @return ProductAttribute
     */
    public function fakeProductAttribute($productAttributeFields = [])
    {
        return new ProductAttribute($this->fakeProductAttributeData($productAttributeFields));
    }

    /**
     * Get fake data of ProductAttribute
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProductAttributeData($productAttributeFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'product_id' => $fake->randomDigitNotNull,
            'key' => $fake->word,
            'value' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $productAttributeFields);
    }
}
