<script >
    
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
      $('select').formSelect();
    });
       
       
       
    $("#btn-pasang").on("click", function(){
        var dataSerial = $("#form-pasang-iklan").serialize();
        alert('Pasang Iklan ' + dataSerial);
        return false;
    })
    
    $("#form-pasang-iklan").on("submit", function(){
            
    })
</script>    