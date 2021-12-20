<?php
    include("../header.php");
?>
<div class="container">
    <form action="adicionarZona.php" method="POST">
        <label for="" style="color: white;">
            Introdusca el nombre de la Zona:
            <input type="text" name="zona" class="form-control">
        </label>
        <br>
        <input type="submit" value="Registrar Zona" class="btn btn-success">
    </form>
</div>
<?php
    include("../footer.php");
?>
<script>
    var  c = 0;
    $('document').ready(function(){
        $('#sumar').click(function(){
            var c = $("#resul").val();
            c++;
             document.getElementById("resul").value = c;
        });
        $('#resta').click(function(){
            var c = $("#resul").val();
            if(c >= 1){
                c--;
            }
             document.getElementById("resul").value = c;
        });
    });
</script>