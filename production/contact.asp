<%
'Sends an email

Dim mail
Set mail = Server.CreateObject("CDO.Message")

mail.AutoGenerateTextBody = false
mail.To = "info@corgisncritters.org"
mail.Cc="liechtywebdesign@gmail.com"
mail.From = "info@corgisncritters.org" 

mail.Subject = "Contact Us Form Received"

Dim req_vars
req_vars = ""

For Each Item In Request.Form 
 req_vars = req_vars & Item & ": " & Request.Form(Item) & "<br>"
Next

mail.HTMLBody = req_vars
mail.Send()

'Destroy the mail object!
Set mail = nothing

Response.Redirect("/confirmation.html")
%>
