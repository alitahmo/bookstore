<?php
$dbServerName= 'localhost';
$dbUserName="root";
$dbPassWord="";
$dbName="Bookstore";

$db_book_conn= mysqli_connect($dbServerName, $dbUserName, $dbPassWord, $dbName);
if (!$db_book_conn) {
    die("Connection failed to Bookstore Database procedural ".mysqli_connect_error());
}


      if(isset($_POST['request'])){
            $requests =mysqli_real_escape_string($db_book_conn, $_POST['request']);
            $requests =trim($requests);
            $sqlcodesearch="SELECT * FROM books WHERE bookname='$requests';"; 
            $resultsearch= mysqli_query($db_book_conn, $sqlcodesearch);
            $count = mysqli_num_rows($resultsearch);
      }      
     if ($count){
      }else{
            echo "<span class='text-danger fs-2 fw-bold text-center by-5 my-5 text-capitalize'> Please select or write a correct book name </span>";
      }
      while($bookRow = mysqli_fetch_assoc($resultsearch)){
            ?>
            <tr>
                  <th class="align-middle" scope="row"><?php echo ++$numbering;?></th>
                  <td class="align-middle"> <?php echo htmlspecialchars($bookRow['bookname']); ?> </td>
                  <td class="align-middle"> <?php echo htmlspecialchars($bookRow['kryarprice']); ?> </td>
                  <td class="text-center align-middle text-danger"><i class="fas fa-backspace"></i></td>
            </tr>
      <?php
      } ?>


