<?php 

use App\Models\SugarBean;

class lt_customer extends SugarBean {

    /**
    * The name of the table this module represents
    * @var string
    */
    protected $table = 'lt_customer';

    /**
     * Link a policy to this customer
     * @return Policy
     */
    public function linkPolicy()
    {
        $this->load_relationship('lt_policy');
        $policy = new lt_policy();
        $policy->retrieve();
        $customer->lt_policy->add($policy);

        return $policy;
    }

     /**
     * Unlink a policy to this customer
     * @return Policy
     */
    public function UnlinkPolicy()
    {
        $this->load_relationship('lt_policy');
        $policy = new lt_policy();
        $policy->retrieve();
        $customer->lt_policy->remove($policy);

        return $policy;
    }

}
