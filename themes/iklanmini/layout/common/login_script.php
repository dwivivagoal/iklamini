<script>
    
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
    });

      // Or with jQuery
    
    $(document).ready(function(){
        
        $('.modal').modal();
    
        
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