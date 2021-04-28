<footer style="padding:0; margin: 50px 0px 0px 0px; bottom:0px; left:0px;">
<div style="background-color: rgb(60, 60, 60); color: white; padding:15px 20px;">
  <table style="width:100%; font-size:17px;">
    <tr style="vertical-align:top; width:33%;">
      <td>
        <ul style="list-style-type: none;">
          <li>FOLLOW</li>
          <li>
            <?php foreach ($footerlogo as $logo) {
            ?><a href="<?=$logo['link']?>"><img src="./images/<?= $logo['imagesource'] ?>" height="30px" width="auto" alt="<?=$logo['imagealt'] ?>"></a>
            <?php } ?>
          </li>
        </ul>
      </td>
      <td style="vertical-align:top; width:33%;">
        <ul style="list-style-type: none;">
          <li><span>&#9872;</span> Save A Pet Florida, Inc.</li>
          <li>  PO Box 2444</li>
          <li>  Palm Beach, FL 33480</li>
        </ul>
      </td>
      <td style="vertical-align:top; width:33%;">
        <ul style="list-style-type: none;">
          <li><span>&#9993;</span> saveapetflorida@gmail.com</li>
          <li><span>&#9990;</span> 561-835-9525</li>
        </ul>
      </td>
    </tr>
  </table>
</div>
<div style="background-color: rgb(40, 40, 40); color: white; padding:15px 20px;">
    <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
  	&nbsp;
    <?php if(isset($footer['firm'])) { ?><?= $footer['firm']; ?><?php } ?>
</div>
</footer>