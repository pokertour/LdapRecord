<?php

namespace LdapRecord\Query\Model;

use LdapRecord\Query\Model\Builder;

class FreeIpaBuilder extends Builder
{
    /**
     * Adds a enabled filter to the current query.
     *
     * @return $this
     */
    public function whereEnabled()
    {
        return $this->rawFilter('(!(pwdAccountLockedTime=*))');
    }

    /**
     * Adds a disabled filter to the current query.
     *
     * @return $this
     */
    public function whereDisabled()
    {
        return $this->rawFilter('(pwdAccountLockedTime=*)');
    }
}
