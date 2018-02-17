<?php

use App\Models\Backend\ProductInventory;
use App\Repositories\Backend\ProductInventoryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductInventoryRepositoryTest extends TestCase
{
    use MakeProductInventoryTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProductInventoryRepository
     */
    protected $productInventoryRepo;

    public function setUp()
    {
        parent::setUp();
        $this->productInventoryRepo = App::make(ProductInventoryRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateProductInventory()
    {
        $productInventory = $this->fakeProductInventoryData();
        $createdProductInventory = $this->productInventoryRepo->create($productInventory);
        $createdProductInventory = $createdProductInventory->toArray();
        $this->assertArrayHasKey('id', $createdProductInventory);
        $this->assertNotNull($createdProductInventory['id'], 'Created ProductInventory must have id specified');
        $this->assertNotNull(ProductInventory::find($createdProductInventory['id']), 'ProductInventory with given id must be in DB');
        $this->assertModelData($productInventory, $createdProductInventory);
    }

    /**
     * @test read
     */
    public function testReadProductInventory()
    {
        $productInventory = $this->makeProductInventory();
        $dbProductInventory = $this->productInventoryRepo->find($productInventory->id);
        $dbProductInventory = $dbProductInventory->toArray();
        $this->assertModelData($productInventory->toArray(), $dbProductInventory);
    }

    /**
     * @test update
     */
    public function testUpdateProductInventory()
    {
        $productInventory = $this->makeProductInventory();
        $fakeProductInventory = $this->fakeProductInventoryData();
        $updatedProductInventory = $this->productInventoryRepo->update($fakeProductInventory, $productInventory->id);
        $this->assertModelData($fakeProductInventory, $updatedProductInventory->toArray());
        $dbProductInventory = $this->productInventoryRepo->find($productInventory->id);
        $this->assertModelData($fakeProductInventory, $dbProductInventory->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteProductInventory()
    {
        $productInventory = $this->makeProductInventory();
        $resp = $this->productInventoryRepo->delete($productInventory->id);
        $this->assertTrue($resp);
        $this->assertNull(ProductInventory::find($productInventory->id), 'ProductInventory should not exist in DB');
    }
}
