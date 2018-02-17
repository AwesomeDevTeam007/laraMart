<?php

use App\Models\Backend\ProductPricing;
use App\Repositories\Backend\ProductPricingRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductPricingRepositoryTest extends TestCase
{
    use MakeProductPricingTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProductPricingRepository
     */
    protected $productPricingRepo;

    public function setUp()
    {
        parent::setUp();
        $this->productPricingRepo = App::make(ProductPricingRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateProductPricing()
    {
        $productPricing = $this->fakeProductPricingData();
        $createdProductPricing = $this->productPricingRepo->create($productPricing);
        $createdProductPricing = $createdProductPricing->toArray();
        $this->assertArrayHasKey('id', $createdProductPricing);
        $this->assertNotNull($createdProductPricing['id'], 'Created ProductPricing must have id specified');
        $this->assertNotNull(ProductPricing::find($createdProductPricing['id']), 'ProductPricing with given id must be in DB');
        $this->assertModelData($productPricing, $createdProductPricing);
    }

    /**
     * @test read
     */
    public function testReadProductPricing()
    {
        $productPricing = $this->makeProductPricing();
        $dbProductPricing = $this->productPricingRepo->find($productPricing->id);
        $dbProductPricing = $dbProductPricing->toArray();
        $this->assertModelData($productPricing->toArray(), $dbProductPricing);
    }

    /**
     * @test update
     */
    public function testUpdateProductPricing()
    {
        $productPricing = $this->makeProductPricing();
        $fakeProductPricing = $this->fakeProductPricingData();
        $updatedProductPricing = $this->productPricingRepo->update($fakeProductPricing, $productPricing->id);
        $this->assertModelData($fakeProductPricing, $updatedProductPricing->toArray());
        $dbProductPricing = $this->productPricingRepo->find($productPricing->id);
        $this->assertModelData($fakeProductPricing, $dbProductPricing->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteProductPricing()
    {
        $productPricing = $this->makeProductPricing();
        $resp = $this->productPricingRepo->delete($productPricing->id);
        $this->assertTrue($resp);
        $this->assertNull(ProductPricing::find($productPricing->id), 'ProductPricing should not exist in DB');
    }
}
