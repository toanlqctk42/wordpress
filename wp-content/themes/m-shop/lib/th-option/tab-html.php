<div class="wrap-th about-wrap-th theme_info_wrapper">
    <div class="header">

        <!-- themehunkhemes-badge wp-badge-->
<div class="th-option-area">
        <div class="th-option-top-hdr">
            <div class="col-1">
                <div class="logo-img">
                <a target="_blank" href="<?php echo $theme_header['theme_brand_url']; ?>/?wp=m-shop" class=""> <span class="logo-image"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/th-option/assets/images/icon.png"/><?php echo $theme_header['theme_brand']; ?></span></a>
            </div>
            </div>
            <div class="col-2">
                <div class="th-option-heading">
                    <h2><?php  echo $theme_header['welcome']; ?></h2>
                    <span><?php echo $theme_header['welcome_desc']; ?></span>
                </div>
                <span class="version"><?php echo $theme_header['v']; ?></span>
                <span><?php echo _e('FREE THEME','m-shop'); ?></span>
            </div>
        </div>
        <div class="th-option-bottom-hdr">
            <a class="tablinks active" onclick="openTab(event, 'Welcome')"><?php _e('Welcome','m-shop');?></a>
            <a class="tablinks" onclick="openTab(event, 'Recommended-Plugin')"><?php _e('Recommended Plugin','m-shop');?> </a>
            <a class="tablinks" onclick="openTab(event, 'Import-Demo-Content')"><?php _e('Demo Import','m-shop');?> </a>
            <a class="tablinks get-child" onclick="openTab(event, 'Get-Child-Theme')"><?php _e('Get Child Theme','m-shop');?></a>
            <a class="tablinks" onclick="openTab(event, 'Free-Vs-Pro')"><?php _e('Free Vs Pro','m-shop');?></a>
            <a class="tablinks" onclick="openTab(event, 'Help')"><?php _e('Help','m-shop');?></a>

        </div>
    </div>

    </div> <!-- /header -->




    </div>

<div class="content-wrap">
    <div class="main">

<div class="tab-left" >

        

        <!-- Tab content -->
        <div id="Welcome" class="tabcontent active">
            <div class="rp-two-column welcome-tabs">
        <?php include('welcome.php' ); ?>

            </div> <!-- close twocolumn -->
        </div>


          <div id="Import-Demo-Content" class="tabcontent">

            <div class="rp-two-column">

                <div class="rcp theme_link th-row import-demo">
                    <div class="import-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/th-option/assets/images/import.png">
                    </div>
                <div class="title-plugin">
                <h3><?php _e('Click Here To Import Demo Content','m-shop'); ?></h3>
				 
				 <p> <?php _e('You need to Install required plugins like- Themehunk Customizer, WooCommerce and One click demo import plugin. After installing required plugins import button will activate.', 'm-shop'); ?></p>
              <a class="button disabled importdemo"><?php _e( 'Import Demo', 'm-shop' ); ?></a>
				 
             </div>

             </div>
             
                  
                <?php $this->plugin_install('import-demo-content'); ?>
            
            </div>

        
        </div>

        <div id="Recommended-Plugin" class="tabcontent">
            <div class="rp-two-column">
            <?php $this->plugin_install(); ?>
            </div>
        </div>


            <div id="Free-Vs-Pro" class="tabcontent">
                <div class="rp-two-column">
                    <?php include('free-pro.php' ); ?>

                </div>
            </div>


            <div id="Get-Child-Theme" class="tabcontent">
                <div class="rp-two-column">
                    <?php require M_SHOP_THEME_DIR . 'lib/th-option/get-child-theme.php'; ?>

                </div>
            </div>

    <div id="Help" class="tabcontent">
        <div class="rp-two-column">
                    <?php include('need-help.php' ); ?>

        </div>
    </div>


</div> <!-- tab div close -->



<div class="sidebar-wrap">
    <div class="sidebar">
    <?php include('sidebar.php' ); ?>
    </div>
</div>


</div>
</div>