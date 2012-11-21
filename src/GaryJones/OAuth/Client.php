<?php
/**
 * OAuth
 *
 * @package OAuth
 * @author Andy Smith
 * @author Gary Jones <gary@garyjones.co.uk>
 * @license https://raw.github.com/GaryJones/OAuth/master/LICENSE MIT
 * @link https://github.com/GaryJones/OAuth
 */

namespace GaryJones\OAuth;

/**
 * Client holds the properties of a single client / consumer.
 *
 * @package OAuth
 * @author Gary Jones <gary@garyjones.co.uk>
 */
class Client extends Credential
{
    /**
     * Constructs a new client object and populates the required parameters.
     *
     * @param string $key          Client key / identifier.
     * @param string $secret       Client shared-secret.
     * @param string $callback_url URL to which authorized request will redirect to.
     */
    public function __construct($key, $secret, $callback_url = null)
    {
        $this->setKey($key);
        $this->setSecret($secret);
        $this->callback_url = $callback_url;
    }
}
