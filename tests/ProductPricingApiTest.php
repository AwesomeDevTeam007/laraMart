<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductPricingApiTest extends TestCase
{
    use MakeProductPricingTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProductPricing()
    {
        $productPricing = $this->fakeProductPricingData();
        $this->json('POST', '/api/v1/productPricings', $productPricing);

        $this->assertApiResponse($productPricing);
    }

    /**
     * @test
     */
    public function testReadProductPricing()
    {
        $productPricing = $this->makeProductPricing();
        $this->json('GET', '/api/v1/productPricings/'.$productPricing->id);

        $this->assertApiResponse($productPricing->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProductPricing()
    {
        $productPricing = $this->makeProductPricing();
        $editedProductPricing = $this->fakeProductPricingData();

        $this->json('PUT', '/api/v1/productPricings/'.$productPricing->id, $editedProductPricing);

        $this->assertApiResponse($editedProductPricing);
    }

    /**
     * @test
     */
    public function testDeleteProductPricing()
    {
        $productPricing = $this->makeProductPricing();
        $this->json('DELETE', '/api/v1/productPricings/'.$productPricing->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/productPricings/'.$productPricing->id);

        $this->assertResponseStatus(404);
    }
}
