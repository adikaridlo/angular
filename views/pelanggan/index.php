<!-- <div ng-app="App" ng-controller="AppCtrl">
	<fieldset>
		<legend>Data Pelanggan</legend>
		<table class="table">
			<thead>
				<th>#</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Email</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>
						<input placeholder="Nama Pelanggan" type="text" class="form-control" ng-model="data.nama">
					</td>
					<td>
						<input placeholder="Alamat Pelanggan" type="text" class="form-control" ng-model="data.alamat">
					</td>
					<td>
						<input placeholder="Telepon Pelanggan" type="text" class="form-control" ng-model="data.telp">
					</td>
					<td>
						<input placeholder="Email Pelanggan" type="text" class="form-control" ng-model="data.email">
					</td>
					<td class="text-center">
						<button class="btn btn-primary" ng-click="simpan()">Simpan{{test}}</button>
					</td>
				</tr>
				<tr ng-repeat="pelanggan in semuaPelanggan">
					<td>{{$index+1}}</td>
					<td>{{pelanggan.nama}}</td>
					<td>{{pelanggan.alamat}}</td>
					<td>{{pelanggan.telp}}</td>
					<td>{{pelanggan.email}}</td>
					<td class="text-center">
						<button class="btn btn-success" ng-click="preUbah(pelanggan)">Ubah</button>
						<button class="btn btn-danger" ng-click="hapus(pelanggan.id)">Hapus</button>
					</td>					
				</tr>
			</tbody>
		</table>
	</fieldset>
</div> -->
<div  ng-app="App" ng-cloak>
  <form>
    <md-toolbar>
      <div class="md-toolbar-tools">

        <strong><h2>Sinau Angular Js !</h2></strong>
        <span flex></span>
        <md-button class="md-icon-button" ng-click="cancel()">
          <md-icon md-svg-src="" aria-label="Close dialog"></md-icon>
        </md-button>
      </div>
    </md-toolbar>
    <md-dialog-content style="max-width:800px;max-height:810px; ">
      <md-tabs md-dynamic-height md-border-bottom>
        <md-tab label="Home">
          <md-content class="md-padding">
            <h1 class="md-display-2">Home</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </md-content>
        </md-tab>
        <md-tab label="Customer Data">
          <md-content class="md-padding">
            <h1 class="md-display-2">Customer Data</h1>
            <div ng-app="App" ng-controller="AppCtrl">
				<fieldset>
					<legend>Data Pelanggan</legend>
					<div class="table-responsive">
					<table class="table">
						<thead>
							<th>#</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th>Email</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td>
									<input placeholder="Nama Pelanggan" type="text" class="form-control" ng-model="data.nama">
								</td>
								<td>
									<input placeholder="Alamat Pelanggan" type="text" class="form-control" ng-model="data.alamat">
								</td>
								<td>
									<input placeholder="Telepon Pelanggan" type="text" class="form-control" ng-model="data.telp">
								</td>
								<td>
									<input placeholder="Email Pelanggan" type="text" class="form-control" ng-model="data.email">
								</td>
								<td class="text-center">
									<button class="btn btn-primary" ng-click="simpan()"><i class="fa fa-plus" style="font-size:20px;color:white"></i></button>
									<button class="btn btn-warning" ng-click="reloadRoute()"><i class="fa fa-refresh" style="font-size:20px;color:white"></i></button>
								</td>
							</tr>
							<tr ng-repeat="pelanggan in semuaPelanggan | filter:data.nama | filter:data.alamat | filter:data.telp | filter:data.email ">
								<td>{{$index+1}}</td>
								<td>{{pelanggan.nama}}</td>
								<td>{{pelanggan.alamat}}</td>
								<td>{{pelanggan.telp}}</td>
								<td>{{pelanggan.email}}</td>
								<td class="text-center">
									<button class="btn btn-success" ng-click="preUbah(pelanggan)"><i class="fa fa-edit" style="font-size:20px;color:white"></i></button>
									<button class="btn btn-danger" ng-click="hapus(pelanggan.id)"><i class="fa fa-remove" style="font-size:20px;color:white"></i></button>

								</td>					
							</tr>
						</tbody>
					</table>
				</div>
				</fieldset>
			</div>
          </md-content>
        </md-tab>
        <md-tab label="About">
          <md-content class="md-padding">
            <h1 class="md-display-2">About</h1>
            <p>Integer turpis erat, porttitor vitae mi faucibus, laoreet interdum tellus. Curabitur posuere molestie dictum. Morbi eget congue risus, quis rhoncus quam. Suspendisse vitae hendrerit erat, at posuere mi. Cras eu fermentum nunc. Sed id ante eu orci commodo volutpat non ac est. Praesent ligula diam, congue eu enim scelerisque, finibus commodo lectus.</p>
          </md-content>
        </md-tab>
      </md-tabs>
    </md-dialog-content>

    <md-dialog-actions layout="row">
      <md-button href="http://en.wikipedia.org/wiki/Mango" target="_blank" md-autofocus>
        More on Wikipedia
      </md-button>
      <span flex></span>
      <md-button ng-click="answer('not useful')" >
        Not Useful
      </md-button>
      <md-button ng-click="answer('useful')" style="margin-right:20px;" >
        Useful
      </md-button>
    </md-dialog-actions>
  </form>
</div>

<script src="<?php echo Yii::getAlias('@web/js/')?>angular.js"></script>
<!-- <script src="<?php echo Yii::getAlias('@web/js/')?>angular.min.js"></script> -->
<script src="<?php echo Yii::getAlias('@web/js/')?>angular-material.js"></script>
<script src="<?php echo Yii::getAlias('@web/js/')?>angular-material.min.js"></script>
<script src="<?php echo Yii::getAlias('@web/js/')?>angular-messages.js"></script>
<script src="<?php echo Yii::getAlias('@web/js/')?>angular-messages.min.js"></script>

<script src="<?php echo Yii::getAlias('@web/js/')?>angular-animate.min.js"></script>
<script src="<?php echo Yii::getAlias('@web/js/')?>angular-aria.min.js"></script>
<script src="<?php echo Yii::getAlias('@web/js/')?>app.js"></script>
<script src="<?php echo Yii::getAlias('@web/js/')?>tabs.js"></script> 
<script src="<?php echo Yii::getAlias('@web/js/')?>jquery.min.js"></script>
<script src="<?php echo Yii::getAlias('@web/js/')?>jquery.js"></script>