<?php



class CarsController extends \BaseController {
	
	
	public function getAllCars() {
		return json_encode(Carro::allCars());
	}
	public function saveCar() {
		return Carro::saveCar();
	}

	public function getCar($id) {
		$carro = Carro::getCarro($id);
		if(!$carro) {
			return Response::json(['response' => 'Carro não encontrado'], 400);
		}
		return $carro;
	}

	public function updateCar($id) {
		$carro = Carro::updateCarro($id);
		if(!$carro) {
			return Response::json(['response' => 'Carro não encontrado'], 400);
		}
		return Response::json(['response' => 'Carro atualizado com sucesso!'], 200);
	}

	public function deleteCar($id) {
		$carro = Carro::deleteCar($id);
		if(!$carro) {
			return Response::json(['response' => 'Carro não encontrado'], 400);
		}
		return Response::json(['response' => 'Carro removido com sucesso!'], 200);
	}

}

