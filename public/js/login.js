define(['jquery','cookie'],function(){

	// console.log(2);

	$('#loginBtn').click(function(){
        $.ajax({
            type:'post',
            url:'/api/login',
            data:$('#loginForm').serialize(),
            dataType:'json',
            success:function(data){
                // console.log(data);
                if(data.code==200){
                    $.cookie('loginInfo',JSON.stringify(data.result),{path:'/'});
                    location.href='/main/index'
                }
            }
        });
        return false;

    });
});