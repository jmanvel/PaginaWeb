<div class="container-fluid" style="background: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><h1 style="font-weight: bold; text-align: center; margin-top: 80px;"><?php echo $titulo; ?></h1></div>
        </div> 
        <div class="gray"></div>  
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <center>
                    <iframe class="iframe_ley" src="http://docs.google.com/gview?url=<?php echo base_url(); ?>/pdf/<?php echo $archivo ?>.pdf&embedded=true" width="100%" frameborder="0"></iframe>
                </center>
            </div>
        </div>
        <div class="gray"></div> 
    </div>
</div>