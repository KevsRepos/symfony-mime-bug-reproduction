<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;
use Symfony\Component\Routing\Attribute\Route;

class ExampleController
{
	#[Route('/')]
	public function exampleRoute(): Response
	{
		$file = new File('/var/www/html/files', 'dummy.pdf');

		/**
		 * Will dump the file - path is correct.
		 */
		//var_dump(file_get_contents($file->getPath() . '/' . $file->getFilename()));

		new DataPart($file); // fails here

		return new Response(
			'Hello World'
		);
	}
}