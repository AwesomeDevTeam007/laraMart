<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductAttributeApiTest extends TestCase
{
    use MakeProductAttributeTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProductAttribute()
    {
        $productAttribute = $this->fakeProductAttributeData();
        $this->json('POST', '/api/v1/productAttributes', $productAttribute);

        $this->assertApiResponse($productAttribute);
    }

    /**
     * @test
     */
    public function testReadProductAttribute()
    {
        $productAttribute = $this->makeProductAttribute();
        $this->json('GET', '/api/v1/productAttributes/'.$productAttribute->id);

        $this->assertApiResponse($productAttribute->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProductAttribute()
    {
        $productAttribute = $this->makeProductAttribute();
        $editedProductAttribute = $this->fakeProductAttributeData();

        $this->json('PUT', '/api/v1/productAttributes/'.$productAttribute->id, $editedProductAttribute);

        $this->assertApiResponse($editedProductAttribute);
    }

    /**
     * @test
     */
    public function testDeleteProductAttribute()
    {
        $productAttribute = $this->makeProductAttribute();
        $this->json('DELETE', '/api/v1/productAttributes/'.$productAttribute->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/productAttributes/'.$productAttribute->id);

        $this->assertResponseStatus(404);
    }
}
