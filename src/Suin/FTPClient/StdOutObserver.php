<?php

namespace Suin\FTPClient;

class StdOutObserver implements ObserverInterface
{
	/**
	 * @abstract
	 * @param string $request
	 * @return void
	 */
	public function updateWithRequest($request): void
	{
		echo 'PUT > '.$request;
	}

	/**
	 * @abstract
	 * @param string $message
	 * @param int $code
	 * @return void
	 */
	public function updateWithResponse($message, $code): void
	{
		echo 'GET < '.$message;
	}
}
