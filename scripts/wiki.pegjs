
doc = t:(text)+{
	let str = "";
    for(let i in t){
    	str += t[i]
    }
    return str;
}

text = t:((sentence/img/link/block/br))+{
	let str = "";
    for(let i in t){
    	str += t[i];
    }
    return str;
}

block = !("\\") "{" t:text "}"{
	return "<div>" + t + "</div>"
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


sentence = t:(escape/char)+{
	let str = "";
    for(let i in t){
    	str += t[i];
    }
    return str;
}

escape = "\\" t:("\n" / "[" / "]" / "\\" / "(" / ")" / "#" / "{" / "}"/"!"){
	if(t == "\n")return "";
    return t;
}

br = [\n]{
	return "<br>"
}

char = [^\n!\[\]\\()#{}]
