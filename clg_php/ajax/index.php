<html>
<head>
<title>PHP MVC Frameworks - Search Engine</title>
<script>
    function showName(str) {            
            if (str.length == 0) {
                //clear previous results
                document.getElementById("txtName").innerHTML = ""; 
                return;
            }                    

            var xmlhttp = new XMLHttpRequest();
            //The XMLHttpRequest method open() initializes a newly-created request, or 
            //re-initializes an existing one.
            xmlhttp.open("GET", "frameworks.php?name=" + str);

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == XMLHttpRequest.DONE) {
                    if(xmlhttp.status == 200)
                    {
                        document.getElementById("txtName").innerHTML = xmlhttp.responseText;
                    }
                }
            };
            //The XMLHttpRequest method send() sends the request to the server.
            xmlhttp.send();
        }
</script>
</head>
<body>
    <h2>PHP MVC Frameworks - Search Engine</h2>

    <p><b>Type the first letter of the PHP MVC Framework</b></p>

    <form>
        <p><input type="text" size="40" id="txtHint"  onkeyup="showName(this.value)"></p>
    </form>

    <p>Matches: <span id="txtName"></span></p>

</body>
</html>