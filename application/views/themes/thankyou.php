
    <style>
        @media (max-width:992px) {
            .set-this {
                object-fit: contain;
                width: 100%;
                margin-top: -71px;
                width: 100%;
            }
        }

        @media (min-width:768px) {
            .set-this {
                object-fit: contain;
                width: 100%;
                /* margin-top: 86px; */
                margin-top: -77px;
            }
        }
    </style>




    <!-- main-area -->
    <main>
        <section style="background:linear-gradient(to left,#0F3C5C,#00142E) ; padding: 40px 10px;">
            <div class="container" >
                <div class="row">

                    <div class="col-12 col-md-6 d-flex  justify-content-center ">
                        <div class="thimg">
                            <img src="<?php echo base_url();?>media/assets/images/slider/th.svg" height="300px" alt="">
                        </div>
                    </div>

                    

                    <div class="col-12 col-md-6">
                        <div class="container" style=" margin:10% auto;color:white">
                            <?php echo $response; ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
