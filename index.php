<?php 
require 'header.php';
$db_book_conn= mysqli_connect("localhost", "root", "", "Bookstore");
    if (!$db_book_conn) {
        die("Connection failed to Bookstore Database procedural ".mysqli_connect_error());
    }
?>

    <!-- main Content -->
    <section>
        <div class="container bg-success py-2 text-dark bg-opacity-10">
                    <!-- START div on the top -->
            <div>
                    <p class="fs-4 mb-0 text-center fw-bold border text-capitalize">Add new shopping</p>
                    <div class="row">
                        <!-- two top columns part -->
                        
                        <!-- Left columns part -->
                        <div class="col-md-6">
                            <!-- form of add new Kryar -->
                            <form action="" method="POST">
                                <!-- First top columns part -->
                                <div class="row justify-content-center">
                                    <!-- top row -->
                                    <div class="fw-bold my-1 text-center bg-info w-75 text-capitalize py-1">shopping detail:</div>
                                </div>
                                <div class="row mb-1">
                                    <!-- ID of shopping -->
                                    <div class="col-lg-4">
                                        <!-- for in the label = id in input -->
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="far fa-id-card"></i></span>
                                            <input type="number" class="form-control pe-1" id="shopid" placeholder="ID">
                                        </div>
                                    </div>

                                    <!-- Title selection -->
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-text"><img src="images/title-icon.png" alt="Mr/Ms"></span>
                                            <select name="title" id="ptTitle" class="form-control">
                                                <option value="Not Selected"></option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Shopper">Shopper</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Gender selection -->
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-text  fs-5"><i class="fas fa-venus-mars"></i></span>
                                            <select name="gender" id="selectGender" class="form-control">
                                                <option value="Not Selected"></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Shopper">Shopper</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- selection of Gender based on title -->
                                    <script>
                                        $( "#ptTitle" )
                                        .change(function () {
                                            var selecteditle= $("#ptTitle").val();
                                            if(selecteditle=="Mr."){
                                                var selectgender= "Male";
                                                $("#selectGender").val(selectgender);
                                            }else if (selecteditle=="Ms."){
                                                var selectgender= "Female";
                                                $("#selectGender").val(selectgender);
                                            }else if (selecteditle=="Shopper"){
                                                var selectgender= "Shopper";
                                                $("#selectGender").val(selectgender);
                                            }else{
                                                $("#selectGender").val("");
                                                $("#ptTitle").val("");
                                            }
                                        })
                                    </script> <!-- END selection of Gender based on title -->
                                </div>
                                <!-- Pt Full name and email -->
                                <div class="row mb-1">
                                    <!-- Kryar Full name -->
                                    <div class="col-lg-10 col-md-10  mb-1">
                                        <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-user-plus"></i> </span>
                                                    <?php 
                                                            $kryars = Kryar::get_all_kryar();
                                                    ?>
                                                    <input type="text" class="form-control text-capitalized" list="kryarName" autocomplete="off"  name="name" placeholder="First Second Third Name">
                                                    <datalist id="kryarName">
                                                            <?php foreach($kryars as $kryar): ?>
                                                            <option value="<?php echo $kryar->kryarname ; ?>"><?php echo $kryar->kryarname ; ?></option>
                                                            <?php endforeach; ?>
                                                    </datalist>
                                        </div>
                                    </div>
                                    <!-- Kryar Email -->
                                    <div class="col-lg-2 col-md-2 ps-0">
                                        <input type="email" class="form-control ms-0 " name="email" placeholder="Email">
                                    </div>
                                </div> <!-- END Pt Full name & email -->

                                <!--  Age, Phone number -->
                                <div class="row mb-1">
                                    
                                    <!-- Kryar Age -->
                                    <div class="col-lg-6 col-md-6 mb-1">
                                        <div class="input-group">
                                            <span class="input-group-text ps-2">Age</span>
                                                <input type="number" class="form-control pe-0" name="age" id="" placeholder="Year">    
                                        </div>
                                    </div>
                                    <!-- Kryar Phone number -->
                                    <div class="col-lg-6 col-md-6 mb-1">
                                    <div class="input-group">
                                                <span class="input-group-text ps-2"><i class="bi bi-telephone-plus-fill"></i></span>
                                                    
                                                    <input type="text" class="form-control" list="kryarphonelist" autocomplete="off"  name="phone" placeholder="075012345678">
                                                    <datalist id="kryarphonelist">
                                                            <?php foreach($kryars as $kryar): ?>
                                                            <option value="<?php echo $kryar->kryarphone ;  ?>"><?php echo $kryar->kryarphone; ?></option>
                                                            <?php endforeach; ?>
                                                    </datalist>
                                        </div>
                                    </div>
                                </div> <!-- END Year of Birth, Age, Phone number -->

                                <!-- START  Outsource -->
                                <div class="row mb-1">
                                    <!--  People or shooper  -->
                                    <div class="col-lg-6 col-md-6 mb-1">
                                        <div class="input-group">
                                                <span class="input-group-text"><i class="fab fa-shopify"></i></span>
                                                    <select name="" class="form-control">
                                                        <option value="Not Selected">خەڵک یان دووکاندار</option>
                                                        <option value="People">People</option>
                                                        <option value="shooper">Shooper</option>
                                                    </select>
                                        </div>
                                    </div>
                                    <!-- Outsource Shoopers  -->
                                    <div class="col-lg-6 col-md-6 mb-1">
                                        <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-store"></i></span>
                                                    <?php
                                                            $shoppers = Shopper::get_all_shopper();
                                                    ?>
                                                <input type="text" class="form-control" name="" list="shopperName" autocomplete="off" placeholder="Shopper name">
                                                <datalist id="shopperName">
                                                    <?php foreach($shoppers as $shopper): ?>
                                                    <option value="<?php echo $shopper->shoppername; ?>"><?php echo $shopper->shoppername; ?></option>
                                                    <?php endforeach; ?>
                                                </datalist>
                                        </div>
                                    </div>
                                </div> <!-- END  Outsource -->
                                
                                <!-- Offer Kryar -->
                                <div class="row mb-1">
                                    <!-- Offer Kryar  -->
                                    <div class="col-lg-12 col-md-12 mb-1">
                                        <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-percent"></i></span>
                                                <input type="text" class="form-control" list="" autocomplete="off" placeholder="Offers">
                                        </div>
                                    </div>
                                </div> <!-- END Offer  Kryar  -->

                                <div class="row">
                                        <p class="fw-bold text-capitalize mb-2 ps-3">book list:</p>
                                </div>
                                <div class="row mb-1">
                                        <div class="input-group">
                                                    <?php
                                                        $books = Book::get_all_book();
                                                    ?>
                                                        <input class="form-control bookInputEner" type="text" name="" list="allbooklist" autocomplete="off" id="bookNameValue" value="<?php echo $bookValName;?>" placeholder="Write book name">
                                                        <datalist id="allbooklist">
                                                            <?php foreach($books as $book): ?>
                                                                <option class="bookInputOption" value="<?php echo $book->bookname; ?>"><?php echo $book->bookname; ?></option>
                                                            <?php endforeach; ?>
                                                        </datalist>
                                        </div>
                                </div>

                                <!-- books Table name place during Kryar registration -->
                                <div class="row mx-1">
                                    
                                    <table class="table table-striped bg-light table-hover">
                                        <thead>
                                            <tr class="justify-content-end">
                                                <th class="colorheader" style="width: 8%;" scope="col">#</th>
                                                <th class="colorheader" scope="col">book Name</th>
                                                <th class="colorheader" style="width: 20%;" scope="col">Price</th>
                                                <th class="colorheader" style="width: 20%;" scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                    
                                        
                                        <tbody class="booktable" id="">
                                            <tr>
                                                <td><p class="form-control">1</p>
                                                <td><input class="form-control" type="text"  autocomplete="off" id="" placeholder="Write book name"></td>
                                                <td><input class="form-control"  autocomplete="off" id="" placeholder="price"></td>
                                                <td><p class="form-control text-center align-middle"><i class="fas fa-backspace"></i></p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Ajax to add Book to booklist -->
                                   
                                <script>
                                    $(document).ready(function(){
                                        $("#bookNameValue").on('change',function(){
                                            var $bookValName =$("#bookNameValue").val();
                                            
                                            if($bookValName != ''){
                                                    $.ajax({
                                                    url:'addbook.php',
                                                    type:'POST',
                                                    data:"request=" + $bookValName, 
                                                    beforeSend: function(){
                                                        //like a loading during fetching data from database
                                                        $(".booktable").html("<span class='text-danger fs-2 fw-bold'> Working...... </span>");
                                                    },
                                                    // if the process success then run this function(data)
                                                    success: function(data){
                                                        // when data fetched write the location of showing
                                                        $(".booktable").last().after().html(data);
                                                    }
                                                })
                                            }
                                            else {
                                            alert("please add book to booklist then click on add book");
                                            }
                                        })
                                    })
                                </script>

                                
                            
                                <!-- Prices place during Kryar registration -->
                                <div class="row mb-1">
                                    <div class="col-lg-4 mb-1">
                                        <div class="input-group">
                                            <!--Text or icon - this span if before input attach the begining but if after input it attach at the end of input -->
                                            <span class="input-group-text">Total price</span>
                                            <input type="number" class="form-control" name="pttotalprice" id="totalPrice" placeholder="Total">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-1">
                                        <div class="input-group">
                                            <!--Text or icon - this span if before input attach the begining but if after input it attach at the end of input -->
                                            <span class="input-group-text">Balance</span>
                                            <input type="number" class="form-control" name="ptpricebalance" id="balancePrice" placeholder="remain">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-1">
                                        <div class="input-group">
                                            <!--Text or icon - this span if before input attach the begining but if after input it attach at the end of input -->
                                            <input type="number" class="form-control" id="discountPrice" placeholder="pay cash">
                                            <button type="submit" name="ptpricepaid" class="btn btn-dark paymentBtn">Pay</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Discount & reason for it -->
                                <div class="row mb-1">
                                    <div class="col-lg-4 mb-1">
                                        <div class="input-group">
                                            <!--Text or icon - this span if before input attach the begining but if after input it attach at the end of input -->
                                            <span class="input-group-text">Discount</span>
                                            <input type="number" class="form-control" name="ptpricediscount" id="discountPrice" placeholder="Discount">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 mb-1">
                                        <div class="input-group">
                                            <!--Text or icon - this span if before input attach the begining but if after input it attach at the end of input -->
                                            <span class="input-group-text">Reason</span>
                                            <input type="text" class="form-control" name="ptpricedicreason" id="discountPrice" placeholder="Reason for discount">
                                        </div>
                                    </div>
                                </div>
                                <!-- Save Button -->
                                <div class="row my-1">
                                    <div class="d-grid gap-2 col-lg-6 mx-auto">
                                        <button class="btn btn-outline-warning" type="submit" name="submit" value="submit">Add</button>
                                        <!-- <button class="btn btn-outline-danger fw-bold" type="submit" name="addptbtn">Save</button> -->
                                    </div>
                                </div>
                            </form><!-- form of add new Kryar -->
                        </div><!-- Left columns part -->





                            

                        <!-- Right columns part START -->
                        <div class="col-md-6"> <!-- Right top columns part START -->
                            <!-- To control full rigt conlumn by following div -->
                            <div class="row justify-content-center">
                                <!-- Title top book detail -->
                                <div class="fw-bold my-1 text-center bg-info w-75 text-capitalize py-1">book detail:</div>
                            </div>
                            <div class="me-2">
                                <!-- ddddd -->
                                <div class="row">
                                
                                    <!-- <div class="col-md-8 bg-light"> -->
                                    <div class="col bg-light">
                                        <!-- Kryar Table name place AFTER Kryar registration -->
                                        <div class="row mx-1 table-responsive" id="KryarLists">
                                            <table class="table table-striped bg-light table-reponsive table-hover">
                                                <thead>
                                                    <tr class="justify-content-end">
                                                        <th class="colorheader" scope="col">#</th>
                                                        <th class="colorheader" scope="col">Kryar Name</th>
                                                        <th class="colorheader text-center" style="width:15%;" scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                    <?php
                                                                foreach($kryars as $kryar){
                                                                    echo
                                                                    '<tbody>'.
                                                                        '<tr>'.
                                                                            '<td>'.$kryar->kryarid.'</td>'.
                                                                            '<td>'.$kryar->kryarname.'</td>'.
                                                                            '<td class="text-center align-middle"><a href="Kryaredit.php?id='.$kryar->kryarid.'"><i class="fas fa-user-edit"></i></a></td>'.
                                                                        '</tr>'.
                                                                    '</tbody>';
                                                                } 
                                                    ?>
                                            </table>                                       
                                        </div>
                                    </div>
                                </div>                           
                                <!-- ddddd -->
                            </div>
                            
                        </div><!-- Right top columns part END -->
                                

                    </div> <!-- END division part into cols and rows -->
                </div> <!-- END div on the top -->
            </div>    
        </div> <!-- End of main dic -->
    </section>




    <!-- Footer part -->
<?php require 'footer.php';?>
  
