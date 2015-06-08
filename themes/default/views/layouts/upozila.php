<?php $this->beginContent('//layouts/main'); ?>
<!-- PAGE TOP -->
<section class="page-title">
    <div class="container">
        <header>
            <h2><!-- Page Title -->
                <?php echo ContentCategory::getCategoryName($_GET['id']); ?>
            </h2><!-- /Page Title -->
        </header>
    </div>			
</section>
<!-- /PAGE TOP -->
<!-- CONTENT -->
<section>
    <div class="container">
        <div id="blog" class="row">
            <!-- BLOG ARTICLE LIST -->
            <div class="col-md-9 col-sm-9">
                <?php echo $content; ?>
            </div>
            <!-- /BLOG ARTICLE LIST -->
            <!-- BLOG SIDEBAR -->
            <div class="col-md-3 col-sm-3">                
                <!-- search -->
                <!-- RECENT,POPULAR,COMMENTS -->
                <div class="widget">
                    <h3>UNION</h3>
                    <?php ContentCategory::get_category_list($_GET['id']); ?>
                </div>
                <!-- Advertisement -->
                <div class="widget">
                    <?php $this->get_advertisement(2); ?>                    
                </div>
                <!-- FB Like Box -->
                <div class="widget">
                    <?php
                    $this->widget('application.extensions.fbLikeBox.fbLikeBox', array(
                        'likebox' => array(
                            'url' => 'https://www.facebook.com/pages/upozilacom/740484829358173',
                            'header' => 'true',
                            'width' => '260',
                            'height' => '400',
                            'layout' => 'light',
                            'show_post' => 'false',
                            'show_faces' => 'true',
                            'show_border' => 'true',
                        )
                    ));
                    ?>                    
                </div>
            </div>
            <!-- /BLOG SIDEBAR -->
        </div>
    </div>
</section>
<!-- /CONTENT -->
<?php $this->endContent(); ?>