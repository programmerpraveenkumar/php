<html>
    <head>
        <script type="text/javascript">
            var get={
                getVar:"some value",
                setVar:'',
                fun:function(getParam){alert(getParam);},
                getval:function(){get.getVar='value changed with in function';},
                newval:function(gett){get.setVar=gett;}
            };                        
            get.newval('send');
            alert(get.setVar);
        </script>        
    </head>
    <body onload=""></body>
</html>