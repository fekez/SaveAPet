<div id="contact" style="margin:20px 60px;">
        <h1 >Contact us</h1><br>
        <form name="left" action="?page=process" method="post" onsubmit="return check();" >
            <label style="margin:5px 0px;">Name (min 5 character): </label>
            <input type="text" id="name" name="name" size="20" minlength="5" maxlength="40" style="margin:5px 0px;" require><br>
            <label style="margin:5px 0px;">E-mail (require): </label>
            <input type="email" id="email" name="email" size="30" minlength="5" maxlength="40" style="margin:5px 0px;" require><br>
            <label style="margin:5px 0px;">Message (require): </label><br>
            <textarea id="text" name="text" cols="40" rows="10" style="margin:5px 0px;" minlength="1" require></textarea><br>
            <input id="send" type="submit" value="Send" style="margin:5x 0px;">
        </form>
</div>