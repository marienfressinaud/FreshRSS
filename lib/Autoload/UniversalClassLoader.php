<?php

class UniversalClassLoader {
	protected $registeredPath = [];

	/**
	 * Register path in which to look for a class.
	 */
	public function registerPath($path) {
		if (is_string($path)) {
			$this->registeredPath[] = $path;
		}
		if (is_array($path)) {
			array_push($this->registeredPath, ...$path);
		}
	}

	/**
	 * Indicates if the processed class is supported by the current loader
	 */
	protected function isSupported($class) {
		return true;
	}

	/**
	 * Load class file if found.
	 */
	public function loadClass($class)
	{
		if (!$this->isSupported($class)) {
			return;
		}

		if ($file = $this->findFile($class)) {
			require_once $file;
		}
	}

	/**
	 * Find the file containing the class definition.
	 */
	protected function findFile($class) {
		foreach ($this->registeredPath as $path) {
			$file = $path . DIRECTORY_SEPARATOR . str_replace(['\\', '_'], DIRECTORY_SEPARATOR, $class) . '.php';
			if (file_exists($file)) {
				return $file;
			}
		}
	}

	/**
	 * Register the current loader in the autoload queue.
	 */
	public function register($prepend = false) {
		spl_autoload_register([$this, 'loadClass'], true, $prepend);
	}
}
