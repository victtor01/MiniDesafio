<header class="menu_list">
        <ul class="centralize">
            <?php if(! isset($_SESSION['id'])) {?>
                <li class="li"><a href="/login"> Login </a></li>
                <li class="li"><a href="/register"> Register </a></li>
                <li class="li"><a href="/"> Home </a></li>
            <?php } ?>
            <?php if(isset ($_SESSION['id'])){ ?>
                <h2> <?php echo $_SESSION['nome'] ?> </h2>
            <?php } ?>
        </ul>
        <div class="right centralize" style="height: 100%;">
            <ul>
                <?php if(! isset($_SESSION['id'])) { ?>
                <li class="li"> Bem Vindo! </li>
                <?php } else{ ?>
                <li class="li"> User <?php echo $_SESSION['id'] ?> </li>
                <li class="li"> <a href="user/logout"> Sair </a> </li>
                <?php } ?>
            </ul>
        </div>
</header>