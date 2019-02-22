Smarty 3 <a href="{BASE_URL}main/page2">Go To Page 2</a> | <a href="{BASE_URL}admin/super/admin">Go To Back End</a>
<br>

<PRE>

Title: {$title|capitalize}

The current date and time is {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}

The value of global assigned variable $SCRIPT_NAME is {$SCRIPT_NAME}

Example of accessing server environment variable SERVER_NAME: {$smarty.server.SERVER_NAME}

The value of {ldelim}$Name{rdelim} is <b>{$Name}</b>

variable modifier example of {ldelim}$Name|upper{rdelim}

<b>{$Name|upper}</b>


An example of a section loop:

{section name=outer
loop=$FirstName}
{if $smarty.section.outer.index is odd by 2}
{$smarty.section.outer.rownum} . {$FirstName[outer]} {$LastName[outer]}
{else}
{$smarty.section.outer.rownum} * {$FirstName[outer]} {$LastName[outer]}
{/if}
{sectionelse}
none
{/section}

An example of section looped key values:

{section name=sec1 loop=$contacts}
phone: {$contacts[sec1].phone}
<br>

fax: {$contacts[sec1].fax}
<br>

cell: {$contacts[sec1].cell}
<br>
{/section}

testing strip tags
{strip}
<table border=0>
<tr>
<td>
<A HREF="{$SCRIPT_NAME}">
<font color="red">This is a test </font>
</A>
</td>
</tr>
</table>
{/strip}

</PRE>