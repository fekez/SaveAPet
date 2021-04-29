<footer>
<div class="row" id="contact">
    <div class="col-lg-4">
      <td>
        <ul style="list-style-type: none;">
          <li>FOLLOW</li>
          <li>
            <?php foreach ($footerlogo as $logo) {
            ?><a href="<?=$logo['link']?>"><img src="./images/<?= $logo['imagesource'] ?>" height="30px" width="auto" alt="<?=$logo['imagealt'] ?>"></a>
            <?php } ?>
          </li>
        </ul>
      </div>
      <div class="col-lg-4">
        <ul style="list-style-type: none;">
          <li><span>&#9872;</span> Save A Pet Florida, Inc.</li>
          <li>  PO Box 2444</li>
          <li>  Palm Beach, FL 33480</li>
        </ul>
      </div>
      <div class="col-lg-4">
        <ul style="list-style-type: none;">
          <li><span>&#9993;</span> saveapetflorida@gmail.com</li>
          <li><span>&#9990;</span> 561-835-9525</li>
        </ul>
      </div>
</div>
<div class="row">
    <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
  	&nbsp;
    <?php if(isset($footer['firm'])) { ?><?= $footer['firm']; ?><?php } ?>
  </div>
</div>
</footer>