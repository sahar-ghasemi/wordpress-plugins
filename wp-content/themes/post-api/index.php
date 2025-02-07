<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-*">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>
    <body>
    
        <div class="container mt-5">
            <div class="row">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()):the_post() ?>
                <div class="col-4">
                    <div class="card p-2 bg-light text-start" style="border-radius: 10px;">
                        <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail('full',[
                                'class'=>'img-fluid'
                            ]);
                        }
                        else{
                            $default_image_url = get_template_directory_uri() . '/assets/img/default-image.jpg';
                            echo '<img src="' . esc_url($default_image_url) . '" alt="default-image" style="width: 100%; height: 200px; object-fit: cover;"/>';                        }
                        ?>
                        <a href="<?php the_permalink(); ?>"><h5 class="py-2"><?php the_title()?></h5>                        </a>
                        <p><?php echo excerpt_limit() ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
</html>