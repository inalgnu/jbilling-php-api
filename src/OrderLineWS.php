<?php

namespace JBilling;

# PHP JBillingAPIFactory
# Copyright (C) 2008  Make A Byte, inc
# http://www.makeabyte.com

# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.

# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.

# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.

/**
  * OrderLineWS
  * @author Jeremy Hahn
  * @version 1.1
  * @copyright Make A Byte, inc
  * @package com.makeabyte.contrib.jbilling.php
  */

class OrderLineWS
{
    public $id;
    public $orderId;
    public $amount;
    public $quantity;
    public $price;
    public $itemPrice;
    public $createDatetime;
    public $deleted;
    public $description;
    public $versionNum;
    public $editable = null;
    //provisioning fields
    public $provisioningStatus;
    public $provisioningRequestId;
    // other fields, non-persistent
    public $priceStr = null;
    public $itemDto = null;
    public $typeId = null;
    public $useItem = null;
    public $itemId = null;

    public function OrderLineWS() { }

    public function setTypeId($id)
    {
         $this->typeId = (int) $id;
    }

    public function getTypeId()
    {
         return $this->typeId;
    }

    public function setOrderId($id)
    {
         $this->orderId = (integer) $id;
    }

    public function getOrderId()
    {
         return $this->orderId;
    }

    public function setAmount($amount)
    {
         $this->amount = (float) $amount;
    }

    public function getAmount()
    {
         return $this->amount;
    }

    public function setQuantity($qty)
    {
         $this->quantity = new JavaDouble( $qty );
    }

    public function getQuantity()
    {
         return $this->quantity;
    }

    public function setPrice($price)
    {
         $this->price = (float) $price;
    }

    public function getPrice()
    {
         return $this->price;
    }

    public function setItemPrice($price)
    {
         $this->itemPrice = (float) $price;
    }

    public function getItemPrice()
    {
         return $this->itemPrice;
    }

    public function setCreateDateTime($iso8601Date)
    {
         $this->createDateTime = $iso8601Date;
    }

    public function getCreateDateTime()
    {
         return $this->createDatetime;
    }

    public function setDeleted($val)
    {
         $this->deleted = (int) $val;
    }

    public function getDeleted()
    {
         return $this->deleted;
    }

    public function setDescription($description)
    {
         $this->description = (string) $description;
    }

    public function getDescription()
    {
         return $this->description;
    }

    public function setVersionNum($num)
    {
         $this->versionNum = (integer) $num;
    }

    public function getVersionNum()
    {
         return $this->versionNum;
    }

    public function setEditable($bool)
    {
         $this->editable = (bool) $bool;
    }

    public function getEditable()
    {
         return $this->editable;
    }

    public function setProvisioningStatus($status)
    {
         $this->provisioningStatus = (integer) $status;
    }

    public function getProvisioningStatus()
    {
         return $this->provisioningStatus;
    }

    public function setProvisioningRequestId($id)
    {
         $this->provisioningRequestId = (string) $id;
    }

    public function setPriceStr($str)
    {
         $this->priceStr = (string) $str;
    }

    public function getPriceStr()
    {
         return $this->priceStr;
    }

    public function setItemDto($dto)
    {
        if (! $dto instanceof ItemDTOEx) {
            throw new JbillingAPIException( "parameter passed to setItemDTO is not ItemDTOEx type" );
        }

        $this->itemDto = $dto;
    }

    public function getItemDto()
    {
         return $this->itemDto;
    }

    public function setUseItem($bool)
    {
         $this->useItem = (bool) $bool;
    }

    public function getUseItem()
    {
         return $this->useItem;
    }

    public function setItemId($id)
    {
         $this->itemId = (integer) $id;
    }

    public function getItemId()
    {
         return $this->itemId;
    }
}
