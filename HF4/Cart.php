<?php

   include "loader.php";



class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    /**
     * @return CartItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param CartItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    // TODO Generate getters and setters of properties

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
    public function addProduct(Product $product, int $quantity): CartItem
    {
        //TODO Implement method
        foreach ($this->items as $ertekek){
            if($ertekek->getProduct()===$product){
                $ertekek->setQuantity($ertekek->getQuantity()+$quantity);
                return $ertekek;
            }

        }
        $cartItem=new CartItem($product,$quantity);
        array_push($this->items,$cartItem);
        return $cartItem;
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        //TODO Implement method
       for($i=0;$i<count($this->items);$i++){
            if($this->items[$i]->getProduct()===$product){
                unset($this->items[$i]);

            }
       }
    }


    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        //TODO Implement method
        $total=0;
        foreach ($this->items as $ertekek){
            $total+=$ertekek->getQuantity();
        }
        return $total;
    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        $total=0;
        foreach ($this->items as $ertek) {
            $total+=$ertek->getProduct()->getPrice()*$ertek->getQuantity();
        }
        return $total;
    }
}

