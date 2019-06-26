<?php

class Hash
{
    /**
     * @param string $algo Algorithm ( md, sha1, etc )
     * @param string $data The data to encode
     * @param string $salt The salt
     * @return 
     */
    public static function create($algo, $data, $salt)
    {
        $context = hash_init($algo, HASH_HMAC, $salt);
        hash_update($context, $data);
        return hash_final($context);
    }
}
