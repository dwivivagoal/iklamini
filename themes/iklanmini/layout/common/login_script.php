<script>
    
    $(document).ready(function(){
        $(".btn-iklanmini-login").on("click", function(){
            var dataSerial = $(this).serialize();
            $.ajax({
                url:"{URL_CHECK_LOGIN}",
                dataType:"JSON",
                type:"POST",
                data:dataSerial,
                success:function(rst){
                    alert(rst.msg);
                }
            })
            return false;
        })
    });
  
  
</script>    