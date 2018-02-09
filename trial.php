<html>
    <head>
        <title>
            What browser do you do have?
        </title>
        <script language="javascript">
            var begin, end
            function browserType()
            {
                if (navigator.appName == "Netscape") {
                    if (navigator.userAgent.indexOf("Firefox") > 0) {
                        begin = navigator.userAgent.indexOf("Firefox") +
                                "Firefox".length + 1;
                        end = navigator.userAgent.length;
                        document.getElementById("").innerHTML =
                                "You are using Firefox " +
                                navigator.userAgent.substring(begin, end);
                    }
                }
                if (navigator.appName == "Microsoft Internet Explorer") {
                    begin = navigator.userAgent.indexOf("MSIE ") +
                            "MSIE ".length;
                    if (navigator.userAgent.indexOf(";", begin) > 0) {
                        end = navigator.userAgent.indexOf(";", begin);
                    } else {
                        end = navigator.userAgent.indexOf(")", begin)
                                + 2;
                    }
                    document.getElementById("").innerHTML =
                            "You are using Internet Explorer " +
                            navigator.userAgent.substring(begin, end);
                }
            }
        </script>
        <script lang="javascript">
            var XMLHttpRequestObject = false;
            if (window.XMLHttpRequest) {
                XMLHttpRequestObject = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                XMLHttpRequestObject = new
                        ActiveXObject("Microsoft.XMLHTTP");
            }
            function getData(dataSource, divID)
            {
                if (XMLHttpRequestObject) {
                    var obj = document.getElementById(divID);
                    XMLHttpRequestObject.open("POST", dataSource);
                    XMLHttpRequestObject.setRequestHeader('Content-Type',
                            'application/x-www-form-urlencoded');
                    XMLHttpRequestObject.onreadystatechange = function ()
                    {
                        if (XMLHttpRequestObject.readyState == 4 &&
                                XMLHttpRequestObject.status == 200) {
                            obj.innerHTML = XMLHttpRequestObject.responseText;
                        }
                    }
                    XMLHttpRequestObject.send("data=" + data);
                }
            }
        </script>

    </head>
    <body>

        <form>
            <input type = "button" value = "Fetch the message"
                   onclick = "getData('display_image.php', 'targetDiv')">
        </form>
        <div id="targetDiv">
            <img height="200" width="300" src='<?php echo $image_src; ?>'>
        </div>
    </body>
</html>