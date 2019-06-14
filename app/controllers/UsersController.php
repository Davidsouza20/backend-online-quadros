<?php


class UsersController extends \BaseController {
	public function getAllCars() {
		return User::test();
	}
	public function saveCar() {
		echo "Save one car";
	}

	public function getCar($id) {
		echo "Get a car" . $id;
	}

	public function updateCar($id) {
		echo "Update a car" . $id;
	}

	public function deleteCar($id) {
		echo "Delete a car" . $id;
	}

}