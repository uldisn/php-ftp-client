<?php

namespace Suin\FTPClient;

interface ObserverInterface
{
	/**
	 * @abstract
	 * @param string $request
	 * @return void
	 */
	public function updateWithRequest($request): void;

	/**
	 * @abstract
	 * @param string $message
	 * @param int $code
	 * @return void
	 */
	public function updateWithResponse($message, $code): void;
}
