<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BranchApiTest extends TestCase
{
    use MakeBranchTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateBranch()
    {
        $branch = $this->fakeBranchData();
        $this->json('POST', '/api/v1/branches', $branch);

        $this->assertApiResponse($branch);
    }

    /**
     * @test
     */
    public function testReadBranch()
    {
        $branch = $this->makeBranch();
        $this->json('GET', '/api/v1/branches/'.$branch->id);

        $this->assertApiResponse($branch->toArray());
    }

    /**
     * @test
     */
    public function testUpdateBranch()
    {
        $branch = $this->makeBranch();
        $editedBranch = $this->fakeBranchData();

        $this->json('PUT', '/api/v1/branches/'.$branch->id, $editedBranch);

        $this->assertApiResponse($editedBranch);
    }

    /**
     * @test
     */
    public function testDeleteBranch()
    {
        $branch = $this->makeBranch();
        $this->json('DELETE', '/api/v1/branches/'.$branch->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/branches/'.$branch->id);

        $this->assertResponseStatus(404);
    }
}
