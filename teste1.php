<script type="text/javascript">
function OnSubmitHandler(myForm)
{
   var fileUpload = document.getElementById('<% = FileUpload1.ClientID %>');
   

   myForm.action =  myForm.action + "?FilePath=" + fileUpload.value;


   return true;


}
</script>


<form id="Form1" method="post" runat="server" onsubmit="return OnSubmitHandler(this);">
...
<asp:FileUpload id="FileUpload1" ....  />


...
</form>