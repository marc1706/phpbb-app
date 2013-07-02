<?php
/**
*
* @package phpBB3
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class phpbb_template_twig_environment extends Twig_Environment
{
	/** @var array */
	protected $phpbb_extensions;

	/** @var phpbb_config */
	protected $phpbb_config;

	/** @var string */
	protected $phpbb_root_path;

	/** @var array **/
	protected $namespace_look_up_order = array('__main__');

	public function __construct($phpbb_config, $phpbb_extensions, $phpbb_root_path, Twig_LoaderInterface $loader = null, $options = array())
	{
		$this->phpbb_config = $phpbb_config;
		$this->phpbb_extensions = $phpbb_extensions;
		$this->phpbb_root_path = $phpbb_root_path;

		return parent::__construct($loader, $options);
	}

	/**
	* Get the list of enabled phpBB extensions
	*
	* @return array
	*/
	public function get_phpbb_extensions()
	{
		return $this->phpbb_extensions;
	}

	/**
	* Get phpBB config
	*
	* @return phpbb_config
	*/
	public function get_phpbb_config()
	{
		return $this->phpbb_config;
	}

	/**
	* Get the phpBB root path
	*
	* @return string
	*/
	public function get_phpbb_root_path()
	{
		return $this->phpbb_root_path;
	}

	/**
	* Get the namespace look up order
	*
	* @return array
	*/
	public function getNamespaceLookUpOrder()
	{
		return $this->namespace_look_up_order;
	}

	/**
	* Set the namespace look up order to load templates from
	*
	* @param array $namespace
	* @return Twig_Environment
	*/
	public function setNamespaceLookUpOrder($namespace)
	{
		$this->namespace_look_up_order = $namespace;

		return $this;
	}

	/**
	 * Loads a template by name.
	 *
	 * @param string  $name  The template name
	 * @param integer $index The index if it is an embedded template
	 * @return Twig_TemplateInterface A template instance representing the given template name
	 */
	public function loadTemplate($name, $index = null)
	{
		if (strpos($name, '@') === false)
		{
			foreach ($this->getNamespaceLookUpOrder() as $namespace)
			{
				try
				{
					if ($namespace === '__main__')
					{
						return parent::loadTemplate($name, $index);
					}

					return parent::loadTemplate('@' . $namespace . '/' . $name, $index);
				}
				catch (Twig_Error_Loader $e)
				{
				}
			}

			// We were unable to load any templates
			throw $e;
		}
		else
		{
			return parent::loadTemplate($name, $index);
		}
	}

	/**
	* Recursive helper to set variables into $context so that Twig can properly fetch them for display
	*
	* @param array $data Data to set at the end of the chain
	* @param array $blocks Array of blocks to loop into still
	* @param mixed $current_location Current location in $context (recursive!)
	* @return null
	*/
	public function context_recursive_loop_builder($data, $blocks, &$current_location)
	{
		$block = array_shift($blocks);

		if (empty($blocks))
		{
			$current_location[$block] = $data;
		}
		else
		{
			$this->context_recursive_loop_builder($data, $blocks, $current_location[$block]);
		}
	}
}
