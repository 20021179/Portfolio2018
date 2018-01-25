<% @Language="JavaScript" %>
<html>
<head>
<title>Title</title>
</head>

<body>
	<%=Application("chatSoFar")%>
	</br>
	<form action="addToChat.asp" method="post">
	Name: <input 
			type="text" 
			name="name" 
			value="<%=Session('name')%>">
	</br>
	<textarea name="chatArea" value=""></textarea>
</br>
<input type="submit" value="Send">

</form>
</body>
</html>
