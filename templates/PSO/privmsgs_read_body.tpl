
<form method="post" action="{S_PRIVMSGS_ACTION}"><table width="80%" cellspacing="0" cellpadding="4" border="0" align="center">
	<tr>
		<td align="left"><span class="gensmall"><a href="{U_INDEX}">{SITENAME}&nbsp;{L_INDEX}</a></span></td>
	</tr>
</table>

<table border="0" cellpadding="1" cellspacing="0" width="80%" align="center">
	<tr>
		<td class="tablebg"><table border="0" cellpadding="4" cellspacing="1" width="100%">
			<tr>
		        <td class="cat"><table width="100%" cellspacing="0" cellpadding="0" border="0"> 
					<tr>
						<td><span class="cattitle">{INBOX_IMG} {INBOX_LINK} &nbsp; {SENTBOX_IMG} {SENTBOX_LINK} &nbsp; {OUTBOX_IMG} {OUTBOX_LINK} &nbsp; {SAVEBOX_IMG} {SAVEBOX_LINK}</span></td>
						<td align="right">{QUOTE_PM_IMG} {REPLY_PM_IMG} {EDIT_PM_IMG}</td>
					</tr>
      			</table></td>
			</tr>
			<tr>
				<th>{BOX_NAME} :: {L_MESSAGE}</th>
			</tr>
			<tr>
				<td class="row2" align="left"><table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td width="10%" align="left"><span class="gen"><b>{L_SUBJECT}:</b></span></td>
						<td align="left"><span class="gen">{POST_SUBJECT}</span></td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td class="row1" align="left"><table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td width="10%" align="left"><span class="gen"><b>{L_POSTED}:</b></span></td>
						<td align="left"><span class="gen">{POST_DATE}</span></td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td class="row2" align="left"><table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td width="10%" align="left"><span class="gen"><b>{L_FROM}:</b></span></td>
						<td align="left"><span class="gen">{MESSAGE_FROM}</span></td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td class="row1" align="left"><table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td width="10%" align="left"><span class="gen"><b>{L_TO}:</b></span></td>
						<td align="left"><span class="gen">{MESSAGE_TO}</span></td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td class="row2" height="100%" align="center"><table style="height:100%" width="100%" height="100%" cellspacing="1" cellpadding="0" border="0">
					<tr>
						<td height="100%" valign="top"><span class="gen">{MESSAGE}</span><hr />{PROFILE_IMG} {EMAIL_IMG} {SEARCH_IMG} {WWW_IMG} {ICQ_STATUS_IMG} {ICQ_ADD_IMG} {AIM_IMG} {YIM_IMG} {MSN_IMG}</td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td class="cat"><table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td>{QUOTE_PM_IMG} {REPLY_PM_IMG} {EDIT_PM_IMG}</td>
						<td align="right" valign="middle">{S_HIDDEN_FIELDS}<input type="submit" name="save" value="Save Post">&nbsp;<input type="submit" name="delete" value="Delete Post"></td>
					</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table></form>

<table width="80%" cellspacing="2" border="0" align="center">
	<tr>
		<td width="40%" valign="top"><span class="gensmall"><b>{S_TIMEZONE}</b></span></td>
		<td align="right" valign="top" nowrap>{JUMPBOX}</td>
	</tr>
</table>
