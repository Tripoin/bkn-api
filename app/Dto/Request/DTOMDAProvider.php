<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 16:13
 */

namespace App\Dto\request;


use App\Dto\Entity\DTOAuditTrail;

class DTOMDAProvider extends DTOAuditTrail
{
    private $provider_id;
    private $device_sn;
    private $created_on;
    private $created_by;
    private $modified_on;
    private $modified_by;

    /**
     * @return mixed
     */
    public function getProviderId()
    {
        return $this->provider_id;
    }

    /**
     * @param mixed $provider_id
     */
    public function setProviderId($provider_id)
    {
        $this->provider_id = $provider_id;
    }

    /**
     * @return mixed
     */
    public function getDeviceSn()
    {
        return $this->device_sn;
    }

    /**
     * @param mixed $device_sn
     */
    public function setDeviceSn($device_sn)
    {
        $this->device_sn = $device_sn;
    }

    /**
     * @return mixed
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * @param mixed $created_on
     */
    public function setCreatedOn($created_on)
    {
        $this->created_on = $created_on;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * @param mixed $created_by
     */
    public function setCreatedBy($created_by)
    {
        $this->created_by = $created_by;
    }

    /**
     * @return mixed
     */
    public function getModifiedOn()
    {
        return $this->modified_on;
    }

    /**
     * @param mixed $modified_on
     */
    public function setModifiedOn($modified_on)
    {
        $this->modified_on = $modified_on;
    }

    /**
     * @return mixed
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * @param mixed $modified_by
     */
    public function setModifiedBy($modified_by)
    {
        $this->modified_by = $modified_by;
    }

}