<?php
class product
{

    private $id_product;
    private $product_name;
    private $product_price;
    private $qty;
    private $catg;

    /**
     * @param $id_product
     * @param $product_name
     * @param $product_price
     * @param $qty
     * @param $catg
     */
    public function __construct( $product_name, $product_price, $qty,$catg)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->qty = $qty;
        $this->catg=$catg;
    }

    /**
     * @return mixed
     */
    public function getCatg()
    {
        return $this->catg;
    }

    /**
     * @param mixed $catg
     */
    public function setCatg($catg)
    {
        $this->catg = $catg;
    }

    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->id_product;
    }

    /**
     * @param mixed $id_product
     */
    public function setIdProduct($id_product)
    {
        $this->id_product = $id_product;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @param mixed $product_price
     */
    public function setProductPrice($product_price)
    {
        $this->product_price = $product_price;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }


}
