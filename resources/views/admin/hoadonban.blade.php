@extends('_layout_admin')
<!doctype html>
<html lang="en" ng-app = "myapp" ng-controller = "mycontroller">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="margin-left: 250px; margin-top: 80px;">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Danh Sách Hóa Đơn Bán</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Bảng</li>
        </ol>
    </div>
    <button class="btn btn-primary" ng-click="showModal(0)">Thêm Mới</button>
    <br>
    <hr>
    <div>Tìm kiếm: <input type="text" ng-model="timkiem"></div><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TT</th>
                <th>Mã Khách Hàng</th>
                <th>Ngày Bán</th>
                <th>Tổng Tiền</th>
                <th>Hình Thức Thanh Toán</th>
                <th>Status</th>
                <th>Note</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr dir-paginate = "sp in hoadonbans| filter: timkiem|itemsPerPage:10">
                <td>@{{ $index+1 }}</td>
                <td>@{{ sp.id_kh }}</td>
                <td>@{{ sp.date_order }}</td>
                <td>@{{ sp.tong_tien }}</td>
                <td>@{{ sp.payment }}</td>
                <td>@{{ sp.status}}</td>
                <td>@{{ sp.note }}</td>
                <td><button class="btn btn-info" ng-click="showModal(sp.id)">Sửa</button></td>
                <td><button class="btn btn-danger" ng-click="deleteClick(sp.id)">Xóa</button></td>
            </tr>
        </tbody>
    </table>

    <dir-pagination-controls
            boundary-links="true"
            direction-links="true" >
            </dir-pagination-controls>


    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@{{modalTitle}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
<div class="modal-body">
                    
                    <div class="form-group">
                      <label for="id_kh">Mã Khách Hàng</label>
                      <input type="text"
                        class="form-control" id="id_kh" ng-model="hoadonban.id_kh">
                    </div>
                
                <div class="form-group">
                        <label for="date_order">Ngày Bán</label>
                        <input type="text"
                          class="form-control" id="date_order" ng-model="hoadonban.date_order">
                      </div>
                <div class="form-group">
                        <label for="tong_tien">Tổng Tiền</label>
                        <input type="text"
                          class="form-control" id="tong_tien" ng-model="hoadonban.tong_tien">
                      </div>
                
                <div class="form-group">
                        <label for="payment">Hình Thức Thanh Toán</label>
                        <input type="text"
                          class="form-control" id="payment" ng-model="hoadonban.payment">
                      </div>
                <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text"
                          class="form-control" id="status" ng-model="hoadonban.status">
                      </div>
                
                <div class="form-group">
                        <label for="note">Note</label>
                        <input type="text"
                          class="form-control" id="note" ng-model="hoadonban.note">
                      </div>
                
</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/angular.min.js">
    </script>
    <script src="/js/dirPagination.js"></script>
    <script>
        var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
        app.controller('mycontroller',function($scope,$http){
            //$scope.hello = 'Toi la angular';
            // $scope.datas = JSON.parse('[{ "firstName":"John", "lastName":"Doe" },{ "firstName":"Anna", "lastName":"Smith" }, { "firstName":"Peter", "lastName":"Jones" }]');
            $scope.timkiem="";
            $scope.reloadData = function(){
                    $http(
                    {
                        method: "GET",
                        url: "http://localhost:8000/api/hoadonbans"
                    }
                ).then(function(response){
                    $scope.hoadonbans = response.data;
                });
            }
            $scope.reloadData();
            $scope.clickMe = function(){
                alert('ban vua click vao toi!');
            }

            $scope.showModal = function(id){
                $scope.id=id;
                if(id==0){
                    $scope.modalTitle = "Thêm hóa đơn bán";
                    if($scope.hoadonban) delete $scope.hoadonban;
                }
                else{
                    $scope.modalTitle = "Sửa";
                    $http(
                        {
                            method: "GET",
                            url: "http://localhost:8000/api/hoadonbans/"+id
                        }
                    ).then(function(response){
                        //console.log(response.data);
                        $scope.hoadonban = response.data;
                    });
}
                $('#modelId').modal('show');
            }
            $scope.saveData = function(){
                if($scope.id==0){
                    $http(
                        {
                            method: "POST",
                            url: "http://localhost:8000/api/hoadonbans/",
                            data: $scope.hoadonban,
                            "content-Type": "application/json",
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.hoadonban = response.data;
                        $scope.reloadData();
                    });
                }
                else{
                    $http(
                        {
                            method: "PUT",
                            url: "http://localhost:8000/api/hoadonbans/"+$scope.id,
                            data: $scope.hoadonban,
                            "content-Type": "application/json",
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.hoadonban = response.data;
                        $scope.reloadData();
                    });
                }
                $('#modelId').modal('hide');
            }

            $scope.deleteClick = function(id){
                var chon = confirm("Ban co muon xoa ban ghi khong?");
                if(chon){
                    $http(
                        {
                            method: "DELETE",
                            url: "http://localhost:8000/api/hoadonbans/"+id
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.hoadonnban = response.data;
                        $scope.reloadData();
                    });
                }
            }
        });
    </script>

    </br >
    <hr>
    <div><a class="nav-link" href="/CThoadonban">Chi Tiết Hóa Đơn Bán</a></div>
  </body>
</html>