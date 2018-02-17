<?php

use App\Models\Backend\ProductAttribute;
use App\Repositories\Backend\ProductAttributeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductAttributeRepositoryTest extends TestCase
{
    use MakeProductAttributeTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProductAttributeRepository
     */
    protected $productAttributeRepo;

    public function setUp()
    {
        parent::setUp();
        $this->productAttributeRepo = App::make(ProductAttributeRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateProductAttribute()
    {
        $productAttribute = $this->fakeProductAttributeData();
        $createdProductAttribute = $this->productAttributeRepo->create($productAttribute);
        $createdProductAttribute = $createdProductAttribute->toArray();
        $this->assertArrayHasKey('id', $createdProductAttribute);
        $this->assertNotNull($createdProductAttribute['id'], 'Created ProductAttribute must have id specified');
        $this->assertNotNull(ProductAttribute::find($createdProductAttribute['id']), 'ProductAttribute with given id must be in DB');
        $this->assertModelData($productAttribute, $createdProductAttribute);
    }

    /**
     * @test read
     */
    public function testReadProductAttribute()
    {
        $productAttribute = $this->makeProductAttribute();
        $dbProductAttribute = $this->productAttributeRepo->find($productAttribute->id);
        $dbProductAttribute = $dbProductAttribute->toArray();
        $this->assertModelData($productAttribute->toArray(), $dbProductAttribute);
    }

    /**
     * @test update
     */
    public function testUpdateProductAttribute()
    {
        $productAttribute = $this->makeProductAttribute();
        $fakeProductAttribute = $this->fakeProductAttributeData();
        $updatedProductAttribute = $this->productAttributeRepo->update($fakeProductAttribute, $productAttribute->id);
        $this->assertModelData($fakeProductAttribute, $updatedProductAttribute->toArray());
        $dbProductAttribute = $this->productAttributeRepo->find($productAttribute->id);
        $this->assertModelData($fakeProductAttribute, $dbProductAttribute->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteProductAttribute()
    {
        $productAttribute = $this->makeProductAttribute();
        $resp = $this->productAttributeRepo->delete($productAttribute->id);
        $this->assertTrue($resp);
        $this->assertNull(ProductAttribute::find($productAttribute->id), 'ProductAttribute should not exist in DB');
    }
}
