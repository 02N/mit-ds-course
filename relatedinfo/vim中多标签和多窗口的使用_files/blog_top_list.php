
var start = 1;

var _html = '<div class="blogpopMain"><div class="l">'
          + '<a href="http://blog.51cto.com/zt/374" target="_blank"><img src="http://blog.51cto.com/image/blog_top/upload/1360757952_index.jpg" width="105" height="105" /></a>'
          + '<p><a href="http://blog.51cto.com/zt/374" target="_blank">ƽ�⹤��������</a></p></div>'
          + '<div class="r"><h4 style="text-align:left;"><a href="http://51ctotopic.blog.51cto.com/2009463/1129576" target="_blank">������ǹ�Ǯ�������㻨���٣�</a></h4>'
          + '<ul>'
          + '<li><a href="http://davidzhang33.blog.51cto.com/3095817/1086228" target="_blank">ְ����Ӱ�۳�û����˿���뵱�ģ�</a></li>'
          + '<li><a href="http://6403426.blog.51cto.com/all/6393426/1" target="_blank">IT�����ձ�������������</a></li>'
          + '<li><a href="http://luckcy.blog.51cto.com/1037681/1105039" target="_blank">ְ������ζԴ���˾��ȱ�㣿</a></li>'
          + '<li><a href="http://wot.51cto.com/bigdata2013/index.html" target="_blank"style="color:red;">2013�����ݼ������ֵ������룡</a></li>'
          + '</ul>'
          + '</div></div>'
          + '';

jQuery('#showMessagerDim').show();

jQuery(function(){
//window.onload=function(){
   if(get_cookie('blog_top')==''&&start==1){
//	 show_pop();
	    jQuery.messager.showblogtop('', _html);
        var date=new Date();
	    var day = 1361116800000;//
	    date.setTime(day);
	    var test = date.getTime();
	    document.cookie="blog_top=yes;domain=.blog.51cto.com;expires="+date.toGMTString()+";path=/;";
    }
	jQuery("#showMessagerDim").click(function(){
		jQuery.messager.showblogtop('', _html);
		//removeIframe();
	});
//}
});


function get_cookie(Name) {
    var search = Name + "=";
    var returnvalue = "";
    if (document.cookie.length > 0) {
        offset = document.cookie.indexOf(search);
        if (offset != -1) {
            offset += search.length;

            end1 = document.cookie.indexOf(";", offset);

            if (end1 == -1)
            end1 = document.cookie.length;
            returnvalue=unescape(document.cookie.substring(offset, end1));
        }
    }
    return returnvalue;
}

