<?php


namespace App;

/**
 * Class Item
 * An example item class
 *
 * @package App
 */
class Item
{
   /**
    * Get the description
    *
    * @return integer A random integer
    */
   public function getDescription(){
       return $this->getID() . $this->getToken();
   }

    /**
     * Get a random ID
     *
     * @return int The ID
     */
   protected function getID(){
       return rand();
   }

    /**
     * Get a random Token
     *
     * @return string The token
     */
   private function getToken(){
       return uniqid();
   }

    /**
     * Get a random Token with the prefix
     *
     * @param string $prefix token prefix
     * @return string
     */
   private function getPrefixedToken(string $prefix){
       return uniqid($prefix);
   }
}