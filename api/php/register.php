<script language="JavaScript">
function onlyNumbers(evt)
{
	var e = event || evt; // for trans-browser compatibility
	var charCode = e.which || e.keyCode;

	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;

	return true;

}
</script>
<form method="POST" action="http://serverlistmc.tk/add/add.php" enctype="multipart/form-data" id="inputform" class="inputform">
<table border="0">
<tr>
<td style="font-family:sans;color:#7e7e7d;font-size:30px;">Name</td>
<td><input maxlength='25' id="name" type="text" name="name" value=""></td>
<td>|| Only enter the server name!</td>
</tr>
<tr>
<td style="font-family:sans;color:#7e7e7d;font-size:30px;">IP/Host</td>
<td><input id="ip" type="text" name="ip" value="">:<input value="25565" size="6" id="port" type="text" onkeypress="return onlyNumbers();" name="port"></td>
<td>|| Your IP/Host to your Minecraft server</td>
</tr>
<tr>
<td style="font-family:sans;color:#7e7e7d;font-size:30px;">Type</td>
<td> <select id="type" name="type" style="width: 215px; -moz-box-sizing: border-box;">
            <option value="Survival">Survival</option>
            <option  value="Creative">Creative</option>
            <option  value="Hunger game">Hunger game</option>
            <option  value="FTB">FTB</option>
            <option  value="Tekkit">Tekkit</option>
        </select></td>
<td>|| Your Type of your server</td>
</tr>
<tr>
<td style="font-family:sans;color:#7e7e7d;font-size:30px;">Website URL</td>
<td><input type="url" name="webpage"></td>
<td>|| Your Server Webpage</td>
</tr>
<tr>
<td style="font-family:sans;color:#7e7e7d;font-size:30px;">Banner</td>
<td><input type="file" name="file" id="file"><br></td>
<td>|| Banner to your Server</td>
</tr>
<tr>
<td style="font-family:sans;color:#7e7e7d;font-size:30px;">Description</td>
<td>
<textarea name="des" cols="30" rows="13"></textarea>
</td>
<td>|| Description of your Server</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit"></td>
<td></td>
</tr>
</table>
</form>
