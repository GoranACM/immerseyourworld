$(document).ready(function(){

  var searchIcon = $("#searchicon");
  var searchInput = $("#searchinput");

    searchIcon.click(function(){
        searchInput.toggle("slow").focus();
    });

    searchInput.on('input', function(event) {
      event.preventDefault();
      showResult(event.target.value);
    });


    function showResult(str) {

      if (str.length==0) {
        document.querySelector(".search__results").innerHTML="";
        document.querySelector(".search__results").style.border="0px";
        return;
      }
      if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.querySelector(".search__results").innerHTML=this.responseText;
          // document.querySelector(".search__results").style.border="1px solid #A5ACB2";
        }
      }
      xmlhttp.open("GET","livesearch.php?q="+str,true);
      xmlhttp.send();
    }

});
