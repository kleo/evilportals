function getOmnitureChannel()
{
var channelObj = document.getElementById('HeaderChannel');
if(channelObj == null)
{
return null;
}
return channelObj.innerHTML;
}