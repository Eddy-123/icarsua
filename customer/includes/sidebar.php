<div class="panel panel-default">
    <div class="panel-heading">
        <center>
            <img src="customer_images/sasha.png" alt="">
        </center>
        <br>
        <h3 class="panel-title" align="center">
            Acacha Pernelle
        </h3>
    </div>
    <div class="panel-body">
    
        <ul class="nav-pills nav-stacked nav">
        
            <li class="<?php if(isset($_GET['my_orders'])){echo "active";} ?>">
                <a href="my_account.php?my_orders">
                    Commandes
                </a>
            </li>

            <li class="<?php if(isset($_GET['pay_offline'])){echo "active";} ?>">
                <a href="my_account.php?pay_offline">
                    Payement hors ligne
                </a>
            </li>

            <li class="<?php if(isset($_GET['edit_account'])){echo "active";} ?>">
                <a href="my_account.php?edit_account">
                    Modifier compte
                </a>
            </li>

            <li class="<?php if(isset($_GET['change_pass'])){echo "active";} ?>">
                <a href="my_account.php?change_pass">
                    Modifier mot de passe
                </a>
            </li>

            <li class="<?php if(isset($_GET['delete_account'])){echo "active";} ?>">
                <a href="my_account.php?delete_account">
                    Supprimer mon compte
                </a>
            </li>

            <li>
                <a href="logout.php">
                    Déconnexion
                </a>                
            </li>
        </ul>
    </div>
    
</div>