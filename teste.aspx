<asp:Content ID="Content1" ContentPlaceHolderID="PlaceHolderHeader" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="PlaceHolderForTitleAndIntro" Runat="Server">
    <table width="100%" cellpadding="2" cellspacing="0">
        <tr valign="top" class="ArticleTitle">
            <td style="padding-left:10px;" valign="middle">
                asp:FileUpload control</td>
        </tr>
        <tr>
            <td class="ArticleContents">
                FileUpload control allows users to upload file to the webserver.
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="PlaceHolderForContents" Runat="Server">
    <div class="ArticleContents">
        FileUpload control allows users to upload file to the server. When it is rendered on the page, it is implemented through &lt;input type=file /&gt; HTML tag.
        Its properties like <span class="DemoCP">BackColor, ForeColor, BorderColor, BorderStyle, BorderWidth, Height etc. </span>
        are implemented through style properites of &lt;input&gt;. 
        
        <!-- START - Demo Section -->
        <table class="DemoPlaceHolder" border="1" cellpadding="2" cellspacing="4">
            <tr>
                <td class="DemoTitle">
                    DEMO : FileUpload
                </td>
                <td align="right">
                    <a class="DemoShowSource" href="../../misc/codeviewer/default.aspx?pagename=~/tutorials/controls/fileupload.aspx" target="_blank">Show Source Code</a>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="lbl" AssociatedControlID="FileUpload1" runat="Server" Text="Select file to upload"></asp:Label>
                    <asp:FileUpload ID="FileUpload1" runat="Server" />
                    <asp:Button ID="btnSubmit" runat="Server" OnClick="UploadFileOnServer" Text="Upload File on the WeServer" />                
                </td>
                <td>
                   <asp:Label runat="Server" ID="lblMessage" ForeColor="blue" EnableViewState="False"></asp:Label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <!-- START - Server Side Code -->
                    <pre>
              // File upload control
              &lt;asp:FileUpload ID="FileUpload2" runat="Server" /&gt;
              
    // Fires when Button is clicked.
    protected void UploadFileOnServer(object sender, EventArgs e)
    {
        // limitation of maximum file size
        int intFileSizeLimit = 10;

        // get the full path of your computer
        string strFileNameWithPath = FileUpload1.PostedFile.FileName;
        // get the extension name of the file
        string strExtensionName = System.IO.Path.GetExtension(strFileNameWithPath);
        // get the filename of user file
        string strFileName = System.IO.Path.GetFileName(strFileNameWithPath);
        // get the file size
        int intFileSize = FileUpload1.PostedFile.ContentLength / 1024; // convert into byte

        // Restrict the user to upload only .gif or .jpg file
        strExtensionName = strExtensionName.ToLower();
        if (strExtensionName.Equals(".jpg") || strExtensionName.Equals(".gif"))
        {
            // Rstrict the File Size 
            if (intFileSize < intFileSizeLimit)
            {
                // upload the file on the server
                // you can save the file with any name, However as this is the sample so I have saved the file same name for all users. So it will overwrite your file with next user's who will test this tutorials.
                FileUpload1.PostedFile.SaveAs(Server.MapPath("~/UserFiles/Samples/") + "SampeFromTutorials" + strExtensionName);

                lblMessage.Text = "Uploaded file details &lt;hr /&gt;" +
                    "File path on your Computer: " + strFileNameWithPath + "&lt;br /&gt;" +
                    "File Name: " + strFileName + "&lt;br /&gt;" +
                    "File Extension Name: " + strExtensionName + "&lt;br /&gt;" +
                    "File Size: " + intFileSize.ToString();
            }
            else
            {
                lblMessage.Text = "File size exceeded than limit " + intFileSizeLimit + " KB, Please upload smaller file.";
            }
        }
        else
        {
            lblMessage.Text = "Only .jpg or .gif file are allowed, try again!";
            lblMessage.ForeColor = System.Drawing.Color.Red;
        }
    }
                        
                    </pre> 
                    <!-- END - Server Side Code -->
                </td>
            </tr>
        </table>
        <!-- END - Demo Section -->
        </div>
    <br />
</asp:Content>
<asp:Content ID="Content4" ContentPlaceHolderID="PlaceHolderFooter" Runat="Server">
</asp:Content>