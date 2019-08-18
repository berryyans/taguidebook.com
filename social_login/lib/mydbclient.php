<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.3
*/error_reporting(6135);$Ub=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($Ub||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$zf=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($zf){$$X=$zf;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function trCheck(el){var tr=el.parentNode.parentNode;tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}
function tableCheck(){var tables=document.getElementsByTagName('table');for(var i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var trs=tables[i].getElementsByTagName('tr');for(var j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}
function formUncheck(id){var el=document.getElementById(id);el.checked=false;trCheck(el);}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var click=true;var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^table$/i.test(el.tagName)){return;}
if(/^(a|input|textarea)$/i.test(el.tagName)){click=false;}
el=el.parentNode;}
el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}
trCheck(el);}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxState=0;function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.3');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.3" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};if(originalFavicon){replaceFavicon(originalFavicon);}
if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll&&!/&order/.test(url)){scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),false,noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),'',false,noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
var jushRoot=location.protocol + '//www.adminer.org/static/';function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}
if(jushRoot){var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql_sqlset=jush.urls.sql[0]=jush.urls.sqlset[0]=jush.urls.sqlstatus[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';var pgsql='http://www.postgresql.org/docs/'+version+'/static/';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0]=pgsql+'$key';jush.urls.pgsqlset[0]=pgsql+'runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
function loginDriver(driver){var trs=driver.parentNode.parentNode.parentNode.rows;for(var i=1;i<trs.length;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}
function textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){if(target.setSelectionRange){var start=target.selectionStart;var scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.keyCode==27){var els=target.form.elements;for(var i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}
return false;}}
return true;}
var added='.',rowCount;function delimiterEqual(val,a,b){return(val==a+'_'+b||val==a+b||val==a+b.charAt(0).toUpperCase()+b.substr(1));}
function idfEscape(s){return s.replace(/`/,'``');}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var candidate;var val=field.value;for(var i=opts.length;i--;){var match=/(.+)`(.+)/.exec(opts[i].value);if(!match){if(candidate&&i==opts.length-2&&val==opts[candidate].value.replace(/.+`/,'')&&name=='fields[1]'){return;}
break;}
var table=match[1];var column=match[2];var tables=[table,table.replace(/s$/,''),table.replace(/es$/,'')];for(var j=0;j<tables.length;j++){table=tables[j];if(val==column||val==table||delimiterEqual(val,table,column)||delimiterEqual(val,column,table)){if(candidate){return;}
candidate=i;break;}}}
if(candidate){type.selectedIndex=candidate;type.onchange();}}
function editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return false;}
var match=/(\d+)(\.\d+)?/.exec(button.name);var x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var row=button.parentNode.parentNode;var row2=row.cloneNode(true);var tags=row.getElementsByTagName('select');var tags2=row2.getElementsByTagName('select');for(var i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}
tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var input=tags2[0];for(var i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}
tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}
if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}
tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}
added+='0';rowCount++;return true;}
function editingRemoveRow(button){var field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return true;}
var lastType='';function editingTypeChange(type){var name=type.name.substr(0,type.name.length-6);var text=selectValue(type);for(var i=0;i<type.form.elements.length;i++){var el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}
if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}
if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}
if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}
if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}
function editingLengthFocus(field){var td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var edit=document.getElementById('enum-edit');var val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function editingLengthBlur(edit){var field=edit.parentNode.firstChild;var val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function columnShow(checked,column){var trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function partitionByChange(el){var partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function partitionNameChange(el){var row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function foreignAddRow(field){field.onchange=function(){};var row=field.parentNode.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}
field.parentNode.parentNode.parentNode.appendChild(row);}
function indexesAddRow(field){field.onchange=function(){};var parent=field.parentNode.parentNode;var row=parent.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');for(var i=0;i<inputs.length;i++){inputs[i].name=inputs[i].name.replace(/indexes\[\d+/,'$&1');inputs[i].value='';}
parent.parentNode.appendChild(row);}
function indexesChangeColumn(field,prefix){var columns=field.parentNode.parentNode.getElementsByTagName('select');var names=[];for(var i=0;i<columns.length;i++){var value=selectValue(columns[i]);if(value){names.push(value);}}
field.form[field.name.replace(/\].*/,'][name]')].value=prefix+names.join('_');}
function indexesAddColumn(field,prefix){field.onchange=function(){indexesChangeColumn(field,prefix);};var select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;select.onchange();}
var column=field.parentNode.cloneNode(true);select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange();}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-\d+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/em+'em';}
lineSet[id]=true;}}}
that.style.left=left+'em';that.style.top=top+'em';}}
function schemaMouseup(ev,db){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var s='';for(var key in tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}
s=encodeURIComponent(s.substr(1));var link=document.getElementById('schema-link');link.href=link.href.replace(/[^=]+$/,'')+s;cookie('adminer_schema-'+db+'='+s,30);}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$c;return$c;}function
idf_unescape($oc){$Ec=substr($oc,-1);return
str_replace($Ec.$Ec,$Ec,substr($oc,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($be,$Ub=false){if(get_magic_quotes_gpc()){while(list($w,$X)=each($be)){foreach($X
as$Ac=>$W){unset($be[$w][$Ac]);if(is_array($W)){$be[$w][stripslashes($Ac)]=$W;$be[]=&$be[$w][stripslashes($Ac)];}else{$be[$w][stripslashes($Ac)]=($Ub?$W:stripslashes($W));}}}}}function
bracket_escape($oc,$xa=false){static$nf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($oc,($xa?array_flip($nf):$nf));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($B,$Y,$Ga,$Cc="",$rd="",$_c=false){static$s=0;$s++;$I="<input type='checkbox' name='$B' value='".h($Y)."'".($Ga?" checked":"").($rd?' onclick="'.h($rd).'"':'').($_c?" class='jsonly'":"")." id='checkbox-$s'>";return($Cc!=""?"<label for='checkbox-$s'>$I".h($Cc)."</label>":$I);}function
optionlist($ud,$ze=null,$Df=false){$I="";foreach($ud
as$Ac=>$W){$vd=array($Ac=>$W);if(is_array($W)){$I.='<optgroup label="'.h($Ac).'">';$vd=$W;}foreach($vd
as$w=>$X){$I.='<option'.($Df||is_string($w)?' value="'.h($w).'"':'').(($Df||is_string($w)?(string)$w:$X)===$ze?' selected':'').'>'.h($X);}if(is_array($W)){$I.='</optgroup>';}}return$I;}function
html_select($B,$ud,$Y="",$qd=true){if($qd){return"<select name='".h($B)."'".(is_string($qd)?' onchange="'.h($qd).'"':"").">".optionlist($ud,$Y)."</select>";}$I="";foreach($ud
as$w=>$X){$I.="<label><input type='radio' name='".h($B)."' value='".h($w)."'".($w==$Y?" checked":"").">".h($X)."</label>";}return$I;}function
confirm($Xa="",$Ke=false){return" onclick=\"".($Ke?"eventStop(event); ":"")."return confirm('".lang(0).($Xa?" (' + $Xa + ')":"")."');\"";}function
print_fieldset($s,$Jc,$Jf=false,$rd=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($rd)."return !toggle('fieldset-$s');\">$Jc</a></legend><div id='fieldset-$s'".($Jf?"":" class='hidden'").">\n";}function
bold($Ba){return($Ba?" class='active'":"");}function
odd($I=' class="odd"'){static$r=0;if(!$I){$r=-1;}return($r++%
2?$I:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($w,$X=null){static$Vb=true;if($Vb){echo"{";}if($w!=""){echo($Vb?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\").'": '.(isset($X)?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$Vb=false;}else{echo"\n}\n";$Vb=true;}}function
ini_bool($sc){$X=ini_get($sc);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$I;if(!isset($I)){$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$I;}function
q($P){global$f;return$f->quote($P);}function
get_vals($G,$Na=0){global$f;$I=array();$H=$f->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[]=$J[$Na];}}return$I;}function
get_key_vals($G,$g=null){global$f;if(!is_object($g)){$g=$f;}$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[$J[0]]=$J[1];}}return$I;}function
get_rows($G,$g=null,$j="<p class='error'>"){global$f;if(!is_object($g)){$g=$f;}$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_assoc()){$I[]=$J;}}elseif(!$H&&$f->error&&$j&&defined("PAGE_HEADER")){echo$j.error()."\n";}return$I;}function
unique_array($J,$u){foreach($u
as$t){if(ereg("PRIMARY|UNIQUE",$t["type"])){$I=array();foreach($t["columns"]as$w){if(!isset($J[$w])){continue
2;}$I[$w]=$J[$w];}return$I;}}$I=array();foreach($J
as$w=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w)){$I[$w]=$X;}}return$I;}function
where($Z){global$v;$I=array();foreach((array)$Z["where"]as$w=>$X){$I[]=idf_escape(bracket_escape($w,1)).(ereg('\\.',$X)||$v=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".exact_value($X));}foreach((array)$Z["null"]as$w){$I[]=idf_escape($w)." IS NULL";}return
implode(" AND ",$I);}function
where_check($X){parse_str($X,$Fa);remove_slashes(array(&$Fa));return
where($Fa);}function
where_link($r,$Na,$Y,$sd="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($Na)."&where%5B$r%5D%5Bop%5D=".urlencode((isset($Y)?$sd:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
cookie($B,$Y){global$ba;$Gd=array($B,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Gd[]=true;}return
call_user_func_array('setcookie',$Gd);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$X){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($ob,$N,$Ef){global$pb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($pb))."|username|".session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($ob!="server"||$N!=""?urlencode($ob)."=".urlencode($N)."&":"")."username=".urlencode($Ef).($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($z,$Wc=null){if(isset($Wc)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($z)?$z:$_SERVER["REQUEST_URI"]))][]=$Wc;}if(isset($z)){if($z==""){$z=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $z");exit;}}function
query_redirect($G,$z,$Wc,$ge=true,$Kb=true,$Qb=false){global$f,$j,$c;if($Kb){$Qb=!$f->query($G);}$Ge="";if($G){$Ge=$c->messageQuery("$G;");}if($Qb){$j=error().$Ge;return
false;}if($ge){redirect($z,$Wc.$Ge);}return
true;}function
queries($G=null){global$f;static$ee=array();if(!isset($G)){return
implode(";\n",$ee);}$ee[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$f->query($G);}function
apply_queries($G,$Ye,$Gb='table'){foreach($Ye
as$R){if(!queries("$G ".$Gb($R))){return
false;}}return
true;}function
queries_redirect($z,$Wc,$ge){return
query_redirect(queries(),$z,$Wc,$ge,false,!$ge);}function
remove_from_uri($Fd=""){return
substr(preg_replace("~(?<=[?&])($Fd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$cb){return" ".($D==$cb?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($w,$hb=false){$Sb=$_FILES[$w];if(!$Sb||$Sb["error"]){return$Sb["error"];}$I=file_get_contents($hb&&ereg('\\.gz$',$Sb["name"])?"compress.zlib://$Sb[tmp_name]":($hb&&ereg('\\.bz2$',$Sb["name"])?"compress.bzip2://$Sb[tmp_name]":$Sb["tmp_name"]));if($hb){$He=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$He,$me)){$I=iconv("utf-16","utf-8",$I);}elseif($He=="\xEF\xBB\xBF"){$I=substr($I,3);}}return$I;}function
upload_error($j){$Uc=($j==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($j?lang(1).($Uc?" ".lang(2,$Uc):""):lang(3));}function
repeat_pattern($E,$Kc){return
str_repeat("$E{0,65535}",$Kc/65535)."$E{0,".($Kc
%
65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$Kc=80,$Oe=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Kc).")($)?)u",$P,$_)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Kc).")($)?)",$P,$_);}return
h($_[1]).$Oe.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($be,$pc=array()){while(list($w,$X)=each($be)){if(is_array($X)){foreach($X
as$Ac=>$W){$be[$w."[$Ac]"]=$W;}}elseif(!in_array($w,$pc)){echo'<input type="hidden" name="'.h($w).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($R){global$c;$I=array();foreach($c->foreignKeys($R)as$m){foreach($m["source"]as$X){$I[$X][]=$m;}}return$I;}function
enum_input($V,$ua,$k,$Y,$_b=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$k["length"],$Pc);$I=(isset($_b)?"<label><input type='$V'$ua value='$_b'".((is_array($Y)?in_array($_b,$Y):$Y===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($Pc[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ga=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$I.=" <label><input type='$V'$ua value='".($r+1)."'".($Ga?' checked':'').'>'.h($c->editVal($X,$k)).'</label>';}return$I;}function
input($k,$Y,$o){global$uf,$c,$v;$B=h(bracket_escape($k["field"]));echo"<td class='function'>";$oe=($v=="mssql"&&$k["auto_increment"]);if($oe&&!$_POST["save"]){$o=null;}$ec=(isset($_GET["select"])||$oe?array("orig"=>lang(5)):array())+$c->editFunctions($k);$ua=" name='fields[$B]'";if($k["type"]=="enum"){echo
nbsp($ec[""])."<td>".$c->editInput($_GET["edit"],$k,$ua,$Y);}else{$Vb=0;foreach($ec
as$w=>$X){if($w===""||!$X){break;}$Vb++;}$qd=($Vb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($k["field"])))."]']; if ($Vb > f.selectedIndex) f.selectedIndex = $Vb;\"":"");$ua.=$qd;echo(count($ec)>1?html_select("function[$B]",$ec,!isset($o)||in_array($o,$ec)||isset($ec[$o])?$o:"","functionChange(this);"):nbsp(reset($ec))).'<td>';$uc=$c->editInput($_GET["edit"],$k,$ua,$Y);if($uc!=""){echo$uc;}elseif($k["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$k["length"],$Pc);foreach($Pc[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ga=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$B][$r]' value='".(1<<$r)."'".($Ga?' checked':'')."$qd>".h($c->editVal($X,$k)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$k["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$B'$qd>";}elseif(ereg('text|lob',$k["type"])){echo"<textarea ".($v!="sqlite"||ereg("\n",$Y)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ua>".h($Y).'</textarea>';}else{$Vc=(!ereg('int',$k["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$k["length"],$_)?((ereg("binary",$k["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$k["unsigned"]?1:0)):($uf[$k["type"]]?$uf[$k["type"]]+($k["unsigned"]?0:1):0));echo"<input value='".h($Y)."'".($Vc?" maxlength='$Vc'":"").(ereg('char|binary',$k["type"])&&$Vc>20?" size='40'":"")."$ua>";}}}function
process_input($k){global$c;$oc=bracket_escape($k["field"]);$o=$_POST["function"][$oc];$Y=$_POST["fields"][$oc];if($k["type"]=="enum"){if($Y==-1){return
false;}if($Y==""){return"NULL";}return+$Y;}if($k["auto_increment"]&&$Y==""){return
null;}if($o=="orig"){return($k["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($k["field"]):false);}if($o=="NULL"){return"NULL";}if($k["type"]=="set"){return
array_sum((array)$Y);}if(ereg('blob|bytea|raw|file',$k["type"])&&ini_bool("file_uploads")){$Sb=get_file("fields-$oc");if(!is_string($Sb)){return
false;}return
q($Sb);}return$c->processInput($k,$Y,$o);}function
search_tables(){global$c,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Zb=false;foreach(table_status()as$R=>$S){$B=$c->tableName($S);if(isset($S["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$H=$f->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($R),array())),1));if($H->fetch_row()){if(!$Zb){echo"<ul>\n";$Zb=true;}echo"<li><a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$B</a>\n";}}}echo($Zb?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($nc,$dd=false){global$c;$I=$c->dumpHeaders($nc,$dd);$Dd=$_POST["output"];if($Dd!="text"){header("Content-Disposition: attachment; filename=".friendly_url($nc!=""?$nc:(SERVER!=""?SERVER:"localhost")).".$I".($Dd!="file"&&!ereg('[^0-9a-z]',$Dd)?".$Dd":""));}session_write_close();return$I;}function
dump_csv($J){foreach($J
as$w=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X===""){$J[$w]='"'.str_replace('"','""',$X).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($o,$Na){retu