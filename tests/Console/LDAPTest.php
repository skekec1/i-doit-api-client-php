<?php

/**
 * Copyright (C) 2016-18 Benjamin Heisig
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Benjamin Heisig <https://benjamin.heisig.name/>
 * @copyright Copyright (C) 2016-18 Benjamin Heisig
 * @license http://www.gnu.org/licenses/agpl-3.0 GNU Affero General Public License (AGPL)
 * @link https://github.com/bheisig/i-doit-api-client-php
 */

declare(strict_types=1);

namespace bheisig\idoitapi\tests\Console;

use bheisig\idoitapi\Console\LDAP;
use bheisig\idoitapi\tests\BaseTest;

/**
 * @group unreleased
 * @group API-57
 */
class LDAPTest extends BaseTest {

    /**
     * @var \bheisig\idoitapi\Console\LDAP
     */
    protected $ldap;

    /**
     * @throws \Exception on error
     */
    public function setUp() {
        parent::setUp();

        $this->ldap = new LDAP($this->api);
    }

    /**
     * @throws \Exception on error
     * @todo We need at least one LDAP configuration!
     */
    public function testSync() {
//        $result = $this->ldap->sync();
//
//        $this->assertInternalType('array', $result);
    }

    /**
     * @throws \Exception on error
     * @todo We need at least one LDAP configuration!
     */
    public function testSyncUnknownConfig() {
//        $result = $this->ldap->sync();
//
//        $this->assertInternalType('array', $result);
    }

    /**
     * @throws \Exception on error
     */
    public function testSyncAll() {
        $result = $this->ldap->syncAll();

        $this->assertInternalType('array', $result);
    }

    /**
     * @throws \Exception on error
     * @todo We need at least one LDAP configuration!
     */
    public function testSyncDistinguishedNames() {
//        $result = $this->ldap->syncDN();
//
//        $this->assertInternalType('array', $result);
    }

}