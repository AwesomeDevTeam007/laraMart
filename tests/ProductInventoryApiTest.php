<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductInventoryApiTest extends TestCase
{
    use MakeProductInventoryTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProductInventory()
    {
        $productInventory = $this->fakeProductInventoryData();
        $this->json('POST', '/api/v1/productInventories', $productInventory);

        $this->assertApiResponse($productInventory);
    }

    /**
     * @test
     */
    public function testReadProductInventory()
    {
        $productInventory = $this->makeProductInventory();
        $this->json('GET', '/api/v1/productInventories/'.$productInventory->id);

        $this->assertApiResponse($productInventory->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProductInventory()
    {
        $productInventory = $this->makeProductInventory();
        $editedProductInventory = $this->fakeProductInventoryData();

        $this->json('PUT', '/api/v1/productInventories/'.$productInventory->id, $editedProductInventory);

        $this->assertApiResponse($editedProductInventory);
    }

    /**
     * @test
     */
    public function testDeleteProductInventory()
    {
        $productInventory = $this->makeProductInventory();
        $this->json('DELETE', '/api/v1/productInventories/'.$productInventory->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/productInventories/'.$productInventory->id);

        $this->assertResponseStatus(404);
    }
}
