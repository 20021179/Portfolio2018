<% @Language="JavaScript"%>

<%
	Application("chatSoFar")+=
		Request("name")+">>>"+Request("chatArea")+"<br/>";
	Session("name")=Request("name")+"";
	Response.Redirect("chatter.asp");
	%>