<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><h1 style="font-weight: bold; text-align: center; margin-top: 80px;"><?php echo $titulo; ?></h1></div>
        </div> 
        <div class="white"></div>  
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <center>
                    <iframe class="view-pdf" src="http://docs.google.com/gview?url=<?php echo base_url(); ?>/pdf/<?php echo $archivo ?>.pdf&embedded=true" width="100%" height="100%" frameborder="0"></iframe>
                </center>
            </div>
        </div>
        <div class="white"></div> 
    </div>
</div>