<?php require 'header.php';?>

    <!-- main Content -->
    <section>
        <div class="container">
                                        <?php
                                            $kryars = Kryar::get_all_kryar();
                                            foreach($kryars as $kryar){
                                                echo $kryar->kryarname . '<br>';
                                            }
                                        ?>
        </div>
    </section>




    <!-- Footer part -->
<?php require 'footer.php';?>
  