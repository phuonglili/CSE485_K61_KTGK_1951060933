<?php
include('templates/header.php')
?>
      <div class="row nav-menu ">
      <div class="col-md-9">
      <a class="btn btn-primary m-3" href="them.php" role="button">Thêm mới</a>
</div>
          <div class="row">  
            <div class="col-md-12">
              <table class="table table-success table-striped">
                <thead>
                  <tr>
                    <th scope="col">Mã người nhận máu</th>
                    <th scope="col">Tên người nhận máu</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Số lượng máu cần nhận</th>
                    <th scope="col">Ngày đăng kí nhận máu</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                  </tr>
                </thead>
                <tbody>       
                  <?php
                      $sql="SELECT reci_id, reci_name, reci_sex, reci_age, reci_bgrp, reci_bqnty, reci_reg_date, reci_phno FROM BLOOD_RECIPIENT";
                      $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)>0){
                      $i=1;
                      while($row = mysqli_fetch_assoc($result)){
                  ?>      
                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row['reci_name']; ?></td>
                      <td><?php echo $row['reci_sex']; ?></td>
                      <td><?php echo $row['reci_age']; ?></td>
                      <td><?php echo $row['reci_bgrp']; ?></td>
                      <td><?php echo $row['reci_bqnty']; ?></td>
                      <td><?php echo $row['reci_reg_date']; ?></td>
                      <td><?php echo $row['reci_phno']; ?></td>     
                      <td><a href="http://localhost/CSE485_K61_KTGK_1951060540/admin/sua.php?manv=<?php echo $row['reci_id'];?>"><i class="bi bi-pencil-square"></i></a></td>
                      <td><a href="http://localhost/CSE485_K61_KTGK_1951060540/admin/xoa.php?manv=<?php echo $row['reci_id'];?>"><i class="bi bi-trash"></i></i></a></td>                           
                    </tr>
                <?php
                      $i++;
                    }
                  }
                ?>
                </tbody>
              </table>
            </div>                
          </div>
      </div>
<?php
include('templates/footer.php')
?>