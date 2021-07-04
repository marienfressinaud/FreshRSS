<?php

class FreshrssClassLoader extends UniversalClassLoader {
	protected function isSupported($class) {
		return false !== strpos($class, 'FreshRSS');
	}

	protected function findFile($class) {
		$cachedClass = $this->getCacheFilepath($class);
		if (!file_exists($cachedClass)) {
			$this->generateCacheFile($class, $cachedClass);
		}
		return $cachedClass;
	}

	/**
	 * Get the cache path for a class.
	 * The path contains the hash of the class name and FRSS version.
	 */
	private function getCacheFilepath($class) {
		return CACHE_PATH . DIRECTORY_SEPARATOR . sha1($class . FRESHRSS_VERSION) . '.class.php';
	}

	/**
	 * Generate the cache file by copying the class definition file.
	 */
	private function generateCacheFile($class, $cachedClass) {
		$freshrssClass = str_replace(['FreshRSS_', '_'], '', $class);
		foreach ($this->registeredPath as $path) {
			$file = $path . DIRECTORY_SEPARATOR . $freshrssClass . '.php';
			if (file_exists($file)) {
				copy($file, $cachedClass);
			}
		}
	}
}
