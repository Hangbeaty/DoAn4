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
        <h1 class="mt-4">Danh Sách Hóa Đơn Nhập</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Bảng</li>
        </ol>
    </div>
    <button class="btn btn-primary" ng-click="showModal(0)">Thêm Mới</button>
    <br>
    <hr>
    <div>Tìm kiếm: <input type="text" ng-model="timkiem"></div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TT</th>
                <th>Mã Nhà Cung Cấp</th>
                <th>Mã Nhân Viên</th>
                <th>Date Order</th>
                <th>Tổng Tiền</th>
                <th>Thanh Toán</th>
                <th>Note</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr dir-paginate = "sp in hoadonnhaps| filter: timkiem|itemsPerPage:10">
                <td>@{{ $index+1 }}</td>
                <td>@{{ sp.id_ncc }}</td>
                <td>@{{ sp.id_nhanvien }}</td>
                <td>@{{ sp.date_order }}</td>
                <td>@{{ sp.tong_tien }}</td>
                <td>@{{ sp.thanh_toan}}</td>
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
                      <label for="id_ncc">Mã Nhà Cung Cấp</label>
                      <input type="text"
                        class="form-control" id="id_ncc" ng-model="hoadonnhap.id_ncc">
                    </div>
                
                <div class="form-group">
                        <label for="id_nhanvien">Mã Nhân Viên</label>
                        <input type="text"
                          class="form-control" id="id_nhanvien" ng-model="hoadonnhap.id_nhanvien">
                      </div>
                <div class="form-group">
                        <label for="date_order">Ngày Nhập Hàng</label>
                        <input type="text"
                          class="form-control" id="date_order" ng-model="hoadonnhap.date_order">
                      </div>
                <div class="form-group">
                        <label for="tong_tien">Tổng Tiền</label>
                        <input type="text"
                          class="form-control" id="tong_tien" ng-model="hoadonnhap.tong_tien">
                      </div>
                <div class="form-group">
                        <label for="thanh_toan">Thanh Toán</label>
                        <input type="text"
                          class="form-control" id="thanh_toan" ng-model="hoadonnhap.thanh_toan">
                      </div>
                
                <div class="form-group">
                        <label for="note">Note</label>
                        <input type="text"
                          class="form-control" id="note" ng-model="hoadonnhap.note">
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
                        url: "http://localhost:8000/api/hoadonnhaps"
                    }
                ).then(function(response){
                    $scope.hoadonnhaps = response.data;
                });
            }
            $scope.reloadData();
            $scope.clickMe = function(){
                alert('ban vua click vao toi!');
            }

            $scope.showModal = function(id){
                $scope.id=id;
                if(id==0){
                    $scope.modalTitle = "Thêm hóa đơn nhập";
                    if($scope.hoadonnhap) delete $scope.hoadonnhap;
                }
                else{
                    $scope.modalTitle = "Sửa";
                    $http(
                        {
                            method: "GET",
                            url: "http://localhost:8000/api/hoadonnhaps/"+id
                        }
                    ).then(function(response){
                        //console.log(response.data);
                        $scope.hoadonnhap = response.data;
                    });
}
                $('#modelId').modal('show');
            }
            $scope.saveData = function(){
                if($scope.id==0){
                    $http(
                        {
                            method: "POST",
                            url: "http://localhost:8000/api/hoadonnhaps/",
                            data: $scope.hoadonnhap,
                            "content-Type": "application/json",
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.hoadonnhap = response.data;
                        $scope.reloadData();
                    });
                }
                else{
                    $http(
                        {
                            method: "PUT",
                            url: "http://localhost:8000/api/hoadonnhaps/"+$scope.id,
                            data: $scope.hoadonnhap,
                            "content-Type": "application/json",
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.hoadonnhap = response.data;
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
                            url: "http://localhost:8000/api/hoadonnhaps/"+id
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.hoadonnhap = response.data;
                        $scope.reloadData();
                    });
                }
            }
        });
    </script>

    </br >
    <hr>
    <div><a class="nav-link" href="/CThoadonnhap">Chi Tiết Hóa Đơn Nhập</a></div>
  </body>
</html>