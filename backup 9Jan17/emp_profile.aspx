<%@ Page Language="C#" MasterPageFile="~/empmaster.master" AutoEventWireup="true" CodeFile="emp_profile.aspx.cs" Inherits="emp_profile" Title="Untitled Page" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<table><tr><td style="text-align:center;">
 <center><TABLE><TBODY><TR><TD style="width:200px;"><BR /><BR /><IMG alt="" src="" /></TD><TD><H2>Employee Profile</H2>&nbsp; &nbsp; <BR /><BR /><asp:LinkButton ID="lnkedit" Text="Edit Profile" runat="server" OnClick="lnkedit_click"></asp:LinkButton><asp:Label id="lblempid" runat="server" Text=""></asp:Label><BR /><TABLE><TBODY><TR><TD align=right colSpan=3></TD></TR><TR><TD style="WIDTH: 110px"><%--ID--%></TD><TD style="WIDTH: 264px"><asp:Label id="lblid" runat="server" Visible="false"></asp:Label></TD><TD style="WIDTH: 490px"></TD></TR><TR><TD style="WIDTH: 200px">Employee Id</TD><TD><asp:TextBox id="txtemp_id" runat="server" ReadOnly="true" MaxLength="30" Width="258px"></asp:TextBox></TD><TD></TD></TR><TR><TD>Employee Name</TD><TD><asp:TextBox id="txtemp_nm" runat="server" ReadOnly="True" MaxLength="30" Width="258px"></asp:TextBox></TD><TD></TD></TR><TR><TD>Birth Date</TD><TD><asp:DropDownList id="ddldate" runat="server" Enabled="False"><asp:ListItem>Date</asp:ListItem>
<asp:ListItem>1</asp:ListItem>
<asp:ListItem>2</asp:ListItem>
<asp:ListItem>3</asp:ListItem>
<asp:ListItem>4</asp:ListItem>
<asp:ListItem>5</asp:ListItem>
<asp:ListItem>6</asp:ListItem>
<asp:ListItem>7</asp:ListItem>
<asp:ListItem>8</asp:ListItem>
<asp:ListItem>9</asp:ListItem>
<asp:ListItem>10</asp:ListItem>
<asp:ListItem>11</asp:ListItem>
<asp:ListItem>12</asp:ListItem>
<asp:ListItem>13</asp:ListItem>
<asp:ListItem>14</asp:ListItem>
<asp:ListItem>15</asp:ListItem>
<asp:ListItem>16</asp:ListItem>
<asp:ListItem>17</asp:ListItem>
<asp:ListItem>18</asp:ListItem>
<asp:ListItem>19</asp:ListItem>
<asp:ListItem>20</asp:ListItem>
<asp:ListItem>21</asp:ListItem>
<asp:ListItem>22</asp:ListItem>
<asp:ListItem>23</asp:ListItem>
<asp:ListItem>24</asp:ListItem>
<asp:ListItem>25</asp:ListItem>
<asp:ListItem>26</asp:ListItem>
<asp:ListItem>27</asp:ListItem>
<asp:ListItem>28</asp:ListItem>
<asp:ListItem>29</asp:ListItem>
<asp:ListItem>30</asp:ListItem>
<asp:ListItem>31</asp:ListItem>
</asp:DropDownList> <asp:DropDownList id="ddlmonth" runat="server" Width="62px" Height="20px" Enabled="False"><asp:ListItem>Month</asp:ListItem>
<asp:ListItem>Jan</asp:ListItem>
<asp:ListItem>Feb</asp:ListItem>
<asp:ListItem>Mar</asp:ListItem>
<asp:ListItem>Apr</asp:ListItem>
<asp:ListItem>May</asp:ListItem>
<asp:ListItem>Jun</asp:ListItem>
<asp:ListItem>Jul</asp:ListItem>
<asp:ListItem>Aug</asp:ListItem>
<asp:ListItem>Sep</asp:ListItem>
<asp:ListItem>Oct</asp:ListItem>
<asp:ListItem>Nov</asp:ListItem>
<asp:ListItem>Dec</asp:ListItem>
</asp:DropDownList> <asp:DropDownList id="ddlyear" runat="server" Width="57px" Height="20px" Enabled="False"><asp:ListItem>Year</asp:ListItem>
</asp:DropDownList> </TD><TD><asp:Label id="lbldate" runat="server" Text="" ForeColor="Red" Visible="false"></asp:Label></TD></TR><TR><TD>Designation</TD><TD><asp:TextBox id="txtdesig" runat="server" ReadOnly="True" MaxLength="60" Width="258px"></asp:TextBox></TD><TD></TD></TR><TR><TD>Mobile No</TD><TD><asp:TextBox id="txtmobno" runat="server" ReadOnly="True" MaxLength="10" Width="258px"></asp:TextBox></TD><TD><asp:Label id="lblmoberr" runat="server" Text="" ForeColor="Red"></asp:Label></TD></TR><TR><TD>Email</TD><TD><asp:TextBox id="txtemail" runat="server" ReadOnly="True" MaxLength="30" Width="258px"></asp:TextBox></TD><TD><asp:Label id="lblemailerr" runat="server" Text="" ForeColor="Red"></asp:Label></TD></TR><TR><TD>Blood Group</TD><TD><asp:DropDownList id="txt_bloodgr" runat="server" Width="258px" Enabled="False"><asp:ListItem>Select</asp:ListItem>
<asp:ListItem>A+</asp:ListItem>
<asp:ListItem>B+</asp:ListItem>
<asp:ListItem>AB+</asp:ListItem>
<asp:ListItem>O+</asp:ListItem>
<asp:ListItem>A-</asp:ListItem>
<asp:ListItem>B-</asp:ListItem>
<asp:ListItem>AB-</asp:ListItem>
<asp:ListItem>O-</asp:ListItem>
</asp:DropDownList></TD><TD></TD></TR><TR><TD>Address</TD><TD><asp:TextBox style="resize: none" id="txtaddr" runat="server" ReadOnly="True" MaxLength="50" Width="258px" TextMode="MultiLine"></asp:TextBox></TD><TD></TD></TR><TR><TD></TD><TD colSpan=2><asp:Button id="btnsubmit" onclick="btnsubmit_Click" runat="server" Text="Update Profile" Width="100px" Height="30px" OnClientClick=" if(!chkempty())  return false;"></asp:Button></TD></TR><TR><TD></TD><TD colSpan=2><asp:Label id="lblmsg" runat="server" ForeColor="green"></asp:Label></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></center>
</td></tr></table>

</asp:Content>

