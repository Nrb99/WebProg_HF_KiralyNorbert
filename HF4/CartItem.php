<?php

    include "loader.php";


    class CartItem
    {
    private Product $product;
    private int $quantity;

    // TODO Generate constructor with all properties of the class


    // TODO Generate getters and setters of properties
    /**
     * @param Product $product
     * @param int $quantity
     */

        public function __construct(Product $product, int $quantity)
        {
            $this->product = $product;
            $this->quantity = $quantity;
        }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }


    public function increaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
        $this->quantity++;




    }

    public function decreaseQuantity()
    {
        //TODO $quantity must be increased by one.
        if($this->quantity==1){
            echo "Nem lehet tobbet kivenni";

        }else
            $this->quantity--;
        // Bonus: Quantity must not become less than 1
    }

}
