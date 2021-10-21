<?php
include('config/constants.php')
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<div class="main-content">
    <div class="wrapper">
        <div class="alert alert-success text-center" role="alert">
            <h2>Sửa thông tin người nhận máu</h2>
        </div>

  <!-- sửa -->
        <div class="container col-md-12 mx-auto">
            <form action="process-add.php" METHOD="POST">
                <div class="col-md-6 mx-auto">
                    <div class="input-group mb-2">
                        <span class="input-group-text col-3">Họ và tên</span>
                        <input type="text" class="form-control" name= "txthoten" placeholder="Nhập họ và tên">
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text col-3" >Giới tính</span>
                        <input type="text" class="form-control" name= "txtgioitinh" placeholder="Nhập giới tính">
                    </div>
                    
                    <div class="input-group mb-2">
                        <span class="input-group-text col-3" >Tuổi</span>
                        <input type="text" class="form-control" name= "txttuoi" placeholder="Nhập số tuổi">
                    </div>

                    <div class="input-group mb-2"> 
                        <span class="input-group-text col-3" >Nhóm máu</span>
                        <input type="email" class="form-control" name="txtnhommau" placeholder="Nhập nhóm máu" >      
                    </div>

                    <div class="input-group mb-2"> 
                        <span class="input-group-text col-3" >Ngày đk nhận máu</span>
                        <input type="tel" class="form-control" name="nagydangkinhanmau" placeholder="Nhập ngày đăng kí nhận máu">             
                    </div>

                    <div class="input-group mb-2">
                        <span class="input-group-text col-3" >Số lượng máu cần nhận</span>
                        <input type="text" class="form-control" name= "txtluongmaunhan" placeholder="Nhập số lượng máu cần nhận">
                    </div>

                    <div class="input-group mb-2"> 
                        <span class="input-group-text col-3" >Số điện thoại</span>
                        <input type="tel" class="form-control" name="sodidong" placeholder="Nhập số điện thoại">             
                    </div>
                    <button type="submit" class="btn btn-info" name="submit">Sửa</button>
     
                </div>
            </form>
                      
        </div>        
    </div>
</div>
<?php
    include('templates/footer.php');
?>