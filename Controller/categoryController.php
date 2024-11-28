<?php
require(__DIR__ . '/../config/init.php');
class CategoryController
{
    private $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new Category();
    }
    public function index()
    {
        $categories = $this->categoryModel->getAllCategories();
        return $categories;
    }
    public function create($data)
    {
        return $this->categoryModel->createCategory($data);
    }
    public function show($id)
    {
        $category = $this->categoryModel->getCategoryById($id);
        return $category ?: [];
    }
    public function  update($id, $data)
    {
        return $this->categoryModel->updateCategory($id, $data);
    }
    public function destroy($id)
    {
        return $this->categoryModel->destroy($id);
    }
    public function restore($id)
    {
        return $this->categoryModel->restoreCategory($id);
    }
}
