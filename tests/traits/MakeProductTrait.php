<?php

use Faker\Factory as Faker;
use App\Models\Backend\Product;
use App\Repositories\Backend\ProductRepository;

trait MakeProductTrait
{
    /**
     * Create fake instance of Product and save it in database
     *
     * @param array $productFields
     * @return Product
     */
    public function makeProduct($productFields = [])
    {
        /** @var ProductRepository $productRepo */
        $productRepo = App::make(ProductRepository::class);
        $theme = $this->fakeProductData($productFields);
        return $productRepo->create($theme);
    }

    /**
     * Get fake instance of Product
     *
     * @param array $productFields
     * @return Product
     */
    public function fakeProduct($productFields = [])
    {
        return new Product($this->fakeProductData($productFields));
    }

    /**
     * Get fake data of Product
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProductData($productFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'code' => $fake->word,
            'barcode' => $fake->word,
            'barcode_path' => $fake->word,
            'thubmnail' => $fake->word,
            'category_id' => $fake->randomDigitNotNull,
            'subcategory_id' => $fake->randomDigitNotNull,
            'description' => $fake->text,
            'status' => $fake->word,
            'branch_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $productFields);
    }
}
