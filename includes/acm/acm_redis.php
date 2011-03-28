<?php
/**
*
* @package acm
* @version $Id$
* @copyright (c) 2005, 2011 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Include the abstract base
if (!class_exists('acm_memory'))
{
	require("{$phpbb_root_path}includes/acm/acm_memory.$phpEx");
}

if (!defined('PHPBB_ACM_REDIS_PORT'))
{
	define('PHPBB_ACM_REDIS_PORT', 6379);
}

if (!defined('PHPBB_ACM_REDIS_HOST'))
{
	define('PHPBB_ACM_REDIS_HOST', 'localhost');
}

if (!defined('PHPBB_ACM_REDIS'))
{
	//can define multiple servers with host1/port1,host2/port2 format
	define('PHPBB_ACM_REDIS', PHPBB_ACM_REDIS_HOST . '/' . PHPBB_ACM_REDIS_PORT);
}

/**
* ACM for Redis
* @package acm
*/
class acm extends acm_memory
{
	var $extension = 'redis';

	var $redis;

	function acm()
	{
		// Call the parent constructor
		parent::acm_memory();

		if (!extension_loaded('redis'))
		{
			trigger_error("Could not find required extension [{$this->extension}] for the ACM module $acm_type.", E_USER_ERROR);
		}
		
		$this->redis = new Redis();
		foreach (explode(',', PHPBB_ACM_REDIS) as $u)
		{
			$parts = explode('/', $u);
			$this->redis->connect(trim($parts[0]), trim($parts[1]));
		}
		
		if (defined('PHPBB_ACM_REDIS_PASSWORD'))
		{
			if (!$this->redis->auth(PHPBB_ACM_REDIS_PASSWORD))
			{
				trigger_error("Incorrect password for the ACM module $acm_type.", E_USER_ERROR);
			}
		}
	}

	/**
	* Unload the cache resources
	*
	* @return void
	*/
	function unload()
	{
		parent::unload();

		$this->redis->close();
	}

	/**
	* Purge cache data
	*
	* @return void
	*/
	function purge()
	{
		$this->redis->flushDB();

		parent::purge();
	}

	/**
	* Fetch an item from the cache
	*
	* @access protected
	* @param string $var Cache key
	* @return mixed Cached data
	*/
	function _read($var)
	{
		return $this->redis->get($this->key_prefix . $var);
	}

	/**
	* Store data in the cache
	*
	* @access protected
	* @param string $var Cache key
	* @param mixed $data Data to store
	* @param int $ttl Time-to-live of cached data
	* @return bool True if the operation succeeded
	*/
	function _write($var, $data, $ttl = 2592000)
	{
		return $this->redis->setex($this->key_prefix . $var, $ttl, $data);
	}

	/**
	* Remove an item from the cache
	*
	* @access protected
	* @param string $var Cache key
	* @return bool True if the operation succeeded
	*/
	function _delete($var)
	{
		if ($this->redis->delete($this->key_prefix . $var) > 0)
		{
			return true;
		}
		return false;
	}
}
