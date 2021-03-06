
doc = t:(text)+{
	let str = "";
    for(let i in t){
    	str += t[i]
    }
    return str;
}

text = t:((sentence/heading/img/link/block/br))+{
	let str = "";
    for(let i in t){
    	str += t[i];
    }
    return str;
}

block = !("\\") "{" t:text "}"{
	return "<div class='contents_table'>" + t + "</div>"
}


link = !("\\") "[" t:sentence "](" url:sentence ")"{
	return "<a href='" + url + "'>" + t + "</a>"
}

img = !("\\")"!["siz:sentence"]("url:sentence")"{
	let size = siz.split(",");
    let x = size[0] * 1;
    let y = size[1] * 1;
    return "<img src='" + url + "' width=" + x + " height=" + y + ">"
}

heading = !("\\")head:("#"+)t:sentence br{
	let len = head.length;
    if(len > 6)len = 6;
    return "<h" + len + " class='sub_title'>" + t + "</h" + len + ">"
}


sentence = t:(escape/char)+{
	let str = "";
    for(let i in t){
    	str += t[i];
    }
    return str;
}

escape = "\\" t:(newline / "[" / "]" / "\\" / "(" / ")" / "#" / "{" / "}"/"!"){
	if(t == "\n" || t == "\r\n" || t == "\r")return "";
    return t;
}

br = newline{
	return "<br>"
}
newline = "\r\n" /"\n" / "\r"

char = [^\n\r!\[\]\\()#{}]
