
<div class="d-flex justify-content-center">
    <div class="contenedor-letras">
        
        <?php 
            if(isset($_SESSION['Logged'])){
                if($_SESSION['Logged'] == 1){
                    echo '<h1 class="glitch" data-text="Bienvenido">Bienvenido</h1>';
                    echo '<h1 class="glitch" data-text="'.$_SESSION['User'].'">'.$_SESSION['User'].'</h1>';
                }else{
                    echo '<h1 class="glitch" data-text="Bienvenido">Bienvenido</h1>';
                }
                }else{
                    echo'<h1 class="glitch" data-text="Identificate">Identificate</h1>';
                }
        ?>   
    </div>
</div>
