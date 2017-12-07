var app = angular.module("App",['ngMaterial', 'ngMessages']);
app.controller("AppCtrl",function($scope,$http){
	$scope.aksiSimpan = "tambah";
	$scope.data = {};

	$scope.simpan = function(){
		switch($scope.aksiSimpan){
			case "tambah" :
				$scope.tambahData();
			break;
			case "ubah" :
				$scope.ubah();
			break;
		}
	};

	$scope.tambahData = function(){

		$http.post(
			'index.php?r=pelanggan/tambah',
			{
				data : $scope.data
			}
		).then(function(data){
			$scope.clearData();
			$scope.dapatkanSemuaPelanggan();
		}, function(data){
			console.log(data);
		});
	};

	$scope.clearData = function(){
		$scope.data = {
			nama : "",
			alamat : "",
			telp : "",
			email : ""
		};
	};

	$scope.dapatkanSemuaPelanggan = function(){

		$http.get(
			'index.php?r=pelanggan/dapatkan-semua-pelanggan'
		).then(function(data){
			// console.log(data);
			$scope.semuaPelanggan = data.data;
			console.log($scope.semuaPelanggan);
		});
	};

	$scope.preUbah = function(pelanggan){

		$scope.data = pelanggan;
		$scope.aksiSimpan = "ubah";
	};

	$scope.ubah = function(){

		$http.post(
			'index.php?r=pelanggan/ubah',
			{
				data : $scope.data
			}
		).then(function(){
			$scope.clearData();
			$scope.dapatkanSemuaPelanggan();
			$scope.aksiSimpan = "tambah";
		}), function(){
			alert("Gagal ubah data");
		};
	};

	$scope.hapus = function(id){

		$http.post(
			'index.php?r=pelanggan/hapus',
			{
				id : id
			}
		).then(function(){
			$scope.dapatkanSemuaPelanggan();
		}),function(){
			alert("Gagal Hapus");
		};

	};

	$scope.reloadRoute = function() {
	   $scope.aksiSimpan = "tambah";
		$scope.data = {};
	}

	$scope.dapatkanSemuaPelanggan(); 
});