<?php
class Products
{
	private $product_id;
	private $product_cat;
	private $product_brand;
	private $product_title;
	private $product_price;
	private $product_desc;
	private $product_image;
	private $product_keywords;
	
	public function getProductId()
	{
		return $this->product_id;
	}
	public function getProductCat()
	{
		return $this->product_cat;
	}
	public function getProductBrand()
	{
		return $this->product_brand;
	}
	public function getProductTitle()
	{
		return $this->product_title;
	}
	public function getProductPrice()
	{
		return $this->product_price;
	}
	public function getProductDesc()
	{
		return $this->product_desc;
	}
	public function getProductImage()
	{
		return $this->product_image;
	}
	public function getProductKeyword()
	{
		return $this->product_keywords;
	}

	public function setProductId($product_id)
	{
		$this->product_id=$product_id;
	}
	public function setProductCat($product_cat)
	{
		$this->product_cat=$product_cat;
	}
	public function setProductBrand($product_brand)
	{
		$this->product_brand=$product_brand;
	}
	public function setProductTitle($product_title)
	{
		$this->product_title=$product_title;
	}
	public function setProductPrice($product_price)
	{
		$this->product_price=$product_price;
	}
	public function setProductDesc($product_desc)
	{
		$this->product_desc=$product_desc;
	}
	public function setProductImage($product_image)
	{
		$this->product_image=$product_image;
	}
	public function setProductKeyword($product_keywords)
	{
		$this->product_keywords=$product_keywords;
	}
	
}