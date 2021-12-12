<?php
class ProductDAO extends DAO
{	
	public function getSelectedProductList($start_row,$limit)
	{
		$sql="select * from products LIMIT $start_row,$limit";
		$this->openDB();
		$this->prepareQuery($sql);
		//$this->bindQueryParam(":start_row", $start_row);
		//$this->bindQueryParam(":limit",$limit);
		$result=$this->executeQuery();
		//print_r($result);
		return $result;

	}
	public function getAllProduct()
	{
		$sql="select * from products";
		
		$this->openDB();
		$this->prepareQuery($sql);
		
		$result=$this->executeQuery();
		//print_r($result);
		
		return $result;
	}

	public function getProductByProductId($products,$categories,$brands,$product_id)
	{
		//$sql="select * from products where product_id=:product_id";
		$sql = "SELECT $products.*,$categories.*,$brands.* FROM $products
              INNER JOIN $categories
              ON $products.product_cat = $categories.cat_id 
              INNER JOIN $brands
              ON $products.product_brand = $brands.brand_id
              WHERE $products.product_id =:product_id";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":product_id", $product_id);
		//$this->bindQueryParam(":limit",$limit);
		$result=$this->executeQuery();
		//print_r($result);
		return $result;

	}

	public function getProductByCatId($product_cat,$start_row,$limit)
	{
		$sql="select * from products where product_cat=:product_cat LIMIT $start_row,$limit";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":product_cat", $product_cat);
		//$this->bindQueryParam(":limit",$limit);
		$result=$this->executeQuery();
		//print_r($result);
		return $result;

	}

	public function getProductByBrandId($product_brand,$start_row,$limit)
	{
		$sql="select * from products where product_brand=:product_brand LIMIT $start_row,$limit";
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":product_brand", $product_brand);
		//$this->bindQueryParam(":limit",$limit);
		$result=$this->executeQuery();
		//print_r($result);
		return $result;

	}

	public function updateProduct()
	{
		$sql="update products set product_cat=:product_cat,product_brand=:product_brand,product_title=:product_title,product_price=:product_price,product_desc=:product_desc,product_image=:product_image,product_keywords=:product_keywords where product_id=:product_id";
		
		$this->openDB();
		$this->prepareQuery($sql);

		$this->bindQueryParam(":product_id", $_SESSION["Product"]->getProductId());
		$this->bindQueryParam(":product_cat", $_SESSION["Product"]->getProductCat());
		$this->bindQueryParam(":product_brand", $_SESSION["Product"]->getProductBrand());
		$this->bindQueryParam(":product_title", $_SESSION["Product"]->getProductTitle());
		$this->bindQueryParam(":product_price", $_SESSION["Product"]->getProductPrice());
		$this->bindQueryParam(":product_desc", $_SESSION["Product"]->getProductDesc());
		$this->bindQueryParam(":product_image", $_SESSION["Product"]->getProductImage());
		$this->bindQueryParam(":product_keywords", $_SESSION["Product"]->getProductKeyword());

		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
			$this->commitTrans();
		else 	
			$this->rollbackTrans();

	}









	public function getSearchProduct($word,$start_row,$limit)
	{
		$sql="select * from products where product_title LIKE '%$word%' LIMIT $start_row,$limit";
		$this->openDB();
		$this->prepareQuery($sql);
		//$this->bindQueryParam(":product_title", $product_title);
		//$this->bindQueryParam(":limit",$limit);
		$result=$this->executeQuery();
		//print_r($result);
		return $result;

	}
}