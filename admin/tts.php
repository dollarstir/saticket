<?php  
include "db.php";


        $co=mysqli_query($conn,"SELECT * FROM voucher ");
        $result3=mysqli_num_rows($co);
             if ($result3 >= 1) {

             echo ' <div class="media">
                                <div class="icon ml-2">
                                     <i class="flaticon-cart-bag"></i>
                                 </div>
                        <div class="media-body text-right">
                                 <p class="widget-text mb-0">Vouchers</p>
                
                
                                 <p class="widget-numeric-value">'.$result3.'</p>
                        </div>
                    </div>
                                <p class="widget-total-stats mt-2"> '.$result3.'  total Vouchers</p>';
              
            
            }else {
            echo '  <div class="media">
                        <div class="icon ml-2">
                             <i class="flaticon-cart-bag"></i>
                        </div>
                        <div class="media-body text-right">
                                <p class="widget-text mb-0">Voucher</p>
                
                
                
                                <p class="widget-numeric-value">0</p>
                         </div>
                    </div>
                                 <p class="widget-total-stats mt-2"> No   Voucher </p>';
            }




        ?>