<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>

	<li>File Name:<%$upload_data['client_name']%></li>
	<li>File Type:<%$upload_data['file_ext']%></li>
	<li>File Size:<%$upload_data['file_size']%></li>

</ul>

<ul>

	<li>Product:<%$test_result['product']%></li>
	<li>Release:<%$test_result['release']%></li>
	<li>Browser:<%$test_result['browser']%></li>
	<li>Locale:<%$test_result['locale']%></li>
	<li>Method:<%$test_result['method']%></li>

</ul>
<table border='1' cellpadding="0" cellspacing="0">
	<tr align='center'>
		<th>Component</th>
		<th>Could Be Automation</th>
		<th>Automated</th>
		<th>Passed</th>
		<th>Failed</th>
<!--		<th>Pass Rate</th> -->
		<th>Bug Info</th>
	</tr>
<%foreach from=$test_result['component'] key=key item=item%>
	<tr align='center'>
		<td><%$key%></td>
		<td><%$item.auto_available%></td>
		<td><%$item.auto_status%></td>
		<td><%$item.pass_test%></td>
		<td><%$item.fail_test%></td>
<!--		<td><%$item.pass_rate%></td>-->

		<%if $item.fail_test > 0%>
			<td>
				<table rules="rows" cellpadding="0" cellspacing="0" width='100%'>
					<tr align='center'>
						<th>Test Case</td>
						<th>Test Result</td>
						<th>Bug ID</th>
					</tr>
					<%foreach from=$item.bug_info key=bugkey item=bugitem%>
					<tr align='center'>
						<td width="50%"><%$bugkey%></td>
						<td>Failed</td>
						<td><%$bugitem%></td>
					</tr>
					<%/foreach%>
				</table>
			</td>
		<%/if%>
	</tr>
<%/foreach%>
</table>

</body>
</html>