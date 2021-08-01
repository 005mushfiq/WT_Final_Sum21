function get(id){
    return document.getElementById(id);
}

function search(e){
    if(e.value==""){
        get("searchCat").innerHTML="";
        return;
    }
    var xhr= new XMLHttpRequest();
    xhr.open("GET","search_category.php?key="+e.value,true);
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            get("searchCat").innerHTML=this.responseText;
        }
    };
    xhr.send();
}