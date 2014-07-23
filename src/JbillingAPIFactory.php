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
  * JbillingAPIFactory
  * @author Jeremy Hahn
  * @version 1.0
  * @copyright Make A Byte, inc
  * @package com.makeabyte.contrib.jbilling.php
  */
class JbillingAPIFactory
{
    private $api;

    public function __construct($url, $username, $password)
    {
        // Create a new instance of the WSDLAPI provider
        $this->api = new WSDLAPI($url, $username, $password);

        // Catch SOAP_Faults / JbillingAPIExceptions throws by the WSDL provider
        if ($this->api instanceof SOAP_Fault) {
            throw new JbillingAPIException( $this->api->message );
        }
    }

    /**
     * @return WSDLAPI instance of the WSDLAPI provider object
     */
    public function getApi()
    {
        return $this->api;
    }
}
