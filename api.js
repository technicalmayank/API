<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h1 id="firstName"></h1>
<script>
var getData=()=>{
var serializedData="{\"sort\":[{\"field\":\"firstName\",\"order\":\"asc\"},{\"field\":\"lastName\",\"order\":\"asc\"}],\"include\":[\"userName\",\"firstName\",\"lastName\",\"title\",\"emailAddress\"]}";
jQuery.ajax({
        url: "https://raywhiteapi.ep.dynamics.net/v1/members",
        type: "post",
        headers: {"X-APIKey": "C7C16245-4196-4884-AB77-3313738F77D0"},
        data: serializedData,
        dataType: 'json',
        contentType: "application/json",
        success:function(result){
        for(let i=0;i<result.data.length;i++){
            let value=result.data[i].value;
            console.log(value)

                $('#firstName').text(value.firstName)
            }
            
        }
    });
};
$(document).ready(function(){
    getData()
})
</script>

</body>
</html>