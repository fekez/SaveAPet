<div class="row">
    <div class="col-lg-12" style="display:inline-block; width:100%; position: relative; text-align: center; color: white;">
        <img  style="width:100%; height:auto;" src="./images/<?=$pictures['homedog']['imagesource']?>" alt="<?=$pictures['homedog']['imagealt']?>">
        <div style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <p style="font-size:40px; font-family: Arial; font-weight:bold;">SAVE A PET FLORIDA</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h1 style="text-align:center; padding:20px 0px;">LEARN WHAT YOU CAN DO TO HELP</h1>
    </div>
</div>
<div class="row" style="display:inline-block; position: relative; left: 50%; transform: translateX(-50%);">
    <?php foreach ($home as $column){ ?>
        <div class="col-lg-3" style="width: 220px; text-align:center; vertical-align:top; display:inline-block; padding:20px 20px;">
            <td>
                <tr><img style="height:220px; width:auto; margin:0px; padding:0px;" src="./images/<?= $column['imagesource'] ?>"></tr>
                <tr><h3  style="font-size: 26px"><?= $column['title']?></h3></tr>
                <tr><p style="font-size: 18px; font-family:candara;"><?= $column['text']?></p></tr>
                <tr><a target="_blank" href="<?= $column['link']?>" style="padding:10px 15px; margin: 10px; background-color:<?= $column['color']?>; text-decoration: none; display: block; color: rgb(0, 0, 0); font-size: 18px; text-align: center; border-radius: 3px;">LEARN MORE</a></tr>
            </td>
        </div>
    <?php } ?>
</div>
            <p style="padding:20px;"> </p>
<div class="row justify-content-center" >
    <div class="col-lg-6 ">
        <iframe height="290" src="https://www.youtube.com/embed/9OjlvOKQPd4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-lg-6">
            <video height="290" controls>
            <source src="./images/<?=$video['src']?>" type="<?=$video['type']?>">
        </video>
    </div>
</div>
        <p style="padding:20px;"> </p>
<div class="row">
    <div class="col-lg-12" style="display:inline-block; width:100%; position: relative; text-align: center; color: white;">
        <img  style="width:100%; height:auto;" src="./images/<?=$pictures['homecat']['imagesource']?>" alt="<?=$pictures['homecat']['imagealt']?>">
        <div style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <p style="font-size:40px; font-family: Arial; font-weight:bold;">MAKE A NEW FRIEND TODAY</p>
        </div>
    </div>
</div>

   