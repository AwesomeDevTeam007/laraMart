<?php

use Faker\Factory as Faker;
use App\Models\Backend\ProductInventory;
use App\Repositories\Backend\ProductInventoryRepository;

trait MakeProductInventoryTrait
{
    /**
     * Create fake instance of ProductInventory and save it in database
     *
     * @param array $productInventoryFields
     * @return ProductInventory
     */
    public function makeProductInventory($productInventoryFields = [])
    {
        /** @var ProductInventoryRepository $productInventoryRepo */
        $productInventoryRepo = App::make(ProductInventoryRepository::class);
        $theme = $this->fakeProductInventoryData($productInventoryFields);
        return $productInventoryRepo->create($theme);
    }

    /**
     * Get fake instance of ProductInventory
     *
     * @param array $productInventoryFields
     * @return ProductInventory
     */
    public function fakeProductInventory($productInventoryFields = [])
    {
        return new ProductInventory($this->fakeProductInventoryData($productInventoryFields));
    }

    /**
     * Get fake data of ProductInventory
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProductInventoryData($productInventoryFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'product_id' => $fake->randomDigitNotNull,
            'instock_qty' => $fake->randomDigitNotNull,
            'notify_qty' => $fake->randomDigitNotNull,
            'branch_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $productInventoryFields);
    }
}
