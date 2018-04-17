<%@ Page Language="C#" MasterPageFile="~/mspfull.master" AutoEventWireup="true" CodeFile="sitemap.aspx.cs" Inherits="sitemap" Title="Sitemap" %>

<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<div class="title"><h2>SiteMap</h2></div>
<table align="center"  cellpadding="0">
<tr><td width="300px">

<asp:TreeView ID="TreeView1" ShowLines="true" runat="server" Font-Size="Medium" >
      <NodeStyle Font-Names="verdana" Font-Size="10pt" ForeColor="DarkBlue" HorizontalPadding="2" NodeSpacing="5px"/>
      <RootNodeStyle Font-Bold="True" Font-Names="verdana" Font-Size="10pt"/>
      <ParentNodeStyle Font-Bold="true" />
   
   <Nodes> 
      <asp:TreeNode Text="Home"  Expanded="false" PopulateOnDemand="true"  NavigateUrl="~/Default.aspx">
     </asp:TreeNode> 
   </Nodes>
    
      <Nodes>
        <asp:TreeNode Text="About Us" Expanded="false" PopulateOnDemand="true"   NavigateUrl="~/about.aspx">
        </asp:TreeNode>
      </Nodes>
      <Nodes>
      <asp:TreeNode Text="Team" Expanded="false" PopulateOnDemand="true"  NavigateUrl="~/team.aspx">
     
      </asp:TreeNode>
      </Nodes>
       <Nodes>
       
      <asp:TreeNode Text="Products"  Expanded="true" >
        <asp:TreeNode Text="Watercan Distribution System" NavigateUrl="~/jalseva.aspx" ImageUrl="~/images/right-arrow.gif" />
        <asp:TreeNode Text="Institute Management System" NavigateUrl="~/ims.aspx" ImageUrl="~/images/right-arrow.gif" />
        <asp:TreeNode Text="Online Objective Test Series" NavigateUrl="~/onlinetest.aspx" ImageUrl="~/images/right-arrow.gif"  />
        <asp:TreeNode Text="Matrimony Match Making" NavigateUrl="~/matrimony.aspx" ImageUrl="~/images/right-arrow.gif"  />
        <asp:TreeNode Text="Job Card Pro" NavigateUrl="~/job_card.aspx" ImageUrl="~/images/right-arrow.gif"  />
        <asp:TreeNode Text="Hospital ERP" NavigateUrl="~/hospital.aspx" ImageUrl="~/images/right-arrow.gif"  />
        <asp:TreeNode Text="MLM" NavigateUrl="~/mlm.aspx" ImageUrl="~/images/right-arrow.gif" />
        <asp:TreeNode Text="Hotel Pro"  NavigateUrl="~/hotel.aspx" ImageUrl="~/images/right-arrow.gif" />
         
          </asp:TreeNode>
     
    </Nodes>
    <Nodes>
      <asp:TreeNode Text="Portfolio" Expanded="false" PopulateOnDemand="true"   NavigateUrl="~/portfolio.aspx">
     
      </asp:TreeNode>
      </Nodes>
      <Nodes>
      <asp:TreeNode Text="Clientele" Expanded="false" PopulateOnDemand="true"  NavigateUrl="~/clientele.aspx">
     
      </asp:TreeNode>
      </Nodes>
      <Nodes>
      <asp:TreeNode Text="Weblinks" Expanded="true" >
     
        <asp:TreeNode Text="Sedna.biz" NavigateUrl="http://www.sedna.biz" ImageUrl="~/images/right-arrow.gif"/>
        <asp:TreeNode Text="Sms.sedna.biz" NavigateUrl="http://www.sms.sedna.biz" ImageUrl="~/images/right-arrow.gif"/> 
        <asp:TreeNode Text="Project.sedns.biz" NavigateUrl="http://www.project.sedna.biz" ImageUrl="~/images/right-arrow.gif"/>
        <asp:TreeNode Text="Jalseva.in" NavigateUrl="http://www.jalseva.in" ImageUrl="~/images/right-arrow.gif"/>  
        
       </asp:TreeNode>
      </Nodes>
      <Nodes>
      <asp:TreeNode Text="Contact Us" Expanded="true">
       <asp:TreeNode Text="Carrer" NavigateUrl="carrer.aspx" ImageUrl="~/images/right-arrow.gif"/>
        <asp:TreeNode Text="Contact Us" NavigateUrl="contact.aspx" ImageUrl="~/images/right-arrow.gif"/> 
      
      </asp:TreeNode>
      </Nodes>
      
      <Nodes>
      <asp:TreeNode Text="Sitemap" PopulateOnDemand="true" Expanded="false" >
     
      </asp:TreeNode>
      </Nodes>
      
    </asp:TreeView>
  </td><td width="35px"></td><td><img src="images/smap.png" alt="" /><br />
<%--<img src="images/smap.jpg" alt="" />--%>
</td></tr>
   </table>
</asp:Content>

