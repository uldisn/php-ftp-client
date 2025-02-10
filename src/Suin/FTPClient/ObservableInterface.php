<?php

namespace Suin\FTPClient;

interface ObservableInterface
{
	/**
	 * Set an observer.
	 * @param ObserverInterface $observer
	 */
	public function setObserver(ObserverInterface $observer): void;
}
