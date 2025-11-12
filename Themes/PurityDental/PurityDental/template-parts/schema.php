
<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );


?>

<?php

if(get_option('location_two') == 0 && get_option('location_three') == 0):

?>
<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "<?php echo get_option('organization_type');?>",
"url": "<?php echo get_option( 'siteurl' );?>",
"logo": "<?php  echo $image[0];?>",
<?php $image_1 = get_option( 'location_image_1' );?>
<?php if(!empty($image_1)):?>
"image": "<?php echo get_option( 'location_image_1' );?>",
<?php endif;?>
"hasMap": "<?php echo get_option( 'direction_1' );?>",
"address": {
"@type": "PostalAddress",
"addressLocality": "<?php echo get_option( 'city_1' );?>",
"addressRegion": "<?php echo get_option( 'state_1' );?>",
"postalCode":"<?php echo get_option( 'zip_1' );?>",
"streetAddress": "<?php echo get_option( 'street_address_1' );?>"
},
"name": "<?php echo get_option( 'practice_name' );?>",
"telephone": "<?php echo get_option( 'phone_1' );?>",

  "openingHoursSpecification": [
    <?php
    $monday_open = get_option('monday_open');
    $tuesday_open = get_option('tuesday_open');
    $wednesday_open = get_option('wednesday_open');
    $thursday_open = get_option('thursday_open');
    $friday_open = get_option('friday_open');
    $saturday_open = get_option('saturday_open');
    ?>
    <?php if(!empty($monday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek":  "Monday",
      "opens": "<?php echo get_option('monday_open');?>",
      "closes": "<?php echo get_option('monday_close');?>"
    },
    <?php endif;?>
    <?php if(!empty($tuesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Tuesday",
      "opens": "<?php echo get_option('tuesday_open');?>",
      "closes": "<?php echo get_option('tuesday_close');?>"
    }
    <?php if(!empty($wednesday_open) || !empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    
    <?php endif;?>
    <?php if(!empty($wednesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Wednesday",
      "opens": "<?php echo get_option('wednesday_open');?>",
      "closes": "<?php echo get_option('wednesday_close');?>"
    }<?php if(!empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    
     <?php if(!empty($thursday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Thursday",
      "opens": "<?php echo get_option('thursday_open');?>",
      "closes": "<?php echo get_option('thursday_close');?>"
    }<?php if(!empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    
    <?php if(!empty($friday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Friday",
      "opens": "<?php echo get_option('friday_open');?>",
      "closes": "<?php echo get_option('friday_close');?>"
    }<?php if(!empty($saturday_open)): ?>,<?php endif;?>
    <?php endif;?>
    
    <?php if(!empty($saturday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "<?php echo get_option('saturday_open');?>",
      "closes": "<?php echo get_option('saturday_close');?>"
    }<?php endif;?>

  ],
  
"geo": {
"@type": "GeoCoordinates",
"latitude": "<?php echo get_option('lat_1');?>",
"longitude": "<?php echo get_option('long_1');?>"
},
"email": "<?php echo get_option('email');?>",
<?php
$facebook =  get_option('facebook');
$google_plus = get_option('google_plus');
$linkedin = get_option('linkedin');
$twitter = get_option('twitter');
$yelp = get_option('yelp');

$links = array();
if(!empty($facebook)){
    array_push($links, '"'.$facebook.'"');
    array_push($links, ",");
}
if(!empty($google_plus)){
    array_push($links, '"'.$google_plus.'"');
    array_push($links, ",");
}
if(!empty($linkedin)){
    array_push($links, '"'.$linkedin.'"');
    array_push($links, ",");
}
if(!empty($twitter)){
    array_push($links, '"'.$twitter.'"');
    array_push($links, ",");
}
if(!empty($yelp)){
    array_push($links, '"'.$yelp.'"');
    array_push($links, ","); 
}
array_pop($links);
?>

"sameAs" : [<?php foreach($links as $link):?><?php echo $link;?><?php endforeach;?>]


}
</script>
<?php endif;?>



<?php

if(get_option('location_two') == 1 && get_option('location_three') == 0):

?>
<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "Organization",
"url": "<?php echo get_option( 'siteurl' );?>",
"logo": "<?php  echo $image[0];?>",
"name": "<?php echo get_option( 'practice_name' );?>",
"department": 
    [
        {
            "@type": "<?php echo get_option('organization_type');?>",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "<?php echo get_option('city_1'); ?>",
                "addressRegion": "<?php echo get_option('state_1'); ?>",
                "postalCode": "<?php echo get_option('zip_1'); ?>",
                "streetAddress": "<?php echo get_option('street_address_1'); ?>"
            },  
 "openingHoursSpecification": [
    <?php
    $monday_open = get_option('monday_open');
    $tuesday_open = get_option('tuesday_open');
    $wednesday_open = get_option('wednesday_open');
    $thursday_open = get_option('thursday_open');
    $friday_open = get_option('friday_open');
    $saturday_open = get_option('saturday_open');
    ?>
    <?php if(!empty($monday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek":  "Monday",
      "opens": "<?php echo get_option('monday_open');?>",
      "closes": "<?php echo get_option('monday_close');?>"
    },
    <?php endif;?>    
    <?php if(!empty($tuesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Tuesday",
      "opens": "<?php echo get_option('tuesday_open');?>",
      "closes": "<?php echo get_option('tuesday_close');?>"
    }
    <?php if(!empty($wednesday_open) || !empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    
    <?php endif;?>
    <?php if(!empty($wednesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Wednesday",
      "opens": "<?php echo get_option('wednesday_open');?>",
      "closes": "<?php echo get_option('wednesday_close');?>"
    }<?php if(!empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
     <?php if(!empty($thursday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Thursday",
      "opens": "<?php echo get_option('thursday_open');?>",
      "closes": "<?php echo get_option('thursday_close');?>"
    }<?php if(!empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($friday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Friday",
      "opens": "<?php echo get_option('friday_open');?>",
      "closes": "<?php echo get_option('friday_close');?>"
    }<?php if(!empty($saturday_open)): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($saturday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "<?php echo get_option('saturday_open');?>",
      "closes": "<?php echo get_option('saturday_close');?>"
    }<?php endif;?>
  ],
            "telephone" : "<?php echo get_option( 'phone_1' );?>",
            "name": "<?php echo get_option( 'practice_name' );?>",
            <?php $image_1 = get_option( 'location_image_1' );?>
            <?php if(!empty($image_1)):?>
            "image": "<?php echo get_option( 'location_image_1' );?>",
            <?php endif;?>
            "hasMap": "<?php echo get_option( 'direction_1' );?>",
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": "<?php echo get_option('lat_1');?>",
              "longitude": "<?php echo get_option('long_1');?>"
              }
         },
        {
            "@type": "<?php echo get_option('organization_type');?>",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "<?php echo get_option('city_2'); ?>",
                "addressRegion": "<?php echo get_option('state_2'); ?>",
                "postalCode": "<?php echo get_option('zip_2'); ?>",
                "streetAddress": "<?php echo get_option('street_address_2'); ?>"
                },
 "openingHoursSpecification": [
    <?php
    $monday_open = get_option('monday_open');
    $tuesday_open = get_option('tuesday_open');
    $wednesday_open = get_option('wednesday_open');
    $thursday_open = get_option('thursday_open');
    $friday_open = get_option('friday_open');
    $saturday_open = get_option('saturday_open');
    ?>
    <?php if(!empty($monday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek":  "Monday",
      "opens": "<?php echo get_option('monday_open');?>",
      "closes": "<?php echo get_option('monday_close');?>"
    },
    <?php endif;?>
    <?php if(!empty($tuesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Tuesday",
      "opens": "<?php echo get_option('tuesday_open');?>",
      "closes": "<?php echo get_option('tuesday_close');?>"
    }
    <?php if(!empty($wednesday_open) || !empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($wednesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Wednesday",
      "opens": "<?php echo get_option('wednesday_open');?>",
      "closes": "<?php echo get_option('wednesday_close');?>"
    }<?php if(!empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
     <?php if(!empty($thursday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Thursday",
      "opens": "<?php echo get_option('thursday_open');?>",
      "closes": "<?php echo get_option('thursday_close');?>"
    }<?php if(!empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($friday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Friday",
      "opens": "<?php echo get_option('friday_open');?>",
      "closes": "<?php echo get_option('friday_close');?>"
    }<?php if(!empty($saturday_open)): ?>,<?php endif;?>
    <?php endif;?>
    
    <?php if(!empty($saturday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "<?php echo get_option('saturday_open');?>",
      "closes": "<?php echo get_option('saturday_close');?>"
    }<?php endif;?> 
  ],
            "telephone" : "<?php echo get_option( 'phone_2' );?>",
            "name": "<?php echo get_option( 'practice_name');?>",
            <?php $image_2 = get_option( 'location_image_2' );?>
            <?php if(!empty($image_2)):?>
            "image": "<?php echo get_option( 'location_image_2' );?>",
            <?php endif;?>
            "hasMap": "<?php echo get_option( 'direction_2' );?>",
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": "<?php echo get_option('lat_2');?>",
              "longitude": "<?php echo get_option('long_2');?>"
              }
        }
    ],
"email": "<?php echo get_option('email');?>",
<?php
$facebook =  get_option('facebook');
$google_plus = get_option('google_plus');
$linkedin = get_option('linkedin');
$twitter = get_option('twitter');
$yelp = get_option('yelp');
$links = array();
if(!empty($facebook)){
    array_push($links, '"'.$facebook.'"');
    array_push($links, ",");
}
if(!empty($google_plus)){
    array_push($links, '"'.$google_plus.'"');
    array_push($links, ",");
}
if(!empty($linkedin)){
    array_push($links, '"'.$linkedin.'"');
    array_push($links, ",");
}
if(!empty($twitter)){
    array_push($links, '"'.$twitter.'"');
    array_push($links, ",");
}
if(!empty($yelp)){
    array_push($links, '"'.$yelp.'"');
    array_push($links, ","); 
}
array_pop($links);
?>
"sameAs" : [<?php foreach($links as $link):?><?php echo $link;?><?php endforeach;?>]
}
</script>
<?php endif;?>

<?php

if(get_option('location_two') == 1 && get_option('location_three') == 1):

?>
<script type="application/ld+json">
{

"@context": "http://schema.org",
"@type": "Organization",
"url": "<?php echo get_option( 'siteurl' );?>",
"logo": "<?php  echo $image[0];?>",
"name": "<?php echo get_option( 'practice_name' );?>",
"department": 
    [
        {
            "@type": "<?php echo get_option('organization_type');?>",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "<?php echo get_option('city_1'); ?>",
                "addressRegion": "<?php echo get_option('state_1'); ?>",
                "postalCode": "<?php echo get_option('zip_1'); ?>",
                "streetAddress": "<?php echo get_option('street_address_1'); ?>"
            },
 "openingHoursSpecification": [
    <?php
    $monday_open = get_option('monday_open');
    $tuesday_open = get_option('tuesday_open');
    $wednesday_open = get_option('wednesday_open');
    $thursday_open = get_option('thursday_open');
    $friday_open = get_option('friday_open');
    $saturday_open = get_option('saturday_open');
    ?>
    <?php if(!empty($monday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek":  "Monday",
      "opens": "<?php echo get_option('monday_open');?>",
      "closes": "<?php echo get_option('monday_close');?>"
    },
    <?php endif;?>
    <?php if(!empty($tuesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Tuesday",
      "opens": "<?php echo get_option('tuesday_open');?>",
      "closes": "<?php echo get_option('tuesday_close');?>"
    }
    <?php if(!empty($wednesday_open) || !empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    
    <?php endif;?>
    <?php if(!empty($wednesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Wednesday",
      "opens": "<?php echo get_option('wednesday_open');?>",
      "closes": "<?php echo get_option('wednesday_close');?>"
    }<?php if(!empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
     <?php if(!empty($thursday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Thursday",
      "opens": "<?php echo get_option('thursday_open');?>",
      "closes": "<?php echo get_option('thursday_close');?>"
    }<?php if(!empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($friday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Friday",
      "opens": "<?php echo get_option('friday_open');?>",
      "closes": "<?php echo get_option('friday_close');?>"
    }<?php if(!empty($saturday_open)): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($saturday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "<?php echo get_option('saturday_open');?>",
      "closes": "<?php echo get_option('saturday_close');?>"
    }<?php endif;?>

  ],
            "telephone" : "<?php echo get_option( 'phone_1' );?>",
            "name": "<?php echo get_option( 'practice_name' );?>",
            <?php $image_1 = get_option( 'location_image_1' );?>
            <?php if(!empty($image_1)):?>
            "image": "<?php echo get_option( 'location_image_1' );?>",
            <?php endif;?>
            "hasMap": "<?php echo get_option( 'direction_1' );?>",
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": "<?php echo get_option('lat_1');?>",
              "longitude": "<?php echo get_option('long_1');?>"
              }
         },
        {
            "@type": "<?php echo get_option('organization_type');?>",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "<?php echo get_option('city_2'); ?>",
                "addressRegion": "<?php echo get_option('state_2'); ?>",
                "postalCode": "<?php echo get_option('zip_2'); ?>",
                "streetAddress": "<?php echo get_option('street_address_2'); ?>"
                },
 "openingHoursSpecification": [
    <?php
    $monday_open = get_option('monday_open');
    $tuesday_open = get_option('tuesday_open');
    $wednesday_open = get_option('wednesday_open');
    $thursday_open = get_option('thursday_open');
    $friday_open = get_option('friday_open');
    $saturday_open = get_option('saturday_open');
    ?>
    <?php if(!empty($monday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek":  "Monday",
      "opens": "<?php echo get_option('monday_open');?>",
      "closes": "<?php echo get_option('monday_close');?>"
    },
    <?php endif;?>
    <?php if(!empty($tuesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Tuesday",
      "opens": "<?php echo get_option('tuesday_open');?>",
      "closes": "<?php echo get_option('tuesday_close');?>"
    }
    <?php if(!empty($wednesday_open) || !empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($wednesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Wednesday",
      "opens": "<?php echo get_option('wednesday_open');?>",
      "closes": "<?php echo get_option('wednesday_close');?>"
    }<?php if(!empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
     <?php if(!empty($thursday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Thursday",
      "opens": "<?php echo get_option('thursday_open');?>",
      "closes": "<?php echo get_option('thursday_close');?>"
    }<?php if(!empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($friday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Friday",
      "opens": "<?php echo get_option('friday_open');?>",
      "closes": "<?php echo get_option('friday_close');?>"
    }<?php if(!empty($saturday_open)): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($saturday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "<?php echo get_option('saturday_open');?>",
      "closes": "<?php echo get_option('saturday_close');?>"
    }<?php endif;?>
  ],
            "telephone" : "<?php echo get_option( 'phone_2' );?>",
            "name": "<?php echo get_option( 'practice_name');?>",
            <?php $image_2 = get_option( 'location_image_2' );?>
            <?php if(!empty($image_2)):?>
            "image": "<?php echo get_option( 'location_image_2' );?>",
            <?php endif;?>
            "hasMap": "<?php echo get_option( 'direction_2' );?>",
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": "<?php echo get_option('lat_2');?>",
              "longitude": "<?php echo get_option('long_2');?>"
              }
        },
                {
            "@type": "<?php echo get_option('organization_type');?>",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "<?php echo get_option('city_3'); ?>",
                "addressRegion": "<?php echo get_option('state_3'); ?>",
                "postalCode": "<?php echo get_option('zip_3'); ?>",
                "streetAddress": "<?php echo get_option('street_address_3'); ?>"
                },
 "openingHoursSpecification": [
    <?php
    $monday_open = get_option('monday_open');
    $tuesday_open = get_option('tuesday_open');
    $wednesday_open = get_option('wednesday_open');
    $thursday_open = get_option('thursday_open');
    $friday_open = get_option('friday_open');
    $saturday_open = get_option('saturday_open');
    ?>
    <?php if(!empty($monday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek":  "Monday",
      "opens": "<?php echo get_option('monday_open');?>",
      "closes": "<?php echo get_option('monday_close');?>"
    },
    <?php endif;?>
    <?php if(!empty($tuesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Tuesday",
      "opens": "<?php echo get_option('tuesday_open');?>",
      "closes": "<?php echo get_option('tuesday_close');?>"
    }
    <?php if(!empty($wednesday_open) || !empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($wednesday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Wednesday",
      "opens": "<?php echo get_option('wednesday_open');?>",
      "closes": "<?php echo get_option('wednesday_close');?>"
    }<?php if(!empty($thursday_open) || !empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
     <?php if(!empty($thursday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Thursday",
      "opens": "<?php echo get_option('thursday_open');?>",
      "closes": "<?php echo get_option('thursday_close');?>"
    }<?php if(!empty($friday_open) || !empty($saturday_open) ): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($friday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Friday",
      "opens": "<?php echo get_option('friday_open');?>",
      "closes": "<?php echo get_option('friday_close');?>"
    }<?php if(!empty($saturday_open)): ?>,<?php endif;?>
    <?php endif;?>
    <?php if(!empty($saturday_open)): ?>
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "<?php echo get_option('saturday_open');?>",
      "closes": "<?php echo get_option('saturday_close');?>"
    }<?php endif;?>
  ],
            "telephone" : "<?php echo get_option( 'phone_3' );?>",
            "name": "<?php echo get_option( 'practice_name');?>",
        <?php $image_3 = get_option( 'location_image_3' );?>
            <?php if(!empty($image_3)):?>
            "image": "<?php echo get_option( 'location_image_3' );?>",
            <?php endif;?>
            
            "hasMap": "<?php echo get_option( 'direction_3' );?>",
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": "<?php echo get_option('lat_3');?>",
              "longitude": "<?php echo get_option('long_3');?>"
              }
        }
    ],
"email": "<?php echo get_option('email');?>",
<?php
$facebook =  get_option('facebook');
$google_plus = get_option('google_plus');
$linkedin = get_option('linkedin');
$twitter = get_option('twitter');
$yelp = get_option('yelp');
$links = array();
if(!empty($facebook)){
    array_push($links, '"'.$facebook.'"');
    array_push($links, ",");
}
if(!empty($google_plus)){
    array_push($links, '"'.$google_plus.'"');
    array_push($links, ",");
}
if(!empty($linkedin)){
    array_push($links, '"'.$linkedin.'"');
    array_push($links, ",");
}
if(!empty($twitter)){
    array_push($links, '"'.$twitter.'"');
    array_push($links, ",");
}
if(!empty($yelp)){
    array_push($links, '"'.$yelp.'"');
    array_push($links, ","); 
}
array_pop($links);
?>
"sameAs" : [<?php foreach($links as $link):?><?php echo $link;?><?php endforeach;?>]
}
</script>
<?php endif;?>