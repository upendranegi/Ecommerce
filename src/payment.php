<?php

namespace Payment;
use Omnipay\Omnipay;
class Payment

{

   /**

    * @return mixed

    */

   public function gateway()

   {

       $gateway = Omnipay::create('PayPal_Express');

       $gateway->setUsername("AZMl4gJVCNdoXfZYzD-29KS-LoLTGrkZ0sxpvNXkDCbFO3SM7PsMonHO6vJawiriev_4QQgzLcrnk-LL");
       $gateway->setPassword("EHJdwph4q482neOZvPx8KD5U_X8t4W1UmrPZ_ooOu5gkbRT6ChrU4K8O5J1sDZu3rDRH5R8R79vk1JvZ");
     
       $gateway->setTestMode(true);
       return $gateway;

   }

   /**

    * @param array $parameters

    * @return mixed

    */

   public function purchase(array $parameters)

   {

       $response = $this->gateway()
           ->purchase($parameters)
           ->send();

       return $response;

   }

   /**

    * @param array $parameters

    */

   public function complete(array $parameters)

   {

       $response = $this->gateway()
           ->completePurchase($parameters)
           ->send();

       return $response;
   }

   /**

    * @param $amount

    */

   public function formatAmount($amount)

   {
       return number_format($amount, 2, '.', '');
   }

   /**

    * @param $order

    */

   public function getCancelUrl($order = "")

   {
       return $this->route('http://phpstack-275615-1077014.cloudwaysapps.com/cancel.php', $order);
   }

   /**

    * @param $order

    */

   public function getReturnUrl($order = "")

   {

       return $this->route('http://phpstack-275615-1077014.cloudwaysapps.com/return.php', $order);
   }

   public function route($name, $params)

   {
       return $name; // ya change hua hai
   }
}