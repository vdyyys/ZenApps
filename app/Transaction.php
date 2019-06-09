<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
 
    /**
     * Set status_pembayaran to Pending
     *
     * @return void
     */
    public function setPending()
    {
        $this->attributes['status_pembayaran'] = 'pending';
        self::save();
    }
 
    /**
     * Set status_pembayaran_pembayaran to Success
     *
     * @return void
     */
    public function setSuccess()
    {
        $this->attributes['status_pembayaran'] = 'success';
        self::save();
    }
 
    /**
     * Set status_pembayaran to Failed
     *
     * @return void
     */
    public function setFailed()
    {
        $this->attributes['status_pembayaran'] = 'failed';
        self::save();
    }
 
    /**
     * Set status_pembayaran to Expired
     *
     * @return void
     */
    public function setExpired()
    {
        $this->attributes['status_pembayaran'] = 'expired';
        self::save();
    }
}
