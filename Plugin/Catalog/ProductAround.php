<?php 

namespace AHT\HelloWorld\Plugin\Catalog; 

use Magento\Catalog\Model\Product; 

class ProductAround 

{ 

    public function aroundGetName($interceptedInput) 

    { 

   	 return "Name of product"; 

    } 

    public function beforeGetName($interceptedInput) 

    { 

   	 return "Name of product2"; 

    } 

    public function afterGetName($interceptedInput) 

    { 

   	 return "Name of product3"; 

    }
}
