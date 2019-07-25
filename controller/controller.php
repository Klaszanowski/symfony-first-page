<?php
	namespace App\Controller;
	use Symfony\Component\HttpFoundation\Response;
	class controller{
		public function number(){
			$number = randmo_init(0,100);
			return new Response(
				$number);
		}
	}
?>