<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/common/common.proto

namespace Google\Cloud\OsLogin\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The POSIX account information associated with a Google account.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.common.PosixAccount</code>
 */
class PosixAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Only one POSIX account can be marked as primary.
     *
     * Generated from protobuf field <code>bool primary = 1;</code>
     */
    private $primary = false;
    /**
     * The username of the POSIX account.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     */
    private $username = '';
    /**
     * The user ID.
     *
     * Generated from protobuf field <code>int64 uid = 3;</code>
     */
    private $uid = 0;
    /**
     * The default group ID.
     *
     * Generated from protobuf field <code>int64 gid = 4;</code>
     */
    private $gid = 0;
    /**
     * The path to the home directory for this account.
     *
     * Generated from protobuf field <code>string home_directory = 5;</code>
     */
    private $home_directory = '';
    /**
     * The path to the logic shell for this account.
     *
     * Generated from protobuf field <code>string shell = 6;</code>
     */
    private $shell = '';
    /**
     * The GECOS (user information) entry for this account.
     *
     * Generated from protobuf field <code>string gecos = 7;</code>
     */
    private $gecos = '';
    /**
     * System identifier for which account the username or uid applies to.
     * By default, the empty value is used.
     *
     * Generated from protobuf field <code>string system_id = 8;</code>
     */
    private $system_id = '';
    /**
     * Output only. A POSIX account identifier.
     *
     * Generated from protobuf field <code>string account_id = 9;</code>
     */
    private $account_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $primary
     *           Only one POSIX account can be marked as primary.
     *     @type string $username
     *           The username of the POSIX account.
     *     @type int|string $uid
     *           The user ID.
     *     @type int|string $gid
     *           The default group ID.
     *     @type string $home_directory
     *           The path to the home directory for this account.
     *     @type string $shell
     *           The path to the logic shell for this account.
     *     @type string $gecos
     *           The GECOS (user information) entry for this account.
     *     @type string $system_id
     *           System identifier for which account the username or uid applies to.
     *           By default, the empty value is used.
     *     @type string $account_id
     *           Output only. A POSIX account identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\Common\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Only one POSIX account can be marked as primary.
     *
     * Generated from protobuf field <code>bool primary = 1;</code>
     * @return bool
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Only one POSIX account can be marked as primary.
     *
     * Generated from protobuf field <code>bool primary = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrimary($var)
    {
        GPBUtil::checkBool($var);
        $this->primary = $var;

        return $this;
    }

    /**
     * The username of the POSIX account.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * The username of the POSIX account.
     *
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * The user ID.
     *
     * Generated from protobuf field <code>int64 uid = 3;</code>
     * @return int|string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * The user ID.
     *
     * Generated from protobuf field <code>int64 uid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkInt64($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * The default group ID.
     *
     * Generated from protobuf field <code>int64 gid = 4;</code>
     * @return int|string
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * The default group ID.
     *
     * Generated from protobuf field <code>int64 gid = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGid($var)
    {
        GPBUtil::checkInt64($var);
        $this->gid = $var;

        return $this;
    }

    /**
     * The path to the home directory for this account.
     *
     * Generated from protobuf field <code>string home_directory = 5;</code>
     * @return string
     */
    public function getHomeDirectory()
    {
        return $this->home_directory;
    }

    /**
     * The path to the home directory for this account.
     *
     * Generated from protobuf field <code>string home_directory = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHomeDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->home_directory = $var;

        return $this;
    }

    /**
     * The path to the logic shell for this account.
     *
     * Generated from protobuf field <code>string shell = 6;</code>
     * @return string
     */
    public function getShell()
    {
        return $this->shell;
    }

    /**
     * The path to the logic shell for this account.
     *
     * Generated from protobuf field <code>string shell = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setShell($var)
    {
        GPBUtil::checkString($var, True);
        $this->shell = $var;

        return $this;
    }

    /**
     * The GECOS (user information) entry for this account.
     *
     * Generated from protobuf field <code>string gecos = 7;</code>
     * @return string
     */
    public function getGecos()
    {
        return $this->gecos;
    }

    /**
     * The GECOS (user information) entry for this account.
     *
     * Generated from protobuf field <code>string gecos = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setGecos($var)
    {
        GPBUtil::checkString($var, True);
        $this->gecos = $var;

        return $this;
    }

    /**
     * System identifier for which account the username or uid applies to.
     * By default, the empty value is used.
     *
     * Generated from protobuf field <code>string system_id = 8;</code>
     * @return string
     */
    public function getSystemId()
    {
        return $this->system_id;
    }

    /**
     * System identifier for which account the username or uid applies to.
     * By default, the empty value is used.
     *
     * Generated from protobuf field <code>string system_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSystemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->system_id = $var;

        return $this;
    }

    /**
     * Output only. A POSIX account identifier.
     *
     * Generated from protobuf field <code>string account_id = 9;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Output only. A POSIX account identifier.
     *
     * Generated from protobuf field <code>string account_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

}

