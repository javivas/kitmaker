


<section id="sidebar" >
    <div data-role="navbar">
        <ul>
            <li><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>   
            <li><a href="<?php echo base_url() ?>admin/articulos_admin">Artículos</a></li>
            <li><a href="<?php echo base_url() ?>auth/logout">Logout <?php
                    $this->load->library('ion_auth');
                    echo $this->ion_auth->get_user_username();
                    ?></a></li>  
        </ul>
    </div>

</section>    
