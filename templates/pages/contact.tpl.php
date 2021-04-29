<div id="contact" style="margin:10px 60px; width:100%">
        <h1 >Contact us</h1><br>
        <form name="left" action="?page=process" method="post" onsubmit="return check();" >
            <div class="row">
                <div class="col-12 col-sm-12  col-md-12 col-lg-3 col-xl-3">
                    <label style="margin:5px 0px;">Name (min 5 character): </label>
                </div>
                <div class="col-12 col-sm-12  col-md-12 col-lg-9 col-xl-9">
                    <input type="text" id="name" name="name" size="25" minlength="5" maxlength="40" style="margin:5px 0px;" require>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12  col-md-12 col-lg-3 col-xl-3">
                    <label style="margin:5px 0px;">E-mail (require): </label>
                </div>
                <div class="col-12 col-sm-12  col-md-12 col-lg-9 col-xl-9">
                    <input type="email" id="email" name="email" size="25" minlength="5" maxlength="40" style="margin:5px 0px;" require>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12  col-md-12 col-lg-3 col-xl-3">
                    <label style="margin:5px 0px;">Message (require): </label>
                </div>
                <div class="col-12 col-sm-12  col-md-12 col-lg-9 col-xl-9">
                    <textarea id="text" name="text" cols="30" rows="10" style="margin:5px 0px;" minlength="1" require></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input id="send" type="submit" value="Send" style="margin:5x 0px;">
                </div>
            </div>
        </form>
</div>